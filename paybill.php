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


    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="d-flex flex-column min-vh-100" onload="checkSignIn()">
    <?php include 'header.php'; ?>

    <script>
        $("#homenav").removeClass("active");
        $("#signinnav").removeClass("active");
        $("#contactsnav").removeClass("active");
    </script>

    <div class="container">
        <div style="margin-top: 150px;">
            <h1 class="text-center">Choose Your Billing Option</h1>
            <a href="#" class="text-decoration-none d-flex justify-content-evenly" style="color: black; margin-top: 5rem">
                <div class="card mx-auto shadow rounded" style="width: 18rem;">
                    <img src="assets/img/BKash-Icon-Logo.wine.svg" class="card-img-top border" alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center">BKash</h3>
                    </div>
                </div>
                <div class="card mx-auto shadow rounded" style="width: 18rem;">
                    <img src="assets/img/Nagad-Vertical-Logo.wine.svg" class="card-img-top border" alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center">Nagad</h3>
                    </div>
                </div>                
                <div class="card mx-auto shadow rounded" style="width: 18rem;">
                    <img src="assets/img/184568.svg" class="card-img-top border" alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center">Rocket</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>