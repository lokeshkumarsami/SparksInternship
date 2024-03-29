<!doctype html>
<html lang="en">

<head>
    <style>
        
    .welcome h2{
    margin: 10px;
    padding: 5px;
    text-align: center;
    background-color: rgb(83, 201, 237);
    border-radius: 10px;
    }

    .welcome h2:hover{
    transform: scale(1.01);
    background-color: rgb(23, 123, 153);
    }
    
    *{
    font-family: 'Montserrat', sans-serif;
    }
    .container h2{
        text-align: center;
        background-color: rgb(238, 255, 0);
        border-radius: 5px;
        margin: 5px;
        padding: 7px;
    }

    h3{
    margin: 28px;
    padding: 5px;
    text-align: center;
    background-color: rgba(230, 230, 136, 0.945);
    border-radius: 10px;
    }

    h3:hover{
    transform: scale(1.01);
    background-color: yellow;
    }

    #hover1{
    width: 200px;
    font-weight:bolder;
    background-color: rgba(243, 224, 117, 0.945);
    border-radius: 5px;
    text-align: center;
    height: 100px;
    line-height: 100px;
    
    
    }
    #hover1:hover{
    transform: scale(1.1);
    background-color: gold;

    }
    #hover2{
    width: 200px;
    font-weight:bolder;
    background-color:rgba(115, 247, 115, 0.849);
    border-radius: 5px;
    text-align: center;
    height: 100px;
    line-height: 100px;

    }
    #hover2:hover{
    transform: scale(1.1);
    background-color: chartreuse;
    }

    .form-control{
    height: 40px;
    width: 250px;
    }
        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS BANK</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="# ">About Us</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <class class="welcome">
        <h2>
            <strong>Banking is Necessary, Banks are Not.</strong> </h2>
    </class>
    

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="background/2.png" width="1000" height="425" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="background/1.jpg" width="1000" height="425" class="d-block w-100" alt="...">

            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

     <!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color:black;color:white;">
               
               <p>&copy;Belongs to Sparks Foundation 2021</p>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>