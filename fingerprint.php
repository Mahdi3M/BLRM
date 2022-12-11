<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>BLRM</title>
    <link rel="icon" type="image/png" href="assets/img/logo2.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">


    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; ?>
    <div class="admin-page">

        <script>
            $("#signinnav").removeClass("active");
            $("#contactsnav").removeClass("active");
            $("#homenav").removeClass("active");
        </script>

        <script>
            $("#admin_profile").removeClass("active");
            $("#applicant_list").removeClass("active");
            $("#change_ownership").removeClass("active");
            $("#verify_user").removeClass("active");

            $("#change_ownership").addClass("active");
        </script>

        <div class="vh-100 d-flex flex-column align-items-center justify-content-center">
            <div >
                <img src="assets/img/fingerprint.png" alt="" width="250px">
            </div>
           <h2>Please hold your finger in the sensor</h2>

           <div class="d-flex justify-content-center mb-3 mt-3">
                    <button class="btn btn-primary greenbutton" id="" type="button">Upload</button>
                    <!-- <button class="btn btn-primary" type="button">View Transactions</button> -->
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>