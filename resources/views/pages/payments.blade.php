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
  <button class="dropdown-toggle">Select Country</button>
  <div class="dropdown-menu">
 <div class="column">
  <a href="#"><img src="https://upload.wikimedia.org/wikipedia/en/4/41/Flag_of_India.svg" alt="India Flag" style="width:20px; vertical-align:middle; margin-right:5px;"> India</a>
<a href="#"><img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="USA Flag" style="width:20px; vertical-align:middle; margin-right:5px;"> United States Of America</a>
 <a href="#"><img src="https://flagcdn.com/20x15/af.png" alt="Afghanistan"> Afghanistan</a>
<a href="#"><img src="https://flagcdn.com/20x15/al.png" alt="Albania"> Albania</a>
<a href="#"><img src="https://flagcdn.com/20x15/dz.png" alt="Algeria"> Algeria</a>
<a href="#"><img src="https://flagcdn.com/20x15/ad.png" alt="Andorra"> Andorra</a>
<a href="#"><img src="https://flagcdn.com/20x15/ao.png" alt="Angola"> Angola</a>
<a href="#"><img src="https://flagcdn.com/20x15/ag.png" alt="Antigua and Barbuda"> Antigua and Barbuda</a>
    <a href="#"><img src="https://flagcdn.com/20x15/ar.png" alt="Argentina"> Argentina</a>
<a href="#"><img src="https://flagcdn.com/20x15/am.png" alt="Armenia"> Armenia</a>
<a href="#"><img src="https://flagcdn.com/20x15/au.png" alt="Australia"> Australia</a>
<a href="Austria"><img src="https://flagcdn.com/20x15/at.png" alt="Austria"> Austria</a>
<a href="Azerbaijan"><img src="https://flagcdn.com/20x15/az.png" alt="Azerbaijan"> Azerbaijan</a>
<a href="Bahamas"><img src="https://flagcdn.com/20x15/bs.png" alt="Bahamas"> Bahamas</a>
<a href="Bahrain"><img src="https://flagcdn.com/20x15/bh.png" alt="Bahrain"> Bahrain</a>
<a href="Bangladesh"><img src="https://flagcdn.com/20x15/bd.png" alt="Bangladesh"> Bangladesh</a>
<a href="Barbados"><img src="https://flagcdn.com/20x15/bb.png" alt="Barbados"> Barbados</a>
<a href="Belarus"><img src="https://flagcdn.com/20x15/by.png" alt="Belarus"> Belarus</a>
<a href="Belgium"><img src="https://flagcdn.com/20x15/be.png" alt="Belgium"> Belgium</a>
<a href="Belize"><img src="https://flagcdn.com/20x15/bz.png" alt="Belize"> Belize</a>
<a href="Benin"><img src="https://flagcdn.com/20x15/bj.png" alt="Benin"> Benin</a>
<a href="Bhutan"><img src="https://flagcdn.com/20x15/bt.png" alt="Bhutan"> Bhutan</a>
<a href="Bolivia"><img src="https://flagcdn.com/20x15/bo.png" alt="Bolivia"> Bolivia</a>
<a href="Bosnia and Herzegovina"><img src="https://flagcdn.com/20x15/ba.png" alt="Bosnia and Herzegovina"> Bosnia and Herzegovina</a>
<a href="Botswana"><img src="https://flagcdn.com/20x15/bw.png" alt="Botswana"> Botswana</a>
<a href="Brazil"><img src="https://flagcdn.com/20x15/br.png" alt="Brazil"> Brazil</a>
<a href="Brunei"><img src="https://flagcdn.com/20x15/bn.png" alt="Brunei"> Brunei</a>
<a href="Bulgaria"><img src="https://flagcdn.com/20x15/bg.png" alt="Bulgaria"> Bulgaria</a>
<a href="Burkina Faso"><img src="https://flagcdn.com/20x15/bf.png" alt="Burkina Faso"> Burkina Faso</a>
<a href="Burundi"><img src="https://flagcdn.com/20x15/bi.png" alt="Burundi"> Burundi</a>
<a href="Cabo Verde"><img src="https://flagcdn.com/20x15/cv.png" alt="Cabo Verde"> Cabo Verde</a>
<a href="Cambodia"><img src="https://flagcdn.com/20x15/kh.png" alt="Cambodia"> Cambodia</a>
<a href="Cameroon"><img src="https://flagcdn.com/20x15/cm.png" alt="Cameroon"> Cameroon</a>
<a href="Canada"><img src="https://flagcdn.com/20x15/ca.png" alt="Canada"> Canada</a>
<a href="Central African Republic"><img src="https://flagcdn.com/20x15/cf.png" alt="Central African Republic"> Central African Republic</a>
<a href="Chad"><img src="https://flagcdn.com/20x15/td.png" alt="Chad"> Chad</a>
<a href="Chile"><img src="https://flagcdn.com/20x15/cl.png" alt="Chile"> Chile</a>
<a href="China"><img src="https://flagcdn.com/20x15/cn.png" alt="China"> China</a>
<a href="Colombia"><img src="https://flagcdn.com/20x15/co.png" alt="Colombia"> Colombia</a>
<a href="Comoros"><img src="https://flagcdn.com/20x15/km.png" alt="Comoros"> Comoros</a>
<a href="Congo (Congo-Brazzaville)"><img src="https://flagcdn.com/20x15/cg.png" alt="Congo"> Congo (Congo-Brazzaville)</a>
<a href="Costa Rica"><img src="https://flagcdn.com/20x15/cr.png" alt="Costa Rica"> Costa Rica</a>
<a href="Croatia"><img src="https://flagcdn.com/20x15/hr.png" alt="Croatia"> Croatia</a>
<a href="Cuba"><img src="https://flagcdn.com/20x15/cu.png" alt="Cuba"> Cuba</a>
<a href="Cyprus"><img src="https://flagcdn.com/20x15/cy.png" alt="Cyprus"> Cyprus</a>
<a href="Czech Republic (Czechia)"><img src="https://flagcdn.com/20x15/cz.png" alt="Czech Republic"> Czech Republic (Czechia)</a>
<a href="Democratic Republic of the Congo"><img src="https://flagcdn.com/20x15/cd.png" alt="Democratic Republic of the Congo"> Democratic Republic of the Congo</a>
<a href="Denmark"><img src="https://flagcdn.com/20x15/dk.png" alt="Denmark"> Denmark</a>
    </div>
    <div class="column">

<a href="Djibouti"><img src="https://flagcdn.com/20x15/dj.png" alt="Djibouti"> Djibouti</a>
<a href="Dominica"><img src="https://flagcdn.com/20x15/dm.png" alt="Dominica"> Dominica</a>
<a href="Dominican Republic"><img src="https://flagcdn.com/20x15/do.png" alt="Dominican Republic"> Dominican Republic</a>
<a href="Ecuador"><img src="https://flagcdn.com/20x15/ec.png" alt="Ecuador"> Ecuador</a>
<a href="Egypt"><img src="https://flagcdn.com/20x15/eg.png" alt="Egypt"> Egypt</a>
<a href="El Salvador"><img src="https://flagcdn.com/20x15/sv.png" alt="El Salvador"> El Salvador</a>
<a href="Equatorial Guinea"><img src="https://flagcdn.com/20x15/gq.png" alt="Equatorial Guinea"> Equatorial Guinea</a>
<a href="Eritrea"><img src="https://flagcdn.com/20x15/er.png" alt="Eritrea"> Eritrea</a>
<a href="Estonia"><img src="https://flagcdn.com/20x15/ee.png" alt="Estonia"> Estonia</a>
<a href="Eswatini"><img src="https://flagcdn.com/20x15/sz.png" alt="Eswatini"> Eswatini</a>
<a href="Ethiopia"><img src="https://flagcdn.com/20x15/et.png" alt="Ethiopia"> Ethiopia</a>
<a href="Fiji"><img src="https://flagcdn.com/20x15/fj.png" alt="Fiji"> Fiji</a>
<a href="Finland"><img src="https://flagcdn.com/20x15/fi.png" alt="Finland"> Finland</a>
<a href="France"><img src="https://flagcdn.com/20x15/fr.png" alt="France"> France</a>
<a href="Gabon"><img src="https://flagcdn.com/20x15/ga.png" alt="Gabon"> Gabon</a>
<a href="Gambia"><img src="https://flagcdn.com/20x15/gm.png" alt="Gambia"> Gambia</a>
<a href="Georgia"><img src="https://flagcdn.com/20x15/ge.png" alt="Georgia"> Georgia</a>
<a href="Germany"><img src="https://flagcdn.com/20x15/de.png" alt="Germany"> Germany</a>
<a href="Ghana"><img src="https://flagcdn.com/20x15/gh.png" alt="Ghana"> Ghana</a>
<a href="Greece"><img src="https://flagcdn.com/20x15/gr.png" alt="Greece"> Greece</a>
<a href="Grenada"><img src="https://flagcdn.com/20x15/gd.png" alt="Grenada"> Grenada</a>
<a href="Guatemala"><img src="https://flagcdn.com/20x15/gt.png" alt="Guatemala"> Guatemala</a>
<a href="Guinea"><img src="https://flagcdn.com/20x15/gn.png" alt="Guinea"> Guinea</a>
<a href="Guinea-Bissau"><img src="https://flagcdn.com/20x15/gw.png" alt="Guinea-Bissau"> Guinea-Bissau</a>
<a href="Guyana"><img src="https://flagcdn.com/20x15/gy.png" alt="Guyana"> Guyana</a>
<a href="Haiti"><img src="https://flagcdn.com/20x15/ht.png" alt="Haiti"> Haiti</a>
<a href="Honduras"><img src="https://flagcdn.com/20x15/hn.png" alt="Honduras"> Honduras</a>
<a href="Hungary"><img src="https://flagcdn.com/20x15/hu.png" alt="Hungary"> Hungary</a>
<a href="Iceland"><img src="https://flagcdn.com/20x15/is.png" alt="Iceland"> Iceland</a>
<a href="Indonesia"><img src="https://flagcdn.com/20x15/id.png" alt="Indonesia"> Indonesia</a>
<a href="Iran"><img src="https://flagcdn.com/20x15/ir.png" alt="Iran"> Iran</a>
<a href="Iraq"><img src="https://flagcdn.com/20x15/iq.png" alt="Iraq"> Iraq</a>
<a href="Ireland"><img src="https://flagcdn.com/20x15/ie.png" alt="Ireland"> Ireland</a>
<a href="Israel"><img src="https://flagcdn.com/20x15/il.png" alt="Israel"> Israel</a>
<a href="Italy"><img src="https://flagcdn.com/20x15/it.png" alt="Italy"> Italy</a>
<a href="Jamaica"><img src="https://flagcdn.com/20x15/jm.png" alt="Jamaica"> Jamaica</a>
<a href="Japan"><img src="https://flagcdn.com/20x15/jp.png" alt="Japan"> Japan</a>
<a href="Jordan"><img src="https://flagcdn.com/20x15/jo.png" alt="Jordan"> Jordan</a>
<a href="Kazakhstan"><img src="https://flagcdn.com/20x15/kz.png" alt="Kazakhstan"> Kazakhstan</a>
<a href="Kenya"><img src="https://flagcdn.com/20x15/ke.png" alt="Kenya"> Kenya</a>
<a href="Kiribati"><img src="https://flagcdn.com/20x15/ki.png" alt="Kiribati"> Kiribati</a>
<a href="Kuwait"><img src="https://flagcdn.com/20x15/kw.png" alt="Kuwait"> Kuwait</a>
<a href="Kyrgyzstan"><img src="https://flagcdn.com/20x15/kg.png" alt="Kyrgyzstan"> Kyrgyzstan</a>
<a href="Laos"><img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Flag_of_Laos.svg" alt="Laos Flag" style="width:20px; vertical-align:middle;"> Laos</a>
<a href="Latvia"><img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Flag_of_Latvia.svg" alt="Latvia Flag" style="width:20px; vertical-align:middle;"> Latvia</a>
<a href="Lebanon"><img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Flag_of_Lebanon.svg" alt="Lebanon Flag" style="width:20px; vertical-align:middle;"> Lebanon</a>
<a href="Lesotho"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Flag_of_Lesotho.svg" alt="Lesotho Flag" style="width:20px; vertical-align:middle;"> Lesotho</a>
    </div>
    <div class="column">
 
<a href="Liberia"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/Flag_of_Liberia.svg" alt="Liberia Flag" style="width:20px; vertical-align:middle;"> Liberia</a>
<a href="Libya"><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Libya.svg" alt="Libya Flag" style="width:20px; vertical-align:middle;"> Libya</a>
<a href="Liechtenstein"><img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Flag_of_Liechtenstein.svg" alt="Liechtenstein Flag" style="width:20px; vertical-align:middle;"> Liechtenstein</a>
<a href="Lithuania"><img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Lithuania.svg" alt="Lithuania Flag" style="width:20px; vertical-align:middle;"> Lithuania</a>
<a href="Luxembourg"><img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Flag_of_Luxembourg.svg" alt="Luxembourg Flag" style="width:20px; vertical-align:middle;"> Luxembourg</a>
 <a href="Madagascar"><img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Madagascar.svg" alt="Madagascar Flag" style="width:20px; vertical-align:middle;"> Madagascar</a>
<a href="Malawi"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Flag_of_Malawi.svg" alt="Malawi Flag" style="width:20px; vertical-align:middle;"> Malawi</a>
<a href="Malaysia"><img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Flag_of_Malaysia.svg" alt="Malaysia Flag" style="width:20px; vertical-align:middle;"> Malaysia</a>
<a href="Maldives"><img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Flag_of_Maldives.svg" alt="Maldives Flag" style="width:20px; vertical-align:middle;"> Maldives</a>
<a href="Mali"><img src="https://upload.wikimedia.org/wikipedia/commons/9/92/Flag_of_Mali.svg" alt="Mali Flag" style="width:20px; vertical-align:middle;"> Mali</a>
<a href="Malta"><img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Flag_of_Malta.svg" alt="Malta Flag" style="width:20px; vertical-align:middle;"> Malta</a>
<a href="Marshall Islands"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Flag_of_the_Marshall_Islands.svg" alt="Marshall Islands Flag" style="width:20px; vertical-align:middle;"> Marshall Islands</a>
<a href="Mauritania"><img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Flag_of_Mauritania.svg" alt="Mauritania Flag" style="width:20px; vertical-align:middle;"> Mauritania</a>
<a href="Mauritius"><img src="https://upload.wikimedia.org/wikipedia/commons/7/77/Flag_of_Mauritius.svg" alt="Mauritius Flag" style="width:20px; vertical-align:middle;"> Mauritius</a>
<a href="Mexico"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Flag_of_Mexico.svg" alt="Mexico Flag" style="width:20px; vertical-align:middle;"> Mexico</a>
<a href="Micronesia"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e5/Flag_of_the_Federated_States_of_Micronesia.svg" alt="Micronesia Flag" style="width:20px; vertical-align:middle;"> Micronesia</a>
<a href="Moldova"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Flag_of_Moldova.svg" alt="Moldova Flag" style="width:20px; vertical-align:middle;"> Moldova</a>
<a href="Monaco"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/Flag_of_Monaco.svg" alt="Monaco Flag" style="width:20px; vertical-align:middle;"> Monaco</a>
<a href="Mongolia"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Flag_of_Mongolia.svg" alt="Mongolia Flag" style="width:20px; vertical-align:middle;"> Mongolia</a>
<a href="Montenegro"><img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Flag_of_Montenegro.svg" alt="Montenegro Flag" style="width:20px; vertical-align:middle;"> Montenegro</a>
<a href="Morocco"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Flag_of_Morocco.svg" alt="Morocco Flag" style="width:20px; vertical-align:middle;"> Morocco</a>
<a href="Mozambique"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Flag_of_Mozambique.svg" alt="Mozambique Flag" style="width:20px; vertical-align:middle;"> Mozambique</a>
<a href="Myanmar (Burma)"><img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Flag_of_Myanmar.svg" alt="Myanmar Flag" style="width:20px; vertical-align:middle;"> Myanmar (Burma)</a>
<a href="Namibia"><img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Flag_of_Namibia.svg" alt="Namibia Flag" style="width:20px; vertical-align:middle;"> Namibia</a>
<a href="Nauru"><img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Flag_of_Nauru.svg" alt="Nauru Flag" style="width:20px; vertical-align:middle;"> Nauru</a>
<a href="Nepal"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Flag_of_Nepal.svg" alt="Nepal Flag" style="width:20px; vertical-align:middle;"> Nepal</a>
<a href="Netherlands"><img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Flag_of_the_Netherlands.svg" alt="Netherlands Flag" style="width:20px; vertical-align:middle;"> Netherlands</a>
<a href="New Zealand"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Flag_of_New_Zealand.svg" alt="New Zealand Flag" style="width:20px; vertical-align:middle;"> New Zealand</a>
<a href="Nicaragua"><img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Flag_of_Nicaragua.svg" alt="Nicaragua Flag" style="width:20px; vertical-align:middle;"> Nicaragua</a>
<a href="Niger"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Flag_of_Niger.svg" alt="Niger Flag" style="width:20px; vertical-align:middle;"> Niger</a>
<a href="Nigeria"><img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Flag_of_Nigeria.svg" alt="Nigeria Flag" style="width:20px; vertical-align:middle;"> Nigeria</a>
<a href="North Korea"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Flag_of_North_Korea.svg" alt="North Korea Flag" style="width:20px; vertical-align:middle;"> North Korea</a>
<a href="North Macedonia"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f8/Flag_of_North_Macedonia.svg" alt="North Macedonia Flag" style="width:20px; vertical-align:middle;"> North Macedonia</a>
<a href="Norway"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Norway.svg" alt="Norway Flag" style="width:20px; vertical-align:middle;"> Norway</a>
<a href="Oman"><img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/Flag_of_Oman.svg" alt="Oman Flag" style="width:20px; vertical-align:middle;"> Oman</a>
<a href="Pakistan"><img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg" alt="Pakistan Flag" style="width:20px; vertical-align:middle;"> Pakistan</a>
<a href="Palau"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Palau.svg" alt="Palau Flag" style="width:20px; vertical-align:middle;"> Palau</a>
<a href="Palestine State"><img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Flag_of_Palestine.svg" alt="Palestine Flag" style="width:20px; vertical-align:middle;"> Palestine State</a>
<a href="Panama"><img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Flag_of_Panama.svg" alt="Panama Flag" style="width:20px; vertical-align:middle;"> Panama</a>
<a href="Papua New Guinea"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e3/Flag_of_Papua_New_Guinea.svg" alt="Papua New Guinea Flag" style="width:20px; vertical-align:middle;"> Papua New Guinea</a>
<a href="Paraguay"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/Flag_of_Paraguay.svg" alt="Paraguay Flag" style="width:20px; vertical-align:middle;"> Paraguay</a>
   <a href="Peru"><img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Peru.svg" alt="Peru Flag" style="width:20px; vertical-align:middle;"> Peru</a>
<a href="Philippines"><img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Flag_of_the_Philippines.svg" alt="Philippines Flag" style="width:20px; vertical-align:middle;"> Philippines</a>
<a href="Poland"><img src="https://upload.wikimedia.org/wikipedia/en/1/12/Flag_of_Poland.svg" alt="Poland Flag" style="width:20px; vertical-align:middle;"> Poland</a>
<a href="Portugal"><img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg" alt="Portugal Flag" style="width:20px; vertical-align:middle;"> Portugal</a>
<a href="Qatar"><img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Flag_of_Qatar.svg" alt="Qatar Flag" style="width:20px; vertical-align:middle;"> Qatar</a>
<a href="Romania"><img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Flag_of_Romania.svg" alt="Romania Flag" style="width:20px; vertical-align:middle;"> Romania</a> </div>
    <div class="column">
 
<a href="Russia"><img src="https://upload.wikimedia.org/wikipedia/en/f/f3/Flag_of_Russia.svg" alt="Russia Flag" style="width:20px; vertical-align:middle;"> Russia</a>
<a href="Rwanda"><img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Flag_of_Rwanda.svg" alt="Rwanda Flag" style="width:20px; vertical-align:middle;"> Rwanda</a>
<a href="Saint Kitts and Nevis"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Saint_Kitts_and_Nevis.svg" alt="Saint Kitts and Nevis Flag" style="width:20px; vertical-align:middle;"> Saint Kitts and Nevis</a>
<a href="Saint Lucia"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Saint_Lucia.svg" alt="Saint Lucia Flag" style="width:20px; vertical-align:middle;"> Saint Lucia</a>
<a href="Saint Vincent and the Grenadines"><img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Flag_of_Saint_Vincent_and_the_Grenadines.svg" alt="Saint Vincent and the Grenadines Flag" style="width:20px; vertical-align:middle;"> Saint Vincent and the Grenadines</a>
<a href="Suriname"><img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Flag_of_Suriname.svg" alt="Suriname Flag" style="width:20px; vertical-align:middle;"> Suriname</a>
<a href="Swaziland"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Flag_of_Eswatini.svg" alt="Swaziland Flag" style="width:20px; vertical-align:middle;"> Swaziland</a>
<a href="Sweden"><img src="https://upload.wikimedia.org/wikipedia/en/4/4c/Flag_of_Sweden.svg" alt="Sweden Flag" style="width:20px; vertical-align:middle;"> Sweden</a>
<a href="Switzerland"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Switzerland.svg" alt="Switzerland Flag" style="width:20px; vertical-align:middle;"> Switzerland</a>
<a href="Syria"><img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Flag_of_Syria.svg" alt="Syria Flag" style="width:20px; vertical-align:middle;"> Syria</a>
<a href="Taiwan"><img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Flag_of_the_Republic_of_China.svg" alt="Taiwan Flag" style="width:20px; vertical-align:middle;"> Taiwan</a>
<a href="Tajikistan"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Flag_of_Tajikistan.svg" alt="Tajikistan Flag" style="width:20px; vertical-align:middle;"> Tajikistan</a>
<a href="Tanzania"><img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Flag_of_Tanzania.svg" alt="Tanzania Flag" style="width:20px; vertical-align:middle;"> Tanzania</a>
<a href="Thailand"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Flag_of_Thailand.svg" alt="Thailand Flag" style="width:20px; vertical-align:middle;"> Thailand</a>
<a href="Togo"><img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Flag_of_Togo.svg" alt="Togo Flag" style="width:20px; vertical-align:middle;"> Togo</a>
<a href="Tokelau"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Flag_of_Tokelau.svg" alt="Tokelau Flag" style="width:20px; vertical-align:middle;"> Tokelau</a>
<a href="Tonga"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Tonga.svg" alt="Tonga Flag" style="width:20px; vertical-align:middle;"> Tonga</a>
<a href="Trinidad and Tobago"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Flag_of_Trinidad_and_Tobago.svg" alt="Trinidad and Tobago Flag" style="width:20px; vertical-align:middle;"> Trinidad and Tobago</a>
<a href="Tunisia"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Tunisia.svg" alt="Tunisia Flag" style="width:20px; vertical-align:middle;"> Tunisia</a>
<a href="Turkey"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg" alt="Turkey Flag" style="width:20px; vertical-align:middle;"> Turkey</a>
<a href="Turkmenistan"><img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Flag_of_Turkmenistan.svg" alt="Turkmenistan Flag" style="width:20px; vertical-align:middle;"> Turkmenistan</a>
<a href="Turks and Caicos Islands"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Flag_of_the_Turks_and_Caicos_Islands.svg" alt="Turks and Caicos Islands Flag" style="width:20px; vertical-align:middle;"> Turks and Caicos Islands</a>
<a href="Tuvalu"><img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Flag_of_Tuvalu.svg" alt="Tuvalu Flag" style="width:20px; vertical-align:middle;"> Tuvalu</a>
<a href="Uganda"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Flag_of_Uganda.svg" alt="Uganda Flag" style="width:20px; vertical-align:middle;"> Uganda</a>
<a href="Ukraine"><img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Flag_of_Ukraine.svg" alt="Ukraine Flag" style="width:20px; vertical-align:middle;"> Ukraine</a>
<a href="United Arab Emirates"><img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Flag_of_the_United_Arab_Emirates.svg" alt="UAE Flag" style="width:20px; vertical-align:middle;"> United Arab Emirates</a>
<a href="United Kingdom"><img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" alt="UK Flag" style="width:20px; vertical-align:middle;"> United Kingdom</a>
<a href="Uruguay"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_Uruguay.svg" alt="Uruguay Flag" style="width:20px; vertical-align:middle;"> Uruguay</a>
<a href="Uzbekistan"><img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Flag_of_Uzbekistan.svg" alt="Uzbekistan Flag" style="width:20px; vertical-align:middle;"> Uzbekistan</a>
<a href="Vanuatu"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Flag_of_Vanuatu.svg" alt="Vanuatu Flag" style="width:20px; vertical-align:middle;"> Vanuatu</a>
<a href="Vatican City"><img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Flag_of_the_Vatican_City.svg" alt="Vatican Flag" style="width:20px; vertical-align:middle;"> Vatican City</a>
<a href="Venezuela"><img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Flag_of_Venezuela.svg" alt="Venezuela Flag" style="width:20px; vertical-align:middle;"> Venezuela</a>
<a href="Vietnam"><img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg" alt="Vietnam Flag" style="width:20px; vertical-align:middle;"> Vietnam</a>
<a href="Virgin Islands"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f5/Flag_of_the_United_States_Virgin_Islands.svg" alt="Virgin Islands Flag" style="width:20px; vertical-align:middle;"> Virgin Islands</a>
<a href="Wallis and Futuna"><img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Flag_of_Wallis_and_Futuna.svg" alt="Wallis and Futuna Flag" style="width:20px; vertical-align:middle;"> Wallis and Futuna</a>
<a href="Yemen"><img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Flag_of_Yemen.svg" alt="Yemen Flag" style="width:20px; vertical-align:middle; margin-right:5px;"> Yemen</a>
<a href="Zambia"><img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Flag_of_Zambia.svg" alt="Zambia Flag" style="width:20px; vertical-align:middle; margin-right:5px;"> Zambia</a>
<a href="Zimbabwe"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/Flag_of_Zimbabwe.svg" alt="Zimbabwe Flag" style="width:20px; vertical-align:middle; margin-right:5px;"> Zimbabwe</a>



    </div>
  </div>
</div>
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-toggle {
      padding: 12px 20px;
      background-color: #3498db;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
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
      flex-wrap: wrap;
      gap: 15px;
    }
    .dropdown-menu.show {
      display: flex;
    }
    .column {
      flex: 1;
      min-width: 180px;
    }
    .column a {
      display: block;
      padding: 6px 0;
      color: #333;
      text-decoration: none;
      transition: color 0.2s;
      cursor: pointer;
    }
    .column a:hover {
      color: #3498db;
    }
    .dropdown-menu::-webkit-scrollbar {
      width: 8px;
    }
    .dropdown-menu::-webkit-scrollbar-thumb {
      background-color: #ccc;
      border-radius: 4px;
    }
  </style>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.getElementById("customDropdown");
    const toggleButton = dropdown.querySelector(".dropdown-toggle");
    const dropdownMenu = dropdown.querySelector(".dropdown-menu");

    // Toggle dropdown on button click
    toggleButton.addEventListener("click", function (e) {
      e.stopPropagation();
      dropdownMenu.classList.toggle("show");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (e) {
      if (!dropdown.contains(e.target)) {
        dropdownMenu.classList.remove("show");
      }
    });

    // Update button text on selection
    dropdownMenu.addEventListener("click", function (e) {
      if (e.target.tagName.toLowerCase() === "a") {
        e.preventDefault(); // prevent link jump
        toggleButton.textContent = e.target.textContent;
        dropdownMenu.classList.remove("show");
      }
    });
  });
</script>

</body>
</html>


@endsection




