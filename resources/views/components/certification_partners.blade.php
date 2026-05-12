{{-- =========================================
   AI/ML Inspired Certification Partners Section
   Requirements:
   - Bootstrap 5
   - Bootstrap Icons
   - Owl Carousel 2
   Usage:
   @include('certification_partners')
========================================= --}}

<style>
/* ===========================
   Certification Partners Section
=========================== */
.certification-section {
    position: relative;
    padding: 90px 0;
    background: linear-gradient(135deg, #f8fbff 0%, #ffffff 55%, #f4f8ff 100%);
    overflow: hidden;
}

/* Floating blurred shapes */
.certification-section::before,
.certification-section::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    filter: blur(70px);
    z-index: 0;
}

.certification-section::before {
    width: 280px;
    height: 280px;
    background: rgba(59, 130, 246, 0.12);
    top: -80px;
    left: -60px;
}

.certification-section::after {
    width: 320px;
    height: 320px;
    background: rgba(139, 92, 246, 0.10);
    bottom: -120px;
    right: -80px;
}

.certification-section .container {
    position: relative;
    z-index: 2;
}

/* Badge */
.partner-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 18px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.08);
    color: #2563eb;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.8px;
    text-transform: uppercase;
    margin-bottom: 20px;
}

/* Heading */
.partner-heading {
    font-size: 46px;
    line-height: 1.15;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 18px;
}

.partner-heading .gradient-text {
    background: linear-gradient(90deg, #2563eb, #7c3aed);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.partner-description {
    font-size: 17px;
    line-height: 1.9;
    color: #64748b;
    margin-bottom: 28px;
}

/* Feature List */
.partner-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.partner-features li {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 22px;
}

.feature-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    background: linear-gradient(135deg, #2563eb, #7c3aed);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 20px;
    flex-shrink: 0;
    box-shadow: 0 12px 25px rgba(37, 99, 235, 0.18);
}

.feature-content strong {
    display: block;
    font-size: 17px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 4px;
}

.feature-content span {
    color: #64748b;
    line-height: 1.7;
    font-size: 15px;
}

/* Logo Cards */
.brand-list .owl-stage {
    display: flex;
    align-items: stretch;
}

.brand-list .owl-item {
    display: flex;
}

.ai-brand-card {
    width: 100%;
    background: rgba(255, 255, 255, 0.95);
    border: 1px solid rgba(226, 232, 240, 0.9);
    border-radius: 28px;
    padding: 28px;
    min-height: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    box-shadow:
        0 15px 35px rgba(15, 23, 42, 0.06),
        0 5px 15px rgba(37, 99, 235, 0.04);
    transition: all 0.45s ease;
}

/* Animated gradient border line */
.ai-brand-card::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 1.5px;
    border-radius: 28px;
    background: linear-gradient(135deg, #2563eb, #7c3aed, #06b6d4);
    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
            mask-composite: exclude;
    opacity: 0.7;
}

/* Glow spot */
.ai-brand-card::after {
    content: "";
    position: absolute;
    width: 140px;
    height: 140px;
    background: radial-gradient(circle, rgba(37,99,235,0.12), transparent 70%);
    top: -40px;
    right: -30px;
    border-radius: 50%;
}

.ai-brand-card:hover {
    transform: translateY(-8px);
    box-shadow:
        0 28px 55px rgba(15, 23, 42, 0.10),
        0 12px 28px rgba(37, 99, 235, 0.10);
}

.ai-brand-card img {
    max-width: 100%;
    max-height: 110px;
    object-fit: contain;
    position: relative;
    z-index: 2;
    transition: transform 0.45s ease;
    filter: saturate(1.05);
}

.ai-brand-card:hover img {
    transform: scale(1.08);
}

/* Carousel Dots */
.brand-list .owl-dots {
    margin-top: 24px;
    text-align: center;
}

.brand-list .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 0 5px;
    border-radius: 50%;
    background: #cbd5e1;
    display: block;
    transition: all 0.3s ease;
}

.brand-list .owl-dot.active span {
    width: 28px;
    border-radius: 999px;
    background: linear-gradient(90deg, #2563eb, #7c3aed);
}

/* Responsive */
@media (max-width: 991px) {
    .certification-section {
        padding: 70px 0;
    }

    .partner-heading {
        font-size: 34px;
        margin-top: 35px;
    }
}

@media (max-width: 767px) {
    .partner-heading {
        font-size: 28px;
    }

    .partner-description {
        font-size: 15px;
        line-height: 1.8;
    }

    .ai-brand-card {
        min-height: 180px;
        padding: 20px;
    }

    .feature-icon {
        width: 42px;
        height: 42px;
        font-size: 18px;
    }
}
</style>

<section class="certification-section">
    <div class="container">
        <div class="row align-items-center g-5">

            {{-- Left Side: Certification Logos --}}
            <div class="col-lg-7">
                <div class="brand-list owl-carousel">
                    @foreach ($certificate as $logo)
                        <div class="item">
                            <div class="ai-brand-card">
                                <img
                                    loading="lazy"
                                    src="{{ asset('storage/' . $logo->image) }}"
                                    alt="Certification Partner"
                                    title="Certification Partner">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right Side: Content --}}
            <div class="col-lg-5">
                <div class="partner-badge">
                    <i class="bi bi-stars"></i>
                    Global Certification Network
                </div>

                <h2 class="partner-heading">
                    Our <span class="gradient-text">Certification Partners</span>
                </h2>

                <p class="partner-description">
                    Empowering learners through globally recognized certifications
                    with industry-leading organizations that validate skills and
                    accelerate careers in Data Science, AI, and emerging technologies.
                </p>

                <ul class="partner-features">
                    <li>
                        <div class="feature-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <div class="feature-content">
                            <strong>Trusted Collaboration</strong>
                            <span>
                                We partner with globally recognized certification
                                bodies to ensure every program meets international
                                quality standards.
                            </span>
                        </div>
                    </li>

                    <li>
                        <div class="feature-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div class="feature-content">
                            <strong>Career-Boosting Credentials</strong>
                            <span>
                                Earn certifications that strengthen your professional
                                profile and open doors to high-growth opportunities.
                            </span>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- Owl Carousel Initialization (optional if already initialized globally) --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof $ !== 'undefined' && $('.brand-list').length) {
        $('.brand-list').owlCarousel({
            loop: true,
            margin: 24,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
            smartSpeed: 700,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }
});
</script>
