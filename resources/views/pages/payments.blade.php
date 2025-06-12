@extends('layouts.app')

@section('title', $meta->title  ?? 'Digicrome')
@section('meta_description', $meta->description  ?? 'Digicrome')
@section('meta_keywords', $meta->keywords  ?? 'Digicrome')

@section('content')
<script>
  const detectedCountry = @json($userCountry); // Laravel-passed country
</script>


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
    const selectedCountryInput = document.getElementById('selectedCountry');
  
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
      selectedCountryBtn.innerHTML = `<img src="${flag}" alt="${name} flag"> ${name}`;
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

  @if($userCountry === 'India')
  {{-- Show Indian Payment Options --}}
  <section id="india-payment" style="padding: 40px; background-color: #f8f9fa;">
  <div style="display: flex; flex-direction: column; align-items: center; gap: 30px;">
    <div style="width: 90%; max-width: 700px; text-align: center;">
      <a href="https://pmny.in/UrN1I4c33yXF">
        <img src="{{ asset('assets/images/payu.webp') }}" alt="Pay with PayU" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
      </a>
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via PayU</p>
    </div>

    <div style="width: 90%; max-width: 700px; text-align: center;">
      <a href="https://rzp.io/l/MBT3RH7">
        <img src="{{ asset('assets/images/rezorpay.webp') }}" alt="Pay with Razorpay" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
      </a>
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Pay via Razorpay</p>
    </div>

    <div style="width: 90%; max-width: 700px; text-align: center;">
      <img src="{{ asset('assets/images/upi.webp') }}" alt="Pay via QR Code" style="width: 100%; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
      <p style="margin-top: 10px; font-size: 18px; color: #333;">Scan to Pay via QR</p>
    </div>
  </div>
  </section>
  @else
  {{-- Show Payment Cards for Other Countries --}}
  <section id="global-payment" style="display: none; padding: 40px; background-color: #f8f9fa;">
  <div class="container" style="border: 2px solid; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
    <div class="row">
        <div class="col-lg-6">
            <img src="https://digicrome.com/public/www/seoimg/paypal.webp" alt="digicrome_payment">
            </div>
        <div class="col-lg-6">
            
<h2 class="text-center mt-4 mb-3">Payment Details</h2>
<p class="text-muted text-center">Please provide the necessary information to proceed with the payment, as required by PayPal.</p>

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
<script src="https://www.paypal.com/sdk/js?client-id=BAANE4MFZN47qiPJFe5W2GKXlJNOFMVV8stKRJTIBrLbJrEzTLxcSZJKFt6sJhmt7y8HW17w3Dxf1BSUz0&components=hosted-buttons&disable-funding=venmo&currency=USD"></script>
<div id="paypal-container-5ZV526MJF5SMU"></div>
<script>
paypal.HostedButtons({
hostedButtonId: "5ZV526MJF5SMU",
}).render("#paypal-container-5ZV526MJF5SMU")
</script>
        </div>
    </div>
    <br><br>
 
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
<a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with Square</a>


<div class="powered">Powered by Square</div>
</div>
</div>
<div class="col-4">
    <div class="payment-card">
<div class="course-details">
<p><strong>Course:</strong> Professional Certification Course in Data Science with Machine Learning</p>
<p><strong>Duration:</strong> 6 Months</p>
<p><strong>Mode:</strong> Online</p>
<p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
</div>
<div class="price-tag">$1999</div>

<!-- Square Payment Button -->
<a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with Square</a>


<div class="powered">Powered by Square</div>
</div>
</div>
<div class="col-4">
    <div class="payment-card">
<div class="course-details">
<p><strong>Course:</strong> Advanced Certification Program in Generative AI & Deep Learning</p>
<p><strong>Duration:</strong> 6 Months</p>
<p><strong>Mode:</strong> Online</p>
<p><strong>Certification:</strong> IAF Verified Course Completion Certificate</p>
</div>
<div class="price-tag">$2999</div>

<!-- Square Payment Button -->
<a href="https://square.link/u/DfQCyLpH" target="_blank" class="square-btn">Pay with Square</a>


<div class="powered">Powered by Square</div>
</div>
</div>
</div>
</section>
  @endif
  
</section>
 


@endsection




