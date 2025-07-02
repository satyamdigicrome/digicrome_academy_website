<style>
    .wedd-gall {
        margin-bottom: 90px;
        float: left;
        width: 100%;
    }

    .wedd-gall-pg {
        margin: 100px 0 80px 0;
    }

    .wedd-gall-pg-v1 {
        width: 100%;
        float: left;
        margin: 100px 0 90px 0;
    }

    .wedd-gall-pg-v1 .img-wrapper img {
        height: 350px;
    }

    .gal-im {
        position: relative;
        overflow: hidden;
    }

    .gall-inn {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .gal-im:hover {}

    .gal-im:before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #633214cc, transparent);
        transition: all 0.5s ease;
        opacity: 0;
        z-index: 1;
    }

    .gal-im img {
        width: 100%;
        transition: all 0.5s ease;
        object-fit: cover;
    }

    .gal-im img.gal-siz-1 {
        height: 300px;
    }

    .gal-im img.gal-siz-2 {
        height: 45vh;
    }

    .gal-im:hover img {
        filter: grayscale(0);
        transform: scale(1.2);
    }

    .gal-im .txt {
        padding: 30px 30px 35px;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        /* transition: all 0.5s ease; */
        z-index: 1;
    }

    .gal-im .txt:before {
        content: '';
        position: absolute;
        bottom: 22px;
        left: 0;
        right: 0;
        width: 0%;
        height: 1px;
        background: #ffffff6b;
        transition: all 0.5s ease;
    }

    .gal-im .txt span {
        text-transform: uppercase;
        font-family: var(--tit-font);
        font-size: 12px;
        letter-spacing: 2px;
        transition: all 0.5s ease;
        position: relative;
        left: -30px;
        opacity: 0;
    }

    .gal-im .txt h4 {
        font-family: var(--tit-font);
        font-size: 24px;
        transition: all 0.5s ease;
        position: relative;
        left: -30px;
        opacity: 0;
    }

    .gal-im:hover span,
    .gal-im:hover h4 {
        color: #fff;
    }

    .gal-im:hover .txt:before {
        width: 100%;
        transition-delay: 0.4s;
    }

    .gal-im:hover:before {
        opacity: 1;
    }

    .gal-im:hover .txt span {
        left: 0px;
        opacity: 1;
        transition-delay: 0.2s;
    }

    .gal-im:hover .txt h4 {
        left: 0px;
        opacity: 1;
        transition-delay: 0.3s;
    }

    .gal-im:hover {}

    /* gallry end */
    .career {
        color: black;

    }

    .content {
        background-color: orange;
        height: 500px;
    }

    .button-container {
        background-color: rgba(0, 0, 0, 0.2);
        text-align: center;
        padding: 10px;
        padding-top: 150px;
        font-family: var(--pix-heading-font), sans-serif !important;
    }

    /* Styles for the button */
    .custom-button {
        display: inline-block;
        background-color: #007BFF;
        /* Set the button background color */
        color: #FFFFFF;
        /* Set the button text color */
        border: none;
        padding: 10px 20px;
        /* Adjust the padding as needed */
        border-radius: 5px;
        /* Add rounded corners if desired */
        font-size: 16px;
        /* Set the font size */
        font-weight: bold;
        /* Set font weight to bold for a professional look */
        font-family: Arial, sans-serif;
        /* Use a professional font (change as needed) */
        text-align: center;
        line-height: 1.4;
        /* Adjust the line height as needed to control line spacing */
    }

    .big-text {
        color: white;
        font-size: 54px;
        /* Adjust the font size as needed */
        font-weight: bold;
        /* Add bold font weight for a professional look */
        margin-bottom: 10px;
        /* Add space between lines */
    }

    .ul {
        display: block;
        list-style-type: disc;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
    }

    .section__title span.yellow-bg-big img {
        bottom: 15px;
        width: 120%;
        -webkit-animation: section-animation-2 3s infinite;
        animation: section-animation-2 3s infinite;
    }

    .section__title span.yellow-bg-sm img {
        bottom: 10px;
        width: 120%;
        -webkit-animation: section-animation-2 3s infinite;
        animation: section-animation-2 3s infinite;
    }

    #teem img {
        filter: grayscale(100%);
        /* Set the image to black and white by default */
        transition: filter 0.3s;
        /* Add a smooth transition effect */
    }

    #teem img:hover {
        filter: grayscale(0%);
        /* Remove the grayscale filter on hover */
    }

    .big-text {
        color: white;
        line-height: 1.5;
        Adjust the line height for better spacing on mobile
    }

    @media (max-width: 767px) {

        /* Media query for screens with a maximum width of 767px (typical mobile screens) */
        .big-text {
            font-size: 26px;
            /* Adjust the font size for mobile screens */
            line-height: 1.5;
            /* Adjust the line height for better spacing on mobile */
        }
    }
</style>
<!--==================================================-->
<!-- end educate blog Area -->
<!--==================================================-->
<style>
    /* Modal Overlay */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        box-sizing: border-box;
    }

    /* Modal Content Box */
    .modal-content {
        background-color: #fff;
        border-radius: 10px;
        max-width: 900px;
        margin: auto;
        padding: 0;
        overflow: hidden;
        animation: fadeIn 0.4s ease-in-out;
    }

    /* Modal Header */
    .modal-header {
        padding: 15px 20px;
        font-size: 20px;
        font-weight: bold;
        background-color: #f29c12;
        color: #fff;
        position: relative;
    }

    /* Close Button */
    .close-btn {
        color: #fff;
        position: absolute;
        right: 20px;
        top: 12px;
        font-size: 26px;
        cursor: pointer;
    }

    /* Modal Body */
    .modal-body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 20px;
        gap: 20px;
        background: #f9f9f9;
    }

    /* Form Container */
    .popup-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    .popup-form {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: 100%;
    }

    .form-container {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    /* Image Section */
    .form-container img {
        width: 100%;
        max-width: 400px;
        object-fit: cover;
    }

    /* Form Section */
    form.form {
        flex: 1;
        padding: 20px;
        box-sizing: border-box;
    }

    form h2 {
        margin-bottom: 20px;
    }

    .form-field {
        margin-bottom: 15px;
        width: 100%;
    }

    .form-field input,
    .form-field select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
    }

    form p {
        font-size: 14px;
        color: #333;
    }

    form a {
        color: #f29c12;
        text-decoration: none;
    }

    form button {
        background-color: #f29c12;
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #d8880e;
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .modal-body {
            flex-direction: column;
        }

        .form-container {
            flex-direction: column;
        }

        .form-container img {
            max-width: 100%;
            height: auto;
        }

        form.form {
            padding: 15px;
        }

        .modal-content {
            width: 100%;
        }
    }

    /* Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>


<!-- Modal -->
<div id="formModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            Need help? Call us now at 01203133869 or request a quick call!
        </div>
        <div class="modal-body">
            <div class="popup-container">
                <div class="popup-form">
                    <div class="form-container">
                        <img loading="lazy"src="{{ asset('assets/images/www.webp') }}" alt="Image Description">
                        <form style="width:100%; background:transparent; margin:0px;" class="form" method="post"
                            action="https://demo.digicrome.com/post_lead.php">
                            @csrf
                            <h2 style="    color: #f29c12;"> Register now!! And get a quick call</h2>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="name">Name:</label> -->
                                <input type="text" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="mobile">Mobile Number:</label> -->
                                <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number">
                            </div>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="gmail">Gmail ID:</label> -->
                                <input type="email" id="gmail" name="email" placeholder="E-mail ID:">
                            </div>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="city">City:</label> -->
                                <input type="text" id="city" name="address" placeholder="City">
                            </div>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="Qualification">Qualification:</label> -->
                                <input type="text" id="qualification" name="title" placeholder="Qualification">
                            </div>
                            <div class="form-field">
                                <!--<label style="color:#fff;" for="qualification">Experience:</label> -->
                                <select class="selecttype" id="qualification" name="profession">
                                    <option value="" disabled selected>Select Experience</option>
                                    <option value="Working Professional - Technincal Roles">Working Professional -
                                        Technincal Roles</option>
                                    <option value="Working Professional - Non Technincal">Working Professional - Non
                                        Technincal</option>
                                    <option value="College Student - Final Year">College Student - Final Year</option>
                                    <option value="College Student - 1st to pre-final Year">College Student - 1st to
                                        pre-final Year</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <input type="hidden" id="mobile" name="source" Value="Home Page"
                                    placeholder="Mobile Number">
                            </div>
                            <div class="form-field">
                                <input type="hidden" id="mobile" name="country" value="india"
                                    placeholder="Mobile Number">
                            </div>
                            <div class="form-field">
                                <input type="hidden" id="mobile" name="comp_name" placeholder="Mobile Number">
                            </div>
                            <div class="form-field">
                                <input type="hidden" id="mobile" name="state" value="" placeholder="Mobile Number">
                            </div>
                            <!--<div class="form-field">-->
                            <!--    <input type="text" id="mobile" name="profession" placeholder="Mobile Number">-->
                            <!--</div>-->
                            <div class="form-field">
                                <input type="hidden" id="mobile" name="altr_mobile" placeholder="Mobile Number">
                            </div>

                         <br>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to open modal (also reusable on button click)
    function openModal() {
        document.getElementById("formModal").style.display = "block";
    }

    // Function to close modal
    function closeModal() {
        document.getElementById("formModal").style.display = "none";
    }

    // Optional: Prevent actual form submission (only if needed for testing)
    document.getElementById("professionalForm").addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Form submitted!");
        closeModal();
    });

    // Optional: Close if clicking outside the modal content
    window.onclick = function (event) {
        const modal = document.getElementById("formModal");
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
</script>
