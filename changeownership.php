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
        <div class="container" style="margin-top: 2%;">
            <form class="mb-5">
                <div class="row mb-3">
                    <!-- <div class="col-lg-6"> -->
                    <div class="form-group">
                        <label for="formGroupExampleInput">Previous Owner's NID</label>
                        <input type="text" class="form-control" id="prevnid" placeholder="">
                    </div>
                    <!-- </div>
                <div class="col-lg-6"> -->
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Current Owner's NID</label>
                        <input type="text" class="form-control" id="curnid" placeholder="">
                    </div>
                    <!-- </div> -->
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary greenbutton" type="button" onclick="changeOwnerBtn()">Proceed</button>
                    <!-- <button class="btn btn-primary" type="button">View Transactions</button> -->
                </div>
            </form>

            <div class="row mb-5">
                <h1 class="mb-5" id="heading1" style="display: none;">Previous Owner Details</h1>
                <div class="col-md-4" id="prevuserimg" style="display: none;">
                    <div class="card-body text-center">
                        <img src="assets/img/profilepic.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">Emma Watson</h5>
                        <p class="text-muted mb-1">Full Stack Actor</p>
                        <p class="text-muted mb-4">Canonbury Place, London</p>

                        <div class="d-grid gap-2 col-8 mx-auto">
                            <button class="btn btn-primary greenbutton" type="button" onclick="location.href = 'fingerprint.php'">Upload Fingerprint</button>
                            <button class="btn btn-primary greenbutton" type="button" >Upload Certificate</button>
                            <!-- <button class="btn btn-primary" type="button">View Transactions</button> -->
                        </div>

                    </div>
                </div>
                <div class="col-md-8" id="prevuserinfo" style="display: none;">
                    <div class="card mb-4 halkagrey">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Emma Watson</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Father's Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Chris Watson</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mother's Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Jacqueline Luesby</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">example@example.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date of Birth</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">15 April, 1990</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(098) 765-4321</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tax Due</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">12034 Taka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-3">
                <h1 class="mb-5" id="heading2" style="display: none;">Current Owner Details</h1>
                <div class="col-md-4" id="curuserimg" style="display: none;">
                    <div class="card-body text-center">
                        <img src="assets/img/malfoy.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">Draco Malfoy</h5>
                        <p class="text-muted mb-1">Full Stack Actor</p>
                        <p class="text-muted mb-4">Canonbury Place, London</p>

                        <div class="d-grid gap-2 col-8 mx-auto">
                            <button class="btn btn-primary greenbutton" type="button" onclick="location.href = 'fingerprint.php'">Upload Fingerprint</button>
                            <button class="btn btn-primary greenbutton" type="button">Upload Certificate</button>
                            <!-- <button class="btn btn-primary" type="button">View Transactions</button> -->
                        </div>

                    </div>
                </div>
                <div class="col-md-8" id="curuserinfo" style="display: none;">
                    <div class="card mb-4 halkagrey">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Draco Malfoy</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Father's Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Abraxas Malfoy</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mother's Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Narcissa Black</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">example@example.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date of Birth</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">15 April, 1990</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">(098) 765-4321</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tax Due</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">0 Taka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-primary greenbutton" id="savebtn" style="display: none;" type="button">Save Record</button>
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