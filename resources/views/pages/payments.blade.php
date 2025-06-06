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
    <button class="dropdown-toggle" onclick="toggleDropdown()" id="selectedCountryBtn">
      Select Country
    </button>
    <div class="dropdown-menu" id="dropdownMenu">
      <div class="dropdown-columns" id="dropdownColumns">
        <!-- Country list will appear here in 4 columns -->
      </div>
    </div>
  </div>
  
  <script>
    const dropdownMenu = document.getElementById('dropdownMenu');
    const dropdownColumns = document.getElementById('dropdownColumns');
    const selectedCountryBtn = document.getElementById('selectedCountryBtn');
  
    function toggleDropdown() {
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    }
  
    window.addEventListener('click', function (e) {
      if (!document.getElementById('customDropdown').contains(e.target)) {
        dropdownMenu.style.display = 'none';
      }
    });
  
    // Fetch and populate using the working API
    fetch('https://countriesnow.space/api/v0.1/countries/flag/images')
      .then(res => res.json())
      .then(response => {
        const countries = response.data;
        countries.sort((a, b) => a.name.localeCompare(b.name));
  
        const columnCount = 4;
        const columnData = Array.from({ length: columnCount }, () => []);
  
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
              <img src="${country.flag}" alt="${country.name} flag">
              ${country.name}
            `;
            link.onclick = () => {
              selectedCountryBtn.innerHTML = `
                <img src="${country.flag}" alt="${country.name} flag">
                ${country.name}
              `;
              dropdownMenu.style.display = 'none';
            };
            column.appendChild(link);
          });
  
          dropdownColumns.appendChild(column);
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
    
  .dropdown-toggle img {
    width: 20px;
    height: 14px;
    object-fit: contain;
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
      <a href="https://pmny.in/UrN1I4c33yXF">
      <img src="{{ asset('assets/images/payu.webp') }}" alt="Pay with PayU" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"></a>
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via PayU</p>
    </div>

    <!-- Razorpay Payment -->
    <div style="width: 90%; max-width: 700px; text-align: center;"><a href="https://rzp.io/l/MBT3RH7">
      <img src="{{ asset('assets/images/rezorpay.webp') }}" alt="Pay with Razorpay" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"><a>
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




