/*
 * Attaches sources to below-the-fold video and iframe embeds only once they are
 * about to be seen.
 *
 * Autoplaying video and embedded players are the heaviest things on the marketing
 * pages — the homepage and success-stories carousels alone hold 29 clips — and
 * every one of them downloads during initial page load if its src is in the
 * markup, whether or not the visitor ever scrolls that far.
 *
 * Markup contract:
 *   <video class="js-deferred-video" preload="none" data-src="..." [data-type="video/mp4"]>
 *   <iframe class="js-deferred-iframe" data-src="...">
 *
 * Give the element (or its container) a fixed size or aspect-ratio, since nothing
 * occupies the box until the source lands.
 *
 * Call window.initDeferredMedia() again after injecting more markup — carousels
 * that clone slides need a re-scan. Already-activated elements are skipped.
 */
(function () {
    'use strict';

    var SELECTOR = '.js-deferred-iframe[data-src]:not([data-activated]),' +
        '.js-deferred-video[data-src]:not([data-activated])';

    function activate(el) {
        if (el.dataset.activated) return;
        el.dataset.activated = '1';

        if (el.tagName === 'IFRAME') {
            el.src = el.dataset.src;
            return;
        }

        var source = document.createElement('source');
        source.src = el.dataset.src;
        source.type = el.dataset.type || 'video/mp4';
        el.appendChild(source);
        el.load();

        // Autoplay is refused unless the clip is muted, and refusal rejects.
        var started = el.play();
        if (started && started.catch) started.catch(function () {});
    }

    function init() {
        var targets = document.querySelectorAll(SELECTOR);
        if (!targets.length) return;

        if (!('IntersectionObserver' in window)) {
            Array.prototype.forEach.call(targets, activate);
            return;
        }

        var observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                activate(entry.target);
                obs.unobserve(entry.target);
            });
        }, {
            // Start fetching slightly before the element scrolls in, so playback
            // has begun by the time it is actually on screen.
            rootMargin: '300px 0px'
        });

        Array.prototype.forEach.call(targets, function (el) {
            observer.observe(el);
        });
    }

    window.initDeferredMedia = init;

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
