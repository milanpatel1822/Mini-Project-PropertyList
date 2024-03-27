<?php
include 'header.php';
// include 'login.php';
?>
<section class="section-contact">
    <div class="overly-contact"></div>
    <div class="container">
        <h1 class="text-center p-2">Contact Us</h1>
        <p class="tetx-center mb-4 fs-5">"Reach out to us for any inquiries, assistance, or feedback. Our team is here to support you and ensure your experience with us is seamless.Feel free to contact us anytime."
        </p>
        <div class="contact d-flex justify-content-between">
            <div class="contact-box d-flex flex-column">
                <div class="d-flex contact-side mb-3">
                    <div class="contact-icon d-flex justify-content-center align-items-center">
                        <i class='bx bxs-phone-call bx-tada'></i>
                    </div>
                    <div class="contact-txt">
                        <h4>Call</h4>
                        <p>+91 999999999</p>
                    </div>

                </div>
                <div class="d-flex contact-side mb-3">
                    <div class="contact-icon d-flex justify-content-center align-items-center">
                        <i class='bx bxs-envelope bx-tada'></i>
                    </div>
                    <div class="contact-txt">
                        <h4>Email</h4>
                        <p>propertylist@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex contact-side">
                    <div class="contact-icon d-flex justify-content-center align-items-center">
                        <i class='bx bxs-location-plus bx-tada'></i>
                    </div>
                    <div class="contact-txt">
                        <h4>Address</h4>
                        <p>At.Rajkot India 363600</p>
                    </div>
                </div>
            </div>

            <div class="Contact-form">
                <h2 class="fw-bold mb-2">Send Message</h2>
                <form action="" class="100w">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="FirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="FirstName" placeholder="First Name Here">
                        </div>
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="LastName" class="form-label">Last Name</label>
                            <input type="email" class="form-control" id="LastName" placeholder="Last Name Here">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="text-center w-100 text-md-start d-flex justify-content-center align-items-center">
                        <button class="btn btn-success px-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="./js/script.js"></script>