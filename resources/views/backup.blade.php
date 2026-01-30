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

    {{-- <div class="row">
                        <div class="col-4">
                            <div class="payment-card">
                                <div class="course-details">
                                    <p><strong>Course:</strong> Post Graduate Program In Data Science with Generative AI</p>
                                    <p><strong>Duration:</strong> 12 Months</p>
                                    <p><strong>Mode:</strong> Online</p>
                                    <p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
                                </div>
                                <div class="price-tag">$4499</div>

                                <!-- Square Payment Button -->
                                <a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with
                                    Square</a>


                                <div class="powered">Powered by Square</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="payment-card">
                                <div class="course-details">
                                    <p><strong>Course:</strong> Professional Certification Course in Data Science with
                                        Machine Learning</p>
                                    <p><strong>Duration:</strong> 6 Months</p>
                                    <p><strong>Mode:</strong> Online</p>
                                    <p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
                                </div>
                                <div class="price-tag">$1999</div>

                                <!-- Square Payment Button -->
                                <a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with
                                    Square</a>


                                <div class="powered">Powered by Square</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="payment-card">
                                <div class="course-details">
                                    <p><strong>Course:</strong> Advanced Certification Program in Generative AI & Deep
                                        Learning</p>
                                    <p><strong>Duration:</strong> 6 Months</p>
                                    <p><strong>Mode:</strong> Online</p>
                                    <p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
                                </div>
                                <div class="price-tag">$2999</div>

                                <!-- Square Payment Button -->
                                <a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with
                                    Square</a>


                                <div class="powered">Powered by Square</div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <img loading="lazy"src="https://digicrome.com/public/www/seoimg/paypal.webp"
                                alt="digicrome_payment" title="digicrome_payment">
                        </div>
                        <div class="col-lg-6">

                            <h2 class="text-center mt-4 mb-3">Payment Details</h2>
                            <p class="text-muted text-center">Please provide the necessary information to proceed with the
                                payment, as required by PayPal.</p>

                            <!--<form method="POST" action="#" onsubmit="getPayPalAccessToken(); return false;">-->
                            <!--    <input type="hidden" name="_token" value="xh7XFutT25bJCqcKcboOclrEmzSu6uJivY24XwwY">-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="name" class="form-label">Name</label>-->
                            <!--        <input type="text" class="form-control" id="name" name="name" required>-->
                            <!--    </div>-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="mobile" class="form-label">Mobile Number</label>-->
                            <!--        <input type="tel" class="form-control" id="mobile" name="mobile" required>-->
                            <!--    </div>-->

                            <!--    <div class="row mb-3">-->
                            <!--        <div class="col-md-6">-->
                            <!--            <label for="amount" class="form-label">Amount</label>-->
                            <!--            <input type="number" class="form-control" id="amount" name="amount" required>-->
                            <!--        </div>-->
                            <!--        <div class="col-md-6">-->
                            <!--            <label for="currency" class="form-label">Currency</label>-->
                            <!--            <select class="form-select" id="currency" name="currency" required>-->
                            <!--                <option value="USD">USD</option>-->
                            <!--                <option value="EUR">EUR</option>-->
                            <!--                <option value="GBP">GBP</option>-->
                            <!--                 Add more currency options as needed -->
                            <!--            </select>-->
                            <!--        </div>-->
                            <!--    </div>-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="course_name" class="form-label">Course Name</label>-->
                            <!--        <input type="text" class="form-control" id="course_name" name="course_name" required>-->
                            <!--    </div>-->

                            <!--    <div class="mb-3">-->
                            <!--        <label for="advisor_name" class="form-label">Career Growth Advisor Name</label>-->
                            <!--        <input type="text" class="form-control" id="advisor_name" name="advisor_name" required>-->
                            <!--    </div>-->

                            <!--    <button type="submit" class="btn btn-primary">Submit</button>-->
                            <!--</form>-->
                            <script
                                src="https://www.paypal.com/sdk/js?client-id=BAANE4MFZN47qiPJFe5W2GKXlJNOFMVV8stKRJTIBrLbJrEzTLxcSZJKFt6sJhmt7y8HW17w3Dxf1BSUz0&components=hosted-buttons&disable-funding=venmo&currency=USD">
                            </script>
                            <div id="paypal-container-5ZV526MJF5SMU"></div>
                            <script>
                                paypal.HostedButtons({
                                    hostedButtonId: "5ZV526MJF5SMU",
                                }).render("#paypal-container-5ZV526MJF5SMU")
                            </script>
                        </div>
                    </div>
                    <br><br> --}}