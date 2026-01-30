@extends('layouts.app')

@section('title', $meta->title ?? 'Digicrome')
@section('meta_description', $meta->description ?? 'Digicrome')
@section('meta_keywords', $meta->keywords ?? 'Digicrome')


@section('content')
    @include('components.lead-form-popup')

    <script>
        const detectedCountry = @json($userCountry); // Laravel-passed country
    </script>


    <div class="payment-img d-flex" style="background-image: url({{ asset('assets/images/contact-header-img.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4 style="color: #fff">Payments</h4>
                        </div>
                        {{-- <ul>
        <li><a href="#" style="color: #fff">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
        <li style="color: #fff">Payments</li>
        </ul> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="breadcumb-shape">
      <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
    </div>
    <div class="breadcumb-shape2">
      <img loading="lazy"src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
    </div> --}}
        </div>
    </div>
    {{-- <div class="dropdown" id="customDropdown">
        <button class="dropdown-toggle" onclick="toggleDropdown()" id="selectedCountryBtn">
            Select Country
        </button>
        <div class="dropdown-menu" id="dropdownMenu">
            <div class="dropdown-columns" id="dropdownColumns">
                <!-- Country list will appear here in 4 columns -->
            </div>
        </div>
    </div> --}}

    <script>
        const dropdownMenu = document.getElementById('dropdownMenu');
        const dropdownColumns = document.getElementById('dropdownColumns');
        const selectedCountryBtn = document.getElementById('selectedCountryBtn');
        const selectedCountryInput = document.getElementById('selectedCountry');

        function toggleDropdown() {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        }

        window.addEventListener('click', function(e) {
            if (!document.getElementById('customDropdown').contains(e.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
        fetch('https://countriesnow.space/api/v0.1/countries/flag/images')
            .then(res => res.json())
            .then(response => {
                const countries = response.data;
                countries.sort((a, b) => a.name.localeCompare(b.name));

                const columnCount = 4;
                const columnData = Array.from({
                    length: columnCount
                }, () => []);

                countries.forEach((country, i) => {
                    const index = i % columnCount;
                    columnData[index].push(country);
                });

                dropdownColumns.innerHTML = '';

                columnData.forEach(col => {
                    const column = document.createElement('div');
                    column.className = 'column';

                    col.forEach(country => {
                        const link = document.createElement('a');
                        link.innerHTML = `
              <img loading="lazy"src="${country.flag}" alt="${country.name} title="{country.name}" flag">
              ${country.name}
            `;
                        link.onclick = () => {
                            setCountry(country.name, country.flag);
                            dropdownMenu.style.display = 'none';
                        };
                        column.appendChild(link);
                    });

                    dropdownColumns.appendChild(column);
                });

                // Auto-select detected country
                const defaultCountry = countries.find(c => c.name === detectedCountry);
                if (defaultCountry) {
                    setCountry(defaultCountry.name, defaultCountry.flag);
                }
            })
            .catch(error => {
                console.error('Error fetching countries:', error);
                dropdownColumns.innerHTML = '<p>Could not load countries.</p>';
            });

        function setCountry(name, flag) {
            selectedCountryBtn.innerHTML = `<img loading="lazy"src="${flag}" alt="${name} title="{name}" flag"> ${name}`;
            selectedCountryInput.value = name;

            // Toggle content based on selected country
            togglePaymentContent(name);
        }

        function togglePaymentContent(countryName) {
            const indiaContent = document.getElementById('india-payment');
            const globalContent = document.getElementById('global-payment');

            if (countryName === 'India') {
                indiaContent.style.display = 'block';
                globalContent.style.display = 'none';
            } else {
                indiaContent.style.display = 'none';
                globalContent.style.display = 'flex';
            }
        }
    </script>

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-toggle {
            padding: 10px 16px;
            background-color: #f29c12;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            max-height: 400px;
            overflow-y: auto;
            background-color: white;
            border: 1px solid #ccc;
            width: 900px;
            padding: 10px;
            z-index: 1000;
        }

        .dropdown-columns {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* 4 columns */
            gap: 10px;
        }

        .dropdown-columns a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black;
            padding: 5px;
            border-radius: 4px;
        }

        .dropdown-columns a:hover {
            background-color: #f0f0f0;
        }

        .dropdown-columns img {
            width: 20px;
            margin-right: 8px;
        }

        .dropdown-toggle img {
            width: 20px;
            height: 14px;
            object-fit: contain;
        }
    </style>
    <style>
        .payment-card {
            position: relative;
            height: 460px;
            /* FORCE EQUAL HEIGHT */
            background: #fff;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
            text-align: center;
        }

        /* TOP CURVED BG */
        .card-bg {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            left: -115%;
            top: -5%;
            transform: translate(50%, -50%);
        }

        .green-card .card-bg {
            background: linear-gradient(98deg, #a6c34c, #6fae2e, #4c8c1f, #2f6e14);
        }

        .orange-card .card-bg {
            background: linear-gradient(#faaf46, #f69947, #f2744c, #ff7144);
        }

        .blue-card .card-bg {
            background: linear-gradient(98deg, #6da8e8, #485fc1, #2a3399, #232396);
        }

        /* ICON */
        .card-icon {
            position: absolute;
            top: 72%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 180px;
        }

        /* CONTENT */
        .card-content {
            position: relative;
            z-index: 2;
            height: 100%;
            padding: 260px 20px 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-content h3 {
            font-size: 22px;
            font-weight: 600;
        }

        .card-content p {
            font-size: 17px;
            font-weight: 500;
        }

        /* BUTTON */
        .pay-btn {
            border: none;
            padding: 10px 26px;
            border-radius: 30px;
            color: #fff;
            font-size: 18px;
            transition: .3s;
        }

        .pay-btn:hover {
            transform: scale(1.05);
        }

        .green-btn {
            background: linear-gradient(98deg, #a6c34c, #2f6e14);
        }

        .orange-btn {
            background: linear-gradient(#faaf46, #ff7144);
        }

        .blue-btn {
            background: linear-gradient(98deg, #6da8e8, #232396);
        }

        .upi-qr {
            width: 110px;
            margin: 10px auto;
        }
    </style>

    <section style="padding: 40px; background-color: #f8f9fa;">
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="font-size: 32px; color: #333;">Choose Your Payment Method</h1>
            <p style="font-size: 18px; color: #555;">Select a convenient option below to make your payment</p>
        </div>

        @if ($userCountry === 'India' || true)
            {{-- <section id="india-payment" style="padding: 40px; background-color: #f8f9fa;">
                <div style="display: flex; flex-direction: column; align-items: center; gap: 30px;">

                    <div style="width: 90%; max-width: 700px; text-align: center;">
                        <img loading="lazy"src="{{ asset('assets/images/upi.webp') }}" alt="Pay via QR Code"
                            title="Pay via QR Code"
                            style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <p style="margin-top: 10px; font-size: 18px; color: #333;">Scan to Pay via QR</p>
                    </div>
                    <div style="width: 90%; max-width: 700px; text-align: center;">
                        <a href="https://rzp.io/l/MBT3RH7">
                            <img loading="lazy"src="{{ asset('assets/images/rezorpay.webp') }}" alt="Pay with Razorpay"
                                title="Pay with Razorpay"
                                style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        </a>
                        <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via Razorpay</p>
                    </div>

                    <div style="width: 90%; max-width: 700px; text-align: center;">
                        <a href="https://pmny.in/UrN1I4c33yXF">
                            <img loading="lazy"src="{{ asset('assets/images/payu.webp') }}" alt="Pay with PayU"
                                title="Pay with PayU"
                                style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        </a>
                        <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via PayU</p>
                    </div>
                </div>
            </section> --}}
            <section id="india-payment" class="payment-section">
                <div class="container my-5">
                    <div class="row g-4 justify-content-center">

                        <!-- BANK -->
                        <div class="col-lg-4 col-md-6">
                            <div class="payment-card green-card">
                                <div class="card-bg">
                                    <img src="{{ asset('assets/images/icons8-bank-100.svg') }}" class="card-icon">
                                </div>

                                <div class="card-content">
                                    <h3>Direct Bank Transfer</h3>
                                    <p>NEFT / RTGS / IMPS</p>

                                    <button class="pay-btn green-btn" data-bs-toggle="modal" data-bs-target="#bankModal">
                                        Pay with Net Banking
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- UPI -->
                        <div class="col-lg-4 col-md-6">
                            <div class="payment-card orange-card">
                                <div class="card-bg">
                                    <img src="{{ asset('assets/images/upi.webp') }}" class="card-icon"
                                        style="border-radius: 0px 10px 10px 0px;">
                                </div>

                                <div class="card-content">
                                    <h3>UPI Payments</h3>

                                    {{-- <img src="" sclass="upi-qr"> --}}

                                    <p>Google Pay / PhonePe</p>

                                    <button class="pay-btn orange-btn" data-bs-toggle="modal" data-bs-target="#upiModal">
                                        Pay with UPI
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- RAZORPAY -->
                        <div class="col-lg-4 col-md-6">
                            <div class="payment-card blue-card">
                                <div class="card-bg">
                                    <img src="{{ asset('assets/images/razorpay-icon.svg') }}" class="card-icon">
                                </div>

                                <div class="card-content">
                                    <h3>Razorpay Payments</h3>
                                    <p>Cards, Net Banking & Wallets</p>

                                    <a href="https://rzp.io/l/MBT3RH7">
                                        <button class="pay-btn blue-btn">
                                            Pay with Razorpay
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        @else
            <section id="global-payment" style="padding: 40px; background-color: #f8f9fa;">
                <div class="container"
                    style="border: 2px solid; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <style>
                        .payment-card {
                            background: white;
                            border-radius: 20px;
                            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
                            padding: 30px;
                            text-align: center;
                            position: relative;
                        }

                        .payment-card h2 {
                            font-size: 22px;
                            margin-bottom: 15px;
                            color: #2c3e50;
                        }

                        .course-details {
                            background: #f8f9fa;
                            padding: 15px;
                            border-radius: 12px;
                            margin-bottom: 25px;
                            text-align: left;
                            color: #34495e;
                        }

                        .course-details p {
                            margin: 8px 0;
                        }

                        .price-tag {
                            font-size: 24px;
                            color: #27ae60;
                            font-weight: bold;
                            margin: 15px 0;
                        }

                        .square-btn {
                            background-color: #006aff;
                            color: white;
                            padding: 14px 24px;
                            border: none;
                            border-radius: 10px;
                            font-size: 16px;
                            cursor: pointer;
                            transition: all 0.3s ease;
                            text-transform: uppercase;
                            letter-spacing: 1px;
                        }

                        .square-btn:hover {
                            background-color: #0051c3;
                            transform: scale(1.05);
                        }

                        .powered {
                            margin-top: 20px;
                            font-size: 12px;
                            color: #999;
                        }
                    </style>
                    <div class="row">
                        <div style="width: 90%; max-width: 700px; text-align: center;">
                            <a href="https://rzp.io/rzp/nUTt5wT">
                                <img loading="lazy"src="{{ asset('assets/images/rezorpay.webp') }}" alt="Pay with Razorpay"
                                    title="Pay with Razorpay"
                                    style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                            </a>
                            <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via Razorpay</p>
                        </div>
                    </div>
            </section>
        @endif

    </section>


    <div class="modal fade" id="upiModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <h4>Scan & Pay (UPI)</h4>
                <img src="{{ asset('assets/images/upiqr.webp') }}" alt="UPI QR"
                    style="width:100%; max-width:280px; margin:20px auto;">
                <p>Use Google Pay / PhonePe / Paytm</p>
                <button class="btn btn-secondary mt-3" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="bankModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4">
                <h4 class="text-center mb-3">Bank Account Details</h4>

                <table class="table table-bordered">
                    <tr>
                        <th>Account Name</th>
                        <td>Digicrome Private Limited</td>
                    </tr>
                    <tr>
                        <th>Bank Name</th>
                        <td>ICICI Bank</td>
                    </tr>
                    <tr>
                        <th>Account Number</th>
                        <td>003105041501</td>
                    </tr>
                    <tr>
                        <th>IFSC Code</th>
                        <td>ICIC0000031</td>
                    </tr>
                    <tr>
                        <th>Branch</th>
                        <td>Sector-18, Noida U.P</td>
                    </tr>
                </table>

                <div class="text-center">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection
