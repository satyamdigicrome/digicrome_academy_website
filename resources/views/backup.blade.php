{{-- <style>
        /* BACKDROP */
        .christmas-offer-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 9998;
            justify-content: center;
            align-items: center;
        }

        /* IMAGE CONTAINER */
        .christmas-offer-content {
            width: 90%;
            max-width: 900px;
            aspect-ratio: 16 / 9;
            background: url('{{ asset('assets/images/website_special_offer.gif') }}') center center / contain no-repeat;
            cursor: pointer;
        }

        /* CLOSE BUTTON */
        .christmas-close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 32px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            z-index: 9999;
            line-height: 1;
        }

        .christmas-close-btn:hover {
            color: #ffcc66;
        }

        /* MOBILE */
        @media (max-width: 576px) {
            .christmas-offer-content {
                width: 95%;
                aspect-ratio: 4 / 5;
            }
        }
    </style> --}}
        {{-- <div id="christmasOfferModal" class="christmas-offer-modal" style="display: flex;">
        <div class="christmas-offer-content" onclick="openFormFromOffer()">
        </div>
        <span class="christmas-close-btn" onclick="closeChristmasModal(event)">×</span>
    </div> --}}
    {{-- 
        // window.onload = function() {
        //     document.getElementById('christmasOfferModal').style.display = 'flex';
        // };

        // function openFormFromOffer() {
        //     document.getElementById('christmasOfferModal').style.display = 'none';

        //     const sourceInput = document.querySelector('#formModal input[name="source"]');
        //     if (sourceInput) {
        //         sourceInput.value = 'Website-Republic-sale';
        //     }
        //     openModal();
        // }

        // function closeChristmasModal(e) {
        //     e.stopPropagation(); // prevent image click
        //     document.getElementById('christmasOfferModal').style.display = 'none';
        // }
    --}}