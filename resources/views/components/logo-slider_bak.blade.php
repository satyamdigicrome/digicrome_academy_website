<section class="logo-slider-section py-5">
    <h2 class="text-center mb-4" style="font-size: 2rem;">
        Trusted by <span style="color: #f29c12;">world's best</span> Organisations
    </h2>
    <div class="container-fluid custom-width">
        <div class="logo-marquee marquee-left">
            <div class="logo-track">
                @foreach ($companyLogos as $logo)
                    <div class="logo-item">
                        <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" loading="lazy" alt="brand">
                    </div>
                @endforeach
                @foreach ($companyLogos as $logo)
                    <div class="logo-item">
                        <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" loading="lazy" alt="brand">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="logo-marquee marquee-right mt-4">
            <div class="logo-track">
                @foreach ($companyLogos as $logo)
                    <div class="logo-item">
                        <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" alt="brand">
                    </div>
                @endforeach
                @foreach ($companyLogos as $logo)
                    <div class="logo-item">
                        <img loading="lazy"src="{{ asset('storage/' . $logo->image) }}" alt="brand">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<style>
    .logo-marquee {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
    }

    .logo-track {
        display: flex;
        width: max-content;
    }

    .logo-item {
        flex: 0 0 auto;
        padding: 0 30px;
    }

    .logo-item img {
        height: 60px;
        object-fit: contain;
    }

    .marquee-left .logo-track {
        animation: scrollLeftToRight 120s linear infinite;
    }

    .marquee-right .logo-track {
        animation: scrollRightToLeft 120s linear infinite;
    }

    @keyframes scrollLeftToRight {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    @keyframes scrollRightToLeft {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>
