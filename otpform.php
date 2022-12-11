<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BLRM</title>
    <link rel="icon" type="image/png" href="assets/img/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>



<body class="d-flex flex-column min-vh-100">
    <?php include 'header.php'; ?>

    <script>
        $("#homenav").removeClass("active");
        // $("#signinnav").removeClass("active");
        $("#contactsnav").removeClass("active");

        $("#signinnav").addClass("active");

        //document.getElementById
    </script>

    <div class="container">
        <div class="vh-100 d-flex align-items-center d-flex justify-content-center">
            <div class="otpbox">
                <h1 class="d-flex justify-content-center mb-5">OTP Verification</h1>
                <h5 class="mb-3">A Verification code is sent to your mobile through SMS</h5>
                <div class="userinput mb-3">
                    <input type="text" id='ist' maxlength="1" onkeyup="clickEvent(this,'sec')">
                    <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
                    <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">
                    <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this,'fifth')">
                    <input type="text" id="fifth" maxlength="1">
                </div>

                <label class="form-check-label" for="form2Example3">
                    Didn't receive the code? <a href="signup.php">Resend Code</a>
                </label>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary otp-btn greenbutton" onclick="location.href = 'user_profile.php'">Confirm</button>
                </div>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>