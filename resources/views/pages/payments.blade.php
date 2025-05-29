@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="payment-img d-flex">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
      <div class="breadcumb-content">
        <div class="breadcumb-title">
        <h4>Payments</h4>
        </div>
        <ul>
        <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
        <li>Payments</li>
        </ul>
      </div>
      </div>
    </div>
    <div class="breadcumb-shape">
      <img src="{{ asset('assets/images/inner-img/breadcumb-dot.webp') }}" alt="dot">
    </div>
    <div class="breadcumb-shape2">
      <img src="{{ asset('assets/images/inner-img/breadcumb-ball.webp') }}" alt="ball">
    </div>
    </div>
  </div>
  <div class="dropdown" id="customDropdown">
    <button class="dropdown-toggle" onclick="toggleDropdown()">Select Country</button>
    <div class="dropdown-menu" id="dropdownMenu">
      <div class="dropdown-columns" id="dropdownColumns">
        <!-- Country list will appear here in 4 columns -->
      </div>
    </div>
  </div>
  
  <script>
    const dropdownMenu = document.getElementById('dropdownMenu');
    const dropdownColumns = document.getElementById('dropdownColumns');
  
    function toggleDropdown() {
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }
  
    window.addEventListener('click', function (e) {
      if (!document.getElementById('customDropdown').contains(e.target)) {
        dropdownMenu.style.display = 'none';
      }
    });
  
    // Fetch and populate
    fetch('https://restcountries.com/v3.1/all')
      .then(res => res.json())
      .then(countries => {
        countries.sort((a, b) => a.name.common.localeCompare(b.name.common));
        countries.forEach(country => {
          const link = document.createElement('a');
          link.href = '#';
          link.innerHTML = `
            <img src="${country.flags.svg}" alt="${country.name.common} flag">
            ${country.name.common}
          `;
          dropdownColumns.appendChild(link);
        });
      })
      .catch(error => {
        console.error('Error fetching countries:', error);
        dropdownColumns.innerHTML = '<p>Could not load countries.</p>';
      });
  </script>
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-toggle {
      padding: 10px;
      background-color: #f29c12;
      color: white;
      border: none;
      cursor: pointer;
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
      grid-template-columns: repeat(4, 1fr); /* 4 columns */
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
  </style>

<section style="padding: 40px; background-color: #f8f9fa;">
  <div style="text-align: center; margin-bottom: 30px;">
    <h2 style="font-size: 32px; color: #333;">Choose Your Payment Method</h2>
    <p style="font-size: 18px; color: #555;">Select a convenient option below to make your payment</p>
  </div>

  <div style="display: flex; flex-direction: column; align-items: center; gap: 30px;">
    <!-- PayU Payment -->
    <div style="width: 90%; max-width: 700px; text-align: center;">
      <img src="{{ asset('assets/images/payu.webp') }}" alt="Pay with PayU" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via PayU</p>
    </div>

    <!-- Razorpay Payment -->
    <div style="width: 90%; max-width: 700px; text-align: center;">
      <img src="{{ asset('assets/images/rezorpay.webp') }}" alt="Pay with Razorpay" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via Razorpay</p>
    </div>

    <!-- QR Code Payment -->
    <div style="width: 90%; max-width: 700px; text-align: center;">
      <img src="{{ asset('assets/images/upi.webp') }}" alt="Pay via QR Code" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Scan to Pay via QR</p>
    </div>
  </div>
</section>

  
</section>
 


@endsection




