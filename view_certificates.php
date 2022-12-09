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



<style>

.cardx
{
    padding: 5px;
    display: block;
    height: auto;
    margin: 10px 20px;
    box-shadow: 0 0.25em 0.25em -0.125em rgba(0, 0, 0, 0.25), 0 0.5em 1.25em rgba(0, 0, 0, 0.5);
    opacity: 90%;
    border-radius: 2.5%;
}
.cardx:hover
{
    background-color: aliceblue;
    transform: translateY(-4px);
    transition: 0.3s ease-in-out;
}
.cardx .image img
{
    display: block;
    width: 95%;
    margin: 10px auto;
}
.card-collection-proj
{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
}

.handy
{
    color: dodgerblue;
}
.handy:hover
{
    cursor:pointer;
    color: cadetblue;
}

</style>



<body>
    <?php include 'header.php'; ?>


    <div class="container bg-white mt-5 mb-5" id="certi">
        <div class="row p-3 py-3">
            <div class="container card-collection-proj py-5">

                <div class="cardx">
                    <div class="image handy"><a onclick="ViewCerti(this)" data-val="certi1.pdf"><img src="assets/img/certi1.png" /></a></div>
                    <div><h3 class="container handy text-uppercase"><a onclick="ViewCerti(this)" data-val="certi1.pdf">Title</a></h3></div>
                    <div class="container"><p>Lorem ipsum dolor sit amet consectetur</p></div>
                    <span class="container handy"><a onclick="ViewCerti(this)" data-val="certi1.pdf">View Details <span class="arrow text-danger"><i class="fas fa-angle-down"></i></span> </a></span>
                </div>

                <div class="cardx">
                    <div class="image handy"><a onclick="ViewCerti(this)" data-val="certi2.pdf"><img src="assets/img/certi2.png" /></a></div>
                    <div><h3 class="container handy text-uppercase"><a onclick="ViewCerti(this)" data-val="certi2.pdf">Title</a></h3></div>
                    <div class="container"><p>Lorem ipsum dolor sit amet consectetur</p></div>
                    <span class="container handy"><a onclick="ViewCerti(this)" data-val="certi2.pdf">View Details <span class="arrow text-danger"><i class="fas fa-angle-down"></i></span> </a></span>
                </div>

                <div class="cardx">
                    <div class="image handy"><a onclick="ViewCerti(this)" data-val="certi3.pdf"><img src="assets/img/certi3.png" /></a></div>
                    <div><h3 class="container handy text-uppercase"><a onclick="ViewCerti(this)" data-val="certi3.pdf">Title</a></h3></div>
                    <div class="container"><p>Lorem ipsum dolor sit amet consectetur</p></div>
                    <span class="container handy"><a onclick="ViewCerti(this)" data-val="certi3.pdf">View Details <span class="arrow text-danger"><i class="fas fa-angle-down"></i></span> </a></span>
                </div>

                <script>
                    function ViewCerti(obj)
                    {
                        var x= obj.dataset.val;
                        document.getElementById("certi").innerHTML = 
                        `<div class="container-fluid py-3">
                            <h1>Certificate Title</h1>
                            <div class="container">
                                <iframe src="assets/`+x+`" style="position: absolute; top: 13%; left: 0; width: 100%; height: 85%;"></iframe>
                            </div>
                        </div>`;
                    }
                </script>
                
            </div>
        </div>

        <div class="fixed-bottom">
            <?php include 'footer.php'; ?>
        </div>

    </div>



    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>