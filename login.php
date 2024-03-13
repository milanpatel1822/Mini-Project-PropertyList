<section>
    <div class=" wrapper">
        <div class="slider-container">
            <span class="cancle" id="canclebtn"> X </span>
            <div class="slide-form">
                <div class="form-container login-form">
                    <h2 class="form-title">Login</h2>
                    <form id="loginForm" onsubmit="return validateLoginForm()" method="post">
                        <input type="email" class="form-input" id="loginUsername" name="email" placeholder="Enter Your Email" required>
                        <input type="password" class="form-input" id="loginPassword" name="password" placeholder="Password" required>
                        <button type="submit" class="form-button btn btn-primary">Login</button>
                        <p class="error-message" id="loginErrorMessage"></p>
                    </form>
                </div>
                <div class="form-container signup-form">
                    <h2 class="form-title">Sign Up</h2>
                    <form id="signupForm" onsubmit="return validateSignupForm()" method="post">
                        <input type="text" class="form-input" id="signupUsername" name="username" placeholder="Enter Your Name" required>
                        <input type="email" class="form-input" id="signupEmail" name="email" placeholder="Enter Your Email" required>
                        <input type="password" class="form-input" id="signupPassword" name="password" placeholder="Password" required>
                        <input type="password" class="form-input" id="signupConfirmPassword" name="confirm_password" placeholder="Confirm Password" required>
                        <button type="submit" class="form-button btn btn-primary">Sign Up</button>
                        <p class="error-message" id="signupErrorMessage"></p>
                    </form>
                </div>
            </div>

            <div class="slider-buttons">
                <button class="slider-button" onclick="changeSlide(0)">Login</button>
                <button class="slider-button" onclick="changeSlide(1)">Sign Up</button>
            </div>
        </div>
    </div>
</section>

<script>
    function changeSlide(index) {
        const slider = document.querySelector('.slider-container');
        const slideWidth = `-${index * 50}%`;
        slider.querySelector('.slide-form').style.transform = `translateX(${slideWidth})`;
    }
</script>