<section class="cfb-section" {{ Route::currentRouteName() === 'success_stories' ? 'id=cfb-section' : '' }}>
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="cfb-title">Our Learners Are Making Their Mark</h2>
            <p class="cfb-subtitle">Learners at Digicrome are showcasing their certifications, skills, and career
                achievements on LinkedIn after completing industry-focused programs.</p>
        </div>

        <div class="row g-4">
            @forelse ($feedbacks as $feedback)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cfb-card" role="button" tabindex="0"
                        onclick="cfbRedirect(event, '{{ $feedback->post_link }}')"
                        onkeypress="if(event.key==='Enter'){cfbRedirect(event, '{{ $feedback->post_link }}')}">

                        <div class="cfb-iframe-wrap">
                            <iframe src="{{ $feedback->iframe_link }}" height="500" frameborder="0" allowfullscreen=""
                                title="embedded-post">
                            </iframe>
                        </div>

                        <a href="{{ $feedback->post_link }}" target="_blank" rel="noopener" class="cfb-view-btn"
                            onclick="event.stopPropagation()">
                            View on LinkedIn <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-white-50">
                    No feedback posts added yet.
                </div>
            @endforelse
        </div>
        @if(Route::currentRouteName() !== 'success_stories')
            <div class="text-center mt-4">
                <a href="{{ route('success_stories') }}#cfb-section" class="cfb-more-btn">See More Success Stories</a>
            </div>
        @endif
    </div>
</section>

<style>
    .cfb-section {
        background: #000;
        padding: 70px 0;
    }

    .cfb-title {
        color: #fff;
        font-weight: 700;
        font-size: 2.4rem;
    }

    .cfb-subtitle {
        color: #b5b5b5;
        font-size: 1.05rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .cfb-card {
        position: relative;
        background: #0f0f0f;
        border: 1px solid #262626;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease;
        display: flex;
        flex-direction: column;
        height: 520px;
    }

    .cfb-card:hover {
        transform: translateY(-4px);
        border-color: #0a66c2;
        box-shadow: 0 8px 24px rgba(10, 102, 194, .25);
    }

    .cfb-iframe-wrap {
        flex: 1;
        overflow: hidden;
    }

    .cfb-iframe-wrap iframe {
        width: 100%;
        height: 100%;
        border: 0;
        display: block;
        pointer-events: none;
        /* card click takes priority, no scroll trap inside */
    }

    .cfb-more-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 10px 24px;
        border-radius: 50px;
        background: #0a66c2;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        transition: background .2s ease;
    }

    .cfb-more-btn:hover {
        background: #084e96;
    }

    .cfb-view-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        background: #0a66c2;
        color: #fff !important;
        text-decoration: none;
        font-size: .85rem;
        font-weight: 600;
        padding: 8px 0;
    }

    .cfb-view-btn:hover {
        background: #084e96;
    }
</style>

<script>
    function cfbRedirect(e, url) {
        window.open(url, '_blank', 'noopener');
    }
</script>
