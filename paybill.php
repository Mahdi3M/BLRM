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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
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


    <!-- <section class="vh-100" style="background-color: #eee;"> -->
    <!-- <div class="container h-100" style="margin-top: 80px;">
        <h1>Choose Your Billing Option</h1>

        <div class="row">
            <div class="col">
                <img src="assets/img/nagad.png" alt="">
            </div>
            <div class="col">
                <img src="assets/img/rocket.png" alt="">
            </div>
            <div class="col">
                <img src="assets/img/nagad.png" alt="">
            </div>
        </div>
    </div> -->
    <!-- </section> -->

    <div class="container">
        <div style="margin-top: 150px;">
            <h1>Choose Your Billing Option</h1>
            <div class="card-group mt-5" >
                <div class="card">
                    <img src="assets/img/bkash.png" class="card-img-top" alt="..." height=200 width=200>
                    <div class="card-body">
                        <h5 class="card-title">Bkash</h5>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/rocket.png" class="card-img-top" alt="..." height=200 width=200>
                    <div class="card-body">
                        <h5 class="card-title">Nagad</h5>
                    
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/nagad.png" class="card-img-top" alt="..." height=200 width=200>
                    <div class="card-body">
                        <h5 class="card-title">Rocket</h5>
                        
                    </div>
                </div>
            </div>
            <div class="container m-5 d-flex d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Pay Bill</button>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>