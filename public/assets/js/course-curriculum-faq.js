/* ==========================================================================
   Course detail page — Curriculum + FAQ behaviour
   Self-contained, no jQuery / Bootstrap dependency.

   Markup contract:
     [data-dc-accordion]              accordion root  (data-dc-single="true"
                                      keeps only one panel open at a time)
       [data-dc-item]                   one row       (.is-open when expanded)
         [data-dc-toggle]                 the button
         [data-dc-panel]                  the collapsible region
     [data-dc-expand]   / [data-dc-collapse]   bulk controls, scoped by
                                      data-dc-target="#accordionId"
     [data-dc-search]   filter input, scoped by data-dc-target="#accordionId"
     [data-dc-empty]    "no results" node inside that accordion
     [data-dc-count]    number to count up when scrolled into view
     .dc-reveal         fade/slide in when scrolled into view
   ========================================================================== */
(function () {
    'use strict';

    // .dc-js is already on <html> (inline head script) — it gates the CSS that
    // collapses panels, so this file only has to drive the behaviour.
    var reduceMotion = window.matchMedia &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---------------------------------------------------------------- utils */

    function toArray(list) {
        return Array.prototype.slice.call(list || []);
    }

    function panelOf(item) {
        return item.querySelector('[data-dc-panel]');
    }

    function toggleOf(item) {
        return item.querySelector('[data-dc-toggle]');
    }

    /* -------------------------------------------------------- open / close */

    function openItem(item) {
        var panel = panelOf(item);
        var btn = toggleOf(item);
        if (!panel || item.classList.contains('is-open')) { return; }

        item.classList.add('is-open');
        if (btn) { btn.setAttribute('aria-expanded', 'true'); }

        if (reduceMotion) {
            panel.style.maxHeight = 'none';
            return;
        }
        panel.style.maxHeight = panel.scrollHeight + 'px';
    }

    function closeItem(item) {
        var panel = panelOf(item);
        var btn = toggleOf(item);
        if (!panel || !item.classList.contains('is-open')) { return; }

        // A panel left at max-height:none has to be given a concrete height
        // again before it can animate back down.
        if (panel.style.maxHeight === 'none' || panel.style.maxHeight === '') {
            panel.style.maxHeight = panel.scrollHeight + 'px';
            void panel.offsetHeight;
        }

        item.classList.remove('is-open');
        if (btn) { btn.setAttribute('aria-expanded', 'false'); }
        panel.style.maxHeight = '0px';
    }

    /* Once the open animation has finished, drop the fixed height so the panel
       can grow if its content reflows (font swap, window resize, ...). */
    function releaseHeight(panel) {
        panel.addEventListener('transitionend', function (e) {
            if (e.propertyName !== 'max-height') { return; }
            var item = panel.closest('[data-dc-item]');
            if (item && item.classList.contains('is-open')) {
                panel.style.maxHeight = 'none';
            }
        });
    }

    /* ------------------------------------------------------------ accordion */

    function initAccordion(acc) {
        var single = acc.getAttribute('data-dc-single') === 'true';
        var items = toArray(acc.querySelectorAll('[data-dc-item]'));

        items.forEach(function (item) {
            var btn = toggleOf(item);
            var panel = panelOf(item);
            if (!btn || !panel) { return; }

            releaseHeight(panel);

            // Blade renders the first row pre-marked as open; sync its height.
            if (item.classList.contains('is-open')) {
                btn.setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = reduceMotion ? 'none' : panel.scrollHeight + 'px';
            } else {
                btn.setAttribute('aria-expanded', 'false');
                panel.style.maxHeight = '0px';
            }

            btn.addEventListener('click', function () {
                var willOpen = !item.classList.contains('is-open');

                if (willOpen && single) {
                    items.forEach(function (other) {
                        if (other !== item) { closeItem(other); }
                    });
                }
                if (willOpen) { openItem(item); } else { closeItem(item); }
            });
        });

        // Keep open panels correctly sized when the layout reflows.
        var resizeTimer;
        window.addEventListener('resize', function () {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function () {
                items.forEach(function (item) {
                    var panel = panelOf(item);
                    if (panel && item.classList.contains('is-open')) {
                        panel.style.maxHeight = 'none';
                    }
                });
            }, 150);
        });

        return items;
    }

    /* ------------------------------------------------------ search / filter */

    function normalise(value) {
        return (value || '').toLowerCase().replace(/\s+/g, ' ').trim();
    }

    function initSearch(input) {
        var acc = document.querySelector(input.getAttribute('data-dc-target'));
        if (!acc) { return; }

        var items = toArray(acc.querySelectorAll('[data-dc-item]'));
        var empty = acc.querySelector('[data-dc-empty]');

        // Cache the haystack once — searching re-reads nothing from the DOM.
        var haystacks = items.map(function (item) {
            return normalise(item.textContent);
        });

        var timer;
        input.addEventListener('input', function () {
            clearTimeout(timer);
            timer = setTimeout(function () {
                var query = normalise(input.value);
                var matches = 0;

                items.forEach(function (item, i) {
                    var hit = query === '' || haystacks[i].indexOf(query) !== -1;
                    item.classList.toggle('is-hidden', !hit);
                    if (hit) { matches++; }
                    // Auto-expand matches so the hit is actually visible.
                    if (query !== '' && hit) {
                        openItem(item);
                    } else if (query !== '') {
                        closeItem(item);
                    }
                });

                if (empty) {
                    empty.classList.toggle('is-shown', matches === 0);
                }
            }, 120);
        });
    }

    /* ------------------------------------------------------- bulk expand ops */

    function initBulk(btn, action) {
        var acc = document.querySelector(btn.getAttribute('data-dc-target'));
        if (!acc) { return; }

        btn.addEventListener('click', function () {
            toArray(acc.querySelectorAll('[data-dc-item]')).forEach(function (item) {
                if (item.classList.contains('is-hidden')) { return; }
                if (action === 'expand') { openItem(item); } else { closeItem(item); }
            });
        });
    }

    /* ------------------------------------------------------------- counters */

    function runCounter(el) {
        var target = parseInt(el.getAttribute('data-dc-count'), 10) || 0;

        if (reduceMotion || target === 0) {
            el.textContent = String(target);
            return;
        }

        var duration = 1100;
        var start = null;

        function step(now) {
            if (start === null) { start = now; }
            var progress = Math.min((now - start) / duration, 1);
            // easeOutCubic
            var eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = String(Math.round(target * eased));
            if (progress < 1) { requestAnimationFrame(step); }
        }
        requestAnimationFrame(step);
    }

    /* ------------------------------------------------- scroll-driven effects */

    function initObservers() {
        var reveals = toArray(document.querySelectorAll('.dc-reveal'));
        var counters = toArray(document.querySelectorAll('[data-dc-count]'));

        if (!('IntersectionObserver' in window)) {
            reveals.forEach(function (el) { el.classList.add('is-in'); });
            counters.forEach(function (el) {
                el.textContent = el.getAttribute('data-dc-count');
            });
            return;
        }

        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) { return; }
                entry.target.classList.add('is-in');
                revealObserver.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

        reveals.forEach(function (el) { revealObserver.observe(el); });

        var countObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) { return; }
                runCounter(entry.target);
                countObserver.unobserve(entry.target);
            });
        }, { threshold: 0.4 });

        counters.forEach(function (el) { countObserver.observe(el); });
    }

    /* ----------------------------------------------------------- deep links */

    function openFromHash() {
        if (!window.location.hash) { return; }

        var target;
        try {
            target = document.querySelector(window.location.hash);
        } catch (e) {
            return;
        }
        if (!target) { return; }

        var item = target.closest ? target.closest('[data-dc-item]') : null;
        if (!item) { return; }

        openItem(item);
        setTimeout(function () {
            item.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'center' });
        }, 120);
    }

    /* ------------------------------------------------------------------ boot */

    function init() {
        toArray(document.querySelectorAll('[data-dc-accordion]')).forEach(initAccordion);
        toArray(document.querySelectorAll('[data-dc-search]')).forEach(initSearch);
        toArray(document.querySelectorAll('[data-dc-expand]')).forEach(function (b) {
            initBulk(b, 'expand');
        });
        toArray(document.querySelectorAll('[data-dc-collapse]')).forEach(function (b) {
            initBulk(b, 'collapse');
        });
        initObservers();
        openFromHash();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
}());
