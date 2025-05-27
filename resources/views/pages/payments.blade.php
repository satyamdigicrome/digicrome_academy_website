@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="breadcumb-area d-flex">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
      <div class="breadcumb-content">
        <div class="breadcumb-title">
        <h4>Media Presence</h4>
        </div>
        <ul>
        <li><a href="index.html">Home <span><i class="fa-solid fa-arrow-right-long"></i></span></a></li>
        <li>Media Presence</li>
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
<style>


/* Dropdown container */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Toggle button */
.dropdown-toggle {
  padding: 12px 20px;
  background-color: #3498db;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Dropdown menu (initially hidden) */
.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  width: 980px;
  max-height: 400px;
  overflow-y: auto;
  background-color: white;
  border-radius: 6px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  z-index: 999;
  padding: 10px;
  box-sizing: border-box;
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

/* Show menu when JS adds .show class */
.dropdown-menu.show {
  display: flex;
}

/* Country columns */
.column {
  flex: 1;
  min-width: 180px;
}

/* Country link */
.column a {
  display: block;
  padding: 6px 0;
  color: #333;
  text-decoration: none;
  transition: color 0.2s;
}

.column a:hover {
  color: #3498db;
}

/* Scrollbar customization (optional) */
.dropdown-menu::-webkit-scrollbar {
  width: 8px;
}
.dropdown-menu::-webkit-scrollbar-thumb {
  background-color: #ccc;
  border-radius: 4px;
}

</style>

<div class="dropdown" id="customDropdown">
  <button class="dropdown-toggle">Select Country</button>
  <div class="dropdown-menu">
    <div class="column">
      <a href="#">Afghanistan</a>
      <a href="#">Albania</a>
      <a href="#">Algeria</a>
      <a href="#">Andorra</a>
      <a href="#">Angola</a>
      <a href="#">Antigua and Barbuda</a>
      <a href="#">Argentina</a>
      <a href="#">Armenia</a>
       <a href="#">Australia</a>
    <a href="Austria">Austria</a>
  <a href="Azerbaijan">Azerbaijan</a>
  <a href="Bahamas">Bahamas</a>
  <a href="Bahrain">Bahrain</a>
  <a href="Bangladesh">Bangladesh</a>
  <a href="Barbados">Barbados</a>
  <a href="Belarus">Belarus</a>
  <a href="Belgium">Belgium</a>
  <a href="Belize">Belize</a>
  <a href="Benin">Benin</a>
  <a href="Bhutan">Bhutan</a>
  <a href="Bolivia">Bolivia</a>
  <a href="Bosnia and Herzegovina">Bosnia and Herzegovina</a>
  <a href="Botswana">Botswana</a>
  <a href="Brazil">Brazil</a>
  <a href="Brunei">Brunei</a>
  <a href="Bulgaria">Bulgaria</a>
  <a href="Burkina Faso">Burkina Faso</a>
  <a href="Burundi">Burundi</a>
  <a href="Cabo Verde">Cabo Verde</a>
  <a href="Cambodia">Cambodia</a>
  <a href="Cameroon">Cameroon</a>
  <a href="Canada">Canada</a>
  <a href="Central African Republic">Central African Republic</a>
  <a href="Chad">Chad</a>
  <a href="Chile">Chile</a>
  <a href="China">China</a>
  <a href="Colombia">Colombia</a>
  <a href="Comoros">Comoros</a>
  <a href="Congo (Congo-Brazzaville)">Congo (Congo-Brazzaville)</a>
  <a href="Costa Rica">Costa Rica</a>
  <a href="Croatia">Croatia</a>
  <a href="Cuba">Cuba</a> 
   <a href="Cyprus">Cyprus</a>
  <a href="Czech Republic (Czechia)">Czech Republic (Czechia) </a>
   <a href="Democratic Republic of the Congo">Democratic Republic of the Congo</a>
  <a href="Denmark">Denmark</a>
  <a href="Djibouti">Djibouti</a>
  
    </div>
    <div class="column">
      <a href="Dominica">Dominica</a>
  <a href="Dominican Republic">Dominican Republic</a>
  <a href="Ecuador">Ecuador</a>
  <a href="Egypt">Egypt</a>
  <a href="El Salvador">El Salvador</a>
  <a href="Equatorial Guinea">Equatorial Guinea</a>
  <a href="Eritrea">Eritrea</a>
  <a href="Estonia">Estonia</a>
  <a href="Eswatini">Eswatini</a>
  <a href="Ethiopia">Ethiopia</a>
  <a href="Fiji">Fiji</a>
  <a href="Finland">Finland</a>
  <a href="France">France</a>
  <a href="Gabon">Gabon</a>
  <a href="Gambia">Gambia</a>
  <a href="Georgia">Georgia</a>
  <a href="Germany">Germany</a>
  <a href="Ghana">Ghana</a>
  <a href="Greece">Greece</a>
  <a href="Grenada">Grenada</a>
  <a href="Guatemala">Guatemala</a>
  <a href="Guinea">Guinea</a>
  <a href="Guinea-Bissau">Guinea-Bissau</a>
  <a href="Guyana">Guyana</a>
  <a href="Haiti">Haiti</a>
  <a href="Honduras">Honduras</a>
  <a href="Hungary">Hungary</a>
  <a href="Iceland">Iceland</a>
  <a href="India">India</a>
  <a href="Indonesia">Indonesia</a>
  <a href="Iran">Iran</a>
  <a href="Iraq">Iraq</a>
  <a href="Ireland">Ireland</a>
  <a href="Israel">Israel</a>
  <a href="Italy">Italy</a>
   <a href="Jamaica">Jamaica</a>
  <a href="Japan">Japan</a>
  <a href="Jordan">Jordan</a>
  <a href="Kazakhstan">Kazakhstan</a>
  <a href="Kenya">Kenya</a>
  
    </div>
    <div class="column">
      <a href="Kiribati">Kiribati</a>
  <a href="Kuwait">Kuwait</a>
  <a href="Kyrgyzstan">Kyrgyzstan</a>
  <a href="Laos">Laos</a>
        <a href="Latvia">Latvia</a>
  <a href="Lebanon">Lebanon</a>
  <a href="Lesotho">Lesotho</a>
  <a href="Liberia">Liberia</a>
  <a href="Libya">Libya</a>
  <a href="Liechtenstein">Liechtenstein</a>
  <a href="Lithuania">Lithuania</a>
  <a href="Luxembourg">Luxembourg</a>
  <a href="Madagascar">Madagascar</a>
  <a href="Malawi">Malawi</a>
  <a href="Malaysia">Malaysia</a>
  <a href="Maldives">Maldives</a>
  <a href="Mali">Mali</a>
  <a href="Malta">Malta</a>
  <a href="Marshall Islands">Marshall Islands</a>
  <a href="Mauritania">Mauritania</a>
  <a href="Mauritius">Mauritius</a>
  <a href="Mexico">Mexico</a>
  <a href="Micronesia">Micronesia</a>
  <a href="Moldova">Moldova</a>
  <a href="Monaco">Monaco</a>
  <a href="Mongolia">Mongolia</a>
  <a href="Montenegro">Montenegro</a>
  <a href="Morocco">Morocco</a>
  <a href="Mozambique">Mozambique</a>
  <a href="Myanmar (Burma)">Myanmar (Burma)</a>
  <a href="Namibia">Namibia</a>
  <a href="Nauru">Nauru</a>
  <a href="Nepal">Nepal</a>
  <a href="Netherlands">Netherlands</a>
  <a href="New Zealand">New Zealand</a>
  <a href="Nicaragua">Nicaragua</a>
  <a href="Niger">Niger</a>
  <a href="Nigeria">Nigeria</a>
  <a href="North Korea">North Korea</a>
  <a href="North Macedonia">North Macedonia</a>
  <a href="Norway">Norway</a>
  <a href="Oman">Oman</a>
  <a href="Pakistan">Pakistan</a>
  <a href="Palau">Palau</a>
  <a href="Palestine State">Palestine State</a>
  <a href="Panama">Panama</a>
  <a href="Papua New Guinea">Papua New Guinea</a>
  <a href="Paraguay">Paraguay</a>
     <a href="Peru">Peru</a>
  <a href="Philippines">Philippines</a>
 
    </div>
    <div class="column">
    
  <a href="Poland">Poland</a>
  <a href="Portugal">Portugal</a>
  <a href="Qatar">Qatar</a>
  <a href="Romania">Romania</a>
  <a href="Russia">Russia</a>
  <a href="Rwanda">Rwanda</a>
  <a href="Saint Kitts and Nevis">Saint Kitts and Nevis</a>
  <a href="Saint Lucia">Saint Lucia</a>
  <a href="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</a>
  <a href="Suriname">Suriname</a>
<a href="Swaziland">Swaziland</a>
<a href="Sweden">Sweden</a>
<a href="Switzerland">Switzerland</a>
<a href="Syria">Syria</a>
<a href="Taiwan">Taiwan</a>
<a href="Tajikistan">Tajikistan</a>
<a href="Tanzania">Tanzania</a>
<a href="Thailand">Thailand</a>
<a href="Togo">Togo</a>
<a href="Tokelau">Tokelau</a>
<a href="Tonga">Tonga</a>
<a href="Trinidad and Tobago">Trinidad and Tobago</a>
<a href="Tunisia">Tunisia</a>
<a href="Turkey">Turkey</a>
<a href="Turkmenistan">Turkmenistan</a>
<a href="Turks and Caicos Islands">Turks and Caicos Islands</a>
<a href="Tuvalu">Tuvalu</a>
<a href="Uganda">Uganda</a>
<a href="Ukraine">Ukraine</a>
<a href="United Arab Emirates">United Arab Emirates</a>
<a href="United Kingdom">United Kingdom</a>
<a href="United States Minor Outlying Islands">United States Minor Outlying Islands</a>
<a href="Uruguay">Uruguay</a>
<a href="Uzbekistan">Uzbekistan</a>
<a href="Vanuatu">Vanuatu</a>
<a href="Vatican City">Vatican City</a>
<a href="Venezuela">Venezuela</a>
<a href="Vietnam">Vietnam</a>
<a href="Virgin Islands">Virgin Islands</a>
<a href="Wallis and Futuna">Wallis and Futuna</a>
<a href="Yemen">Yemen</a>
<a href="Zambia">Zambia</a>
<a href="Zimbabwe">Zimbabwe</a>
    </div>
  </div>
</div>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(".dropdown-toggle");
    const dropdownMenu = document.querySelector(".dropdown-menu");

    // Toggle dropdown on button click
    toggleButton.addEventListener("click", function (e) {
      e.stopPropagation(); // Prevent bubbling
      dropdownMenu.classList.toggle("show");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function () {
      dropdownMenu.classList.remove("show");
    });

    // Optional: Update button text on selection
    dropdownMenu.addEventListener("click", function (e) {
      if (e.target.tagName.toLowerCase() === "a") {
        toggleButton.textContent = e.target.textContent;
        dropdownMenu.classList.remove("show");
      }
    });
  });

</script>      
@endsection




