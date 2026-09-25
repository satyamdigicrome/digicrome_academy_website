{{-- Scroll reveal + salary bar fill for the career / eligibility sections. Rendered once per page. --}}
@once
    <script>
        (function () {
            function run() {
                var els = Array.prototype.slice.call(document.querySelectorAll('.cs-reveal'));
                if (!('IntersectionObserver' in window)) {
                    els.forEach(function (el) { el.classList.add('cs-in'); });
                    return;
                }
                var io = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) return;
                        entry.target.classList.add('cs-in');
                        io.unobserve(entry.target);
                    });
                }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
                els.forEach(function (el) { io.observe(el); });
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', run);
            } else {
                run();
            }
        })();
    </script>
@endonce
