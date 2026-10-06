{{--
    AUDIENCE CTA — compact two-panel call to action (learners / organizations)
    with an interactive dot field. Hovering (or focusing / tapping) a panel pulls
    the nearby dots into a shape around its content; the cursor gently pushes
    dots away. Every class is prefixed "acta-" so it can't clash with theme styles.
--}}
<section class="acta-wrap" aria-label="Get started with Digicrome">
    <div class="acta-card" data-acta>
        <canvas class="acta-canvas" aria-hidden="true"></canvas>

        <div class="acta-panel" data-acta-panel="learners">
            <span class="acta-badge">FOR LEARNERS</span>
            <h2 class="acta-title">Build A Career in Data & AI</h2>
            <p class="acta-sub">Be Career-Ready.</p>
            <a href="{{ route('course') }}" class="acta-btn acta-btn-dark">Explore All Courses</a>
        </div>

        <div class="acta-panel" data-acta-panel="teams">
            <span class="acta-badge">FOR ORGANIZATIONS</span>
            <h2 class="acta-title">Build a Future-Ready AI</h2>
            <p class="acta-sub">Upskill your team with Data & AI.</p>
            <a href="{{ route('corporate_services') }}" class="acta-btn acta-btn-light">Talk to Us</a>
        </div>
    </div>
</section>

<style>
    .acta-wrap {
        padding: 48px 16px;
    }

    .acta-card {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width: 1100px;
        margin: 0 auto;
        min-height: 360px;
        background: #fff;
        border: 1px solid #ececf1;
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 20px 50px -30px rgba(17, 24, 39, .25);
    }

    .acta-canvas {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .acta-panel {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 48px 24px;
    }

    .acta-panel+.acta-panel::before {
        content: "";
        position: absolute;
        left: 0;
        top: 15%;
        bottom: 15%;
        width: 1px;
        background: linear-gradient(transparent, #e5e7eb, transparent);
    }

    .acta-badge {
        display: inline-block;
        font-size: 13px;
        line-height: 1;
        color: #111827;
        background: rgba(255, 255, 255, .9);
        border: 1px solid #e5e7eb;
        border-radius: 6px;
        padding: 7px 10px;
        margin-bottom: 18px;
    }

    .acta-title,
    .acta-sub {
        margin: 0;
        font-size: clamp(22px, 2.6vw, 30px);
        line-height: 1.12;
        letter-spacing: -.02em;
        font-weight: 500;
    }

    .acta-title {
        color: #111827;
    }

    .acta-sub {
        color: #4b5563;
        margin-bottom: 28px;
    }

    .acta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 30px;
        border-radius: 999px;
        font-size: 17px;
        font-weight: 500;
        text-decoration: none;
        transition: transform .25s ease, box-shadow .25s ease, background-color .25s ease;
    }

    .acta-btn::after {
        content: "\2192";
        display: inline-block;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        transition: max-width .25s ease, opacity .25s ease;
    }

    .acta-btn:hover::after,
    .acta-btn:focus-visible::after {
        max-width: 1em;
        opacity: 1;
    }

    .acta-btn:hover {
        transform: translateY(-2px);
    }

    .acta-btn-dark {
        background: #111827;
        color: #fff;
    }

    .acta-btn-dark:hover {
        color: #fff;
        box-shadow: 0 10px 24px -10px rgba(242, 156, 18, .7);
    }

    .acta-btn-light {
        background: #f3f4f6;
        color: #111827;
        border: 1px solid #e5e7eb;
    }

    .acta-btn-light:hover {
        color: #111827;
        background: #fff;
        box-shadow: 0 10px 24px -10px rgba(37, 99, 235, .55);
    }

    .acta-btn:focus-visible {
        outline: 2px solid #f29c12;
        outline-offset: 3px;
    }

    @media (max-width: 767px) {
        .acta-wrap {
            padding: 32px 16px;
        }

        .acta-card {
            grid-template-columns: 1fr;
            border-radius: 22px;
        }

        .acta-panel {
            padding: 44px 20px;
            min-height: 280px;
        }

        .acta-panel+.acta-panel::before {
            left: 15%;
            right: 15%;
            top: 0;
            bottom: auto;
            width: auto;
            height: 1px;
            background: linear-gradient(90deg, transparent, #e5e7eb, transparent);
        }
    }
</style>

<script>
    (function() {
        const card = document.querySelector('[data-acta]');
        if (!card) return;

        const canvas = card.querySelector('.acta-canvas');
        const ctx = canvas.getContext('2d');
        const panels = Array.from(card.querySelectorAll('[data-acta-panel]'));
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // Shape colour per panel (brand orange for learners, blue for teams).
        const COLORS = {
            learners: [242, 156, 18],
            teams: [37, 99, 235]
        };
        const IDLE = [107, 114, 128];

        let W = 0,
            H = 0,
            dpr = 1;
        let particles = [];
        let shapes = {}; // panel name -> array of {x, y} targets
        let active = null; // panel name currently hovered
        const mouse = {
            x: -9999,
            y: -9999
        };
        let running = false,
            visible = false,
            rafId = 0;

        // Sample points along the outline of something drawn on an offscreen canvas.
        function samplePoints(w, h, draw, count) {
            const off = document.createElement('canvas');
            off.width = Math.max(1, Math.round(w));
            off.height = Math.max(1, Math.round(h));
            const o = off.getContext('2d');
            o.strokeStyle = '#000';
            o.fillStyle = '#000';
            draw(o, off.width, off.height);
            const data = o.getImageData(0, 0, off.width, off.height).data;
            const pts = [];
            const step = 3;
            for (let y = 0; y < off.height; y += step) {
                for (let x = 0; x < off.width; x += step) {
                    if (data[(y * off.width + x) * 4 + 3] > 128) pts.push({
                        x,
                        y
                    });
                }
            }
            for (let i = pts.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [pts[i], pts[j]] = [pts[j], pts[i]];
            }
            return pts.slice(0, count);
        }

        // Learners: a pair of curly braces — "code / data" framing the content.
        function drawBraces(o, w, h) {
            const size = Math.min(h * 0.95, w * 0.62);
            o.font = '300 ' + size + 'px Georgia, "Times New Roman", serif';
            o.textAlign = 'center';
            o.textBaseline = 'middle';
            o.lineWidth = 2.5;
            const gap = Math.min(w * 0.37, 260);
            o.strokeText('{', w / 2 - gap, h / 2 + size * 0.03);
            o.strokeText('}', w / 2 + gap, h / 2 + size * 0.03);
        }

        // Organizations: six small rings of varied size floating around the content,
        // each slowly spinning — a team of connected groups. Values are panel-relative
        // (x, y in half-width / half-height units, r as a fraction of panel height).
        const RINGS = [
            [-0.82, -0.55, 0.10, 0.18],
            [-0.42, -0.80, 0.06, -0.26],
            [-0.80, 0.62, 0.08, 0.22],
            [0.80, -0.60, 0.08, -0.2],
            [0.45, 0.80, 0.06, 0.24],
            [0.84, 0.55, 0.10, -0.16]
        ];

        function ringPoints(w, h, count) {
            const totalR = RINGS.reduce(function(s, c) {
                return s + c[2];
            }, 0);
            const pts = [];
            RINGS.forEach(function(c, ci) {
                const r = Math.max(14, c[2] * h);
                const cx = Math.min(Math.max(w / 2 + c[0] * w / 2, r + 8), w - r - 8);
                const cy = Math.min(Math.max(h / 2 + c[1] * h / 2, r + 8), h - r - 8);
                const n = Math.round(count * c[2] / totalR);
                for (let i = 0; i < n; i++) {
                    pts.push({
                        cx: cx,
                        cy: cy,
                        r: r,
                        a: i * (Math.PI * 2 / n),
                        spin: c[3],
                        seed: ci
                    });
                }
            });
            return pts;
        }

        function build() {
            const rect = card.getBoundingClientRect();
            dpr = Math.min(window.devicePixelRatio || 1, 2);
            W = rect.width;
            H = rect.height;
            canvas.width = Math.round(W * dpr);
            canvas.height = Math.round(H * dpr);
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

            particles = [];
            shapes = {};
            const shapeCount = W < 768 ? 150 : 210;

            panels.forEach(function(panel) {
                const r = panel.getBoundingClientRect();
                const ox = r.left - rect.left,
                    oy = r.top - rect.top;
                const name = panel.dataset.actaPanel;
                const pts = name === 'learners' ?
                    samplePoints(r.width, r.height, drawBraces, shapeCount) :
                    ringPoints(r.width, r.height, shapeCount);

                shapes[name] = pts.map(function(p) {
                    return p.r ?
                        {
                            cx: p.cx + ox,
                            cy: p.cy + oy,
                            r: p.r,
                            a: p.a,
                            spin: p.spin,
                            seed: p.seed
                        } :
                        {
                            x: p.x + ox,
                            y: p.y + oy
                        };
                });

                // Particles that will form this panel's shape live inside the panel.
                pts.forEach(function(p, i) {
                    const hx = ox + Math.random() * r.width;
                    const hy = oy + Math.random() * r.height;
                    particles.push(makeParticle(hx, hy, name, i));
                });
            });

            // Background dust that never forms a shape.
            const dust = Math.round((W * H) / 2800);
            for (let i = 0; i < dust; i++) {
                particles.push(makeParticle(Math.random() * W, Math.random() * H, null, -1));
            }
        }

        function makeParticle(hx, hy, group, slot) {
            return {
                hx: hx,
                hy: hy, // home (idle) position
                x: hx,
                y: hy,
                vx: 0,
                vy: 0,
                group: group,
                slot: slot,
                phase: Math.random() * Math.PI * 2,
                // Each dot gets its own pull strength so the shape flows in gradually.
                k: 0.010 + Math.random() * 0.012,
                size: group ? 1.25 : 0.8 + Math.random() * 0.5,
                mix: 0 // 0 = idle colour, 1 = shape colour
            };
        }

        function frame(t) {
            ctx.clearRect(0, 0, W, H);
            const time = t / 1000;

            for (let i = 0; i < particles.length; i++) {
                const p = particles[i];
                const forming = active && p.group === active;
                let tx, ty;

                if (forming) {
                    const s = shapes[active][p.slot];
                    let sx, sy;
                    if (s.r) {
                        // Ring dots orbit slowly; each ring bobs gently on its own rhythm.
                        const ang = s.a + time * s.spin;
                        sx = s.cx + Math.cos(ang) * s.r;
                        sy = s.cy + Math.sin(ang) * s.r + Math.sin(time * 0.7 + s.seed) * 3;
                    } else {
                        sx = s.x;
                        sy = s.y;
                    }
                    // Soft breathing plus a very slight lean toward the cursor.
                    tx = sx + Math.sin(time * 0.8 + p.phase) * 0.8 + (mouse.x - sx) * 0.012;
                    ty = sy + Math.cos(time * 0.7 + p.phase) * 0.8 + (mouse.y - sy) * 0.012;
                } else {
                    tx = p.hx + Math.sin(time * 0.25 + p.phase) * 4;
                    ty = p.hy + Math.cos(time * 0.2 + p.phase) * 4;
                }

                // Gentle spring toward target.
                const k = forming ? p.k : 0.006;
                p.vx += (tx - p.x) * k;
                p.vy += (ty - p.y) * k;

                // Cursor softly pushes idle dots aside.
                if (!forming) {
                    const dx = p.x - mouse.x,
                        dy = p.y - mouse.y;
                    const d2 = dx * dx + dy * dy;
                    if (d2 < 80 * 80 && d2 > 0.01) {
                        const d = Math.sqrt(d2);
                        const f = (1 - d / 80) * 0.35;
                        p.vx += (dx / d) * f;
                        p.vy += (dy / d) * f;
                    }
                }

                p.vx *= 0.88;
                p.vy *= 0.88;
                p.x += p.vx;
                p.y += p.vy;

                p.mix += ((forming ? 1 : 0) - p.mix) * 0.035;
                const c = p.group ? COLORS[p.group] : IDLE;
                const r = IDLE[0] + (c[0] - IDLE[0]) * p.mix;
                const g = IDLE[1] + (c[1] - IDLE[1]) * p.mix;
                const b = IDLE[2] + (c[2] - IDLE[2]) * p.mix;
                const a = 0.3 + 0.6 * p.mix;

                ctx.fillStyle = 'rgba(' + (r | 0) + ',' + (g | 0) + ',' + (b | 0) + ',' + a + ')';
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size + p.mix * 0.4, 0, Math.PI * 2);
                ctx.fill();
            }

            if (running) rafId = requestAnimationFrame(frame);
        }

        function start() {
            if (running || reduceMotion) return;
            running = true;
            rafId = requestAnimationFrame(frame);
        }

        function stop() {
            running = false;
            cancelAnimationFrame(rafId);
        }

        function drawStatic() {
            // Reduced motion: show the idle dot field once, no animation.
            frame(0);
        }

        function setActive(name) {
            active = name;
        }

        panels.forEach(function(panel) {
            const name = panel.dataset.actaPanel;
            panel.addEventListener('mouseenter', function() {
                setActive(name);
            });
            panel.addEventListener('mouseleave', function() {
                if (active === name) setActive(null);
            });
            panel.addEventListener('focusin', function() {
                setActive(name);
            });
            panel.addEventListener('focusout', function() {
                if (active === name) setActive(null);
            });
            panel.addEventListener('touchstart', function() {
                setActive(name);
            }, {
                passive: true
            });
        });

        card.addEventListener('mousemove', function(e) {
            const r = card.getBoundingClientRect();
            mouse.x = e.clientX - r.left;
            mouse.y = e.clientY - r.top;
        });
        card.addEventListener('mouseleave', function() {
            mouse.x = mouse.y = -9999;
        });

        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                build();
                if (reduceMotion) drawStatic();
            }, 150);
        });

        // Only animate while the card is on screen.
        const io = new IntersectionObserver(function(entries) {
            visible = entries[0].isIntersecting;
            if (visible) start();
            else stop();
        }, {
            threshold: 0.05
        });

        build();
        if (reduceMotion) drawStatic();
        io.observe(card);
    })();
</script>
