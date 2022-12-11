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

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

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

            $("#applicant_list").addClass("active");
        </script>

        <!-- <div class="d-flex flex-column align-items-center p-3 py-5">
            <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Edogaru</span>
                <span class="text-black-50">edogaru@mail.com.my</span>
                <span> </span>
        </div> -->

        <div class="container" style="margin-top: 50px;">
            <div class="titlebox">Enter User's NID No.</div>
            <div class="input-group mb-3">
                <input id="usernid" type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary searchbutton" type="button" id="button-addon2" onclick="searchUser()"><i class="bi bi-search"></i></button>
            </div>

            <div class="row">
                <div class="col-md-12" id="admininfo">
                    <div class="card mb-4 halkagrey">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <p class="fw-bold mb-0">Serial</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-bold mb-0">NID Number</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="fw-bold mb-0">Name</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="fw-bold mb-0">Type of Application</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="#" class="text-muted mb-0 list-group-item">1.</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="text-muted mb-0 list-group-item">432 963 7531</a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">Adminer bap</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">New Registry</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="#" class="text-muted mb-0 list-group-item">2.</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="text-muted mb-0 list-group-item">432 963 7532</a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">Adminer ma</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">Change Ownership</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="#" class="text-muted mb-0 list-group-item">3.</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="text-muted mb-0 list-group-item">432 963 7533</a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">Adminer nijer jomi</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">New Registry</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="#" class="text-muted mb-0 list-group-item">4.</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="text-muted mb-0 list-group-item">432 963 7534</a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">Adminer dada</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">Change Ownership</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="#" class="text-muted mb-0 list-group-item">5.</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="text-muted mb-0 list-group-item">432 963 7535</a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">Adminer nani</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">New Registry</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2 text-center">
                                    <a href="#" class="text-muted mb-0 list-group-item">6.</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="#" class="text-muted mb-0 list-group-item">432 963 7536</a>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">Adminer chacha</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text-muted mb-0">New Registry</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>