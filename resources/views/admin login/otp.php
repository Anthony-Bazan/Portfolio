<?php include("components/header.php"); ?>
<body>
<section class="vh-100" style="background:url(asstes/image/blue.gif) no-repeat center center; object-fit: cover; background-size: cover;">
<div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center">
            <form action="change-pass.php">
                <h6>Please enter the OTP code<br> to verify your account</h6>
                <div>
                    <span>A code has been sent to</span>
                    <small>your Email please Check</small>
                </div>
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                    <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" />
                    <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" />
                </div>
                <input hidden type="text" id="otpConcatenated" name="otpConcatenated" readonly>
                <div class="mt-4">
                    <button class="btn btn-danger px-4 validate" type="submit">Validate</button>
                </div>
                <div class="mt-2">
                <p class="resend text-muted mb-0">
              Didn't receive code? <a href="forgot.php">Request again</a>
            </p>
            </div>
            </form>
        </div>
    </div>
</div>
</section>
<style>
    .height-100 {
        height: 100vh
    }

    .card {
        width: 400px;
        border: none;
        height: 300px;
        box-shadow: 0px 5px 20px 0px #d2dae3;
        z-index: 1;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .card h6 {
        color: red;
        font-size: 20px
    }

    .inputs input {
        width: 40px;
        height: 40px
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0
    }

    .card-2 {
        background-color: #fff;
        padding: 10px;
        width: 350px;
        height: 100px;
        bottom: -50px;
        left: 20px;
        position: absolute;
        border-radius: 5px
    }

    .card-2 .content {
        margin-top: 50px
    }

    .card-2 .content a {
        color: red
    }

    .form-control:focus {
        box-shadow: none;
        border: 2px solid red
    }

    .validate {
        border-radius: 20px;
        height: 40px;
        background-color: red;
        border: 1px solid red;
        width: 140px
    }
</style>

<script>
   document.addEventListener("DOMContentLoaded", function (event) {
    function OTPInput() {
        const inputs = document.querySelectorAll('#otp > *[id]');
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('input', function (event) {
                if (event.inputType === "deleteContentBackward") {
                    if (i !== 0) inputs[i - 1].focus();
                } else {
                    inputs[i].value = event.data;
                    if (i !== inputs.length - 1 && event.data !== null) inputs[i + 1].focus();
                }
            });
        }
    }

    OTPInput();

    document.getElementById("otp").addEventListener("input", function () {
        const otpValues = Array.from(document.querySelectorAll("#otp input")).map(input => input.value);
        document.getElementById("otpConcatenated").value = otpValues.join("");
    });
});


</script>
</body>
<?php include("components/footer.php"); ?>
