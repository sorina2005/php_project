<?php 
session_start();
include('../app/conn/conn.php'); 
include('../app/model/modal.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite station</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../app/resources/css/modal_style.css">
    <link rel="stylesheet" href="../app/resources/css/index_style.css">
    

</head>
<body class="bg-gradient">

    <!-- Navbar -->
              <?php
              require_once("../app/model/shared/navbar.php");
              ?>

           <section class="sec1 text-center">
           <h1>If you don't know what to cook, you can find on our page new recipes</h1>
           </section>
           <section class="sec2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur at, libero quaerat distinctio suscipit odit modi esse vero temporibus cum similique recusandae neque, ut molestias porro autem? Veritatis excepturi sequi harum ratione eius! Inventore, magnam. Molestias itaque dignissimos est dicta vel fugit eaque esse iste voluptatibus minima soluta, ex ab qui accusantium ipsam quidem explicabo debitis doloribus. Architecto sit nihil dolorum error recusandae aspernatur? Dolorem voluptate rerum nihil, quaerat consequatur a voluptatum, velit consequuntur nam nisi eos laborum voluptates maiores corporis accusamus obcaecati ipsa, beatae iure eligendi! Provident quaerat odit vel a, quibusdam recusandae repudiandae eum necessitatibus consequatur obcaecati sit.</p></section>
           <section class="sec3"></section>
           <section class="sec2"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quam libero corporis voluptatem dolores accusantium voluptates dicta pariatur ipsa earum! Voluptatum amet ducimus nulla tenetur eum sequi obcaecati placeat at molestias. Harum, voluptates? Optio minus perspiciatis a quam, doloribus incidunt necessitatibus autem molestiae provident eligendi tempore veritatis, fuga distinctio? Commodi et, at rem nihil, ut perferendis hic optio cumque veritatis nisi odit nobis eligendi debitis esse corrupti vitae. Nam ipsam autem magnam cupiditate ab enim voluptate veniam corrupti! Beatae quidem nisi quisquam maiores voluptas soluta eos ipsum alias placeat animi nihil, sunt voluptate assumenda earum quia quam recusandae nobis officia.</p></section>
           <section class="sec4"></section>
<br>
<br>
<br>
    <section id="category">
        <!-- Category Area -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../app/resources/images/baked-apple.webp" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Breakfast Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#breakfastModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../app/resources/images/pancake-tacos.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Lunch Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#lunchModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../app/resources/images/chicken-caesar-pasta-salad.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Dinner Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#dinnerModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="../app/resources/images/quick-bites.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Dessert Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#dessertModal">View List</a>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
            <div class="search-recipe text-center">
                <a href="../app/view/api_index.html" target="_blank">Search more recipes</a>
            </div>
     <br>
    <br>
  
    <section id="slider">
                <div>
                <br>
                    <h2>Pictures from you</h2>
                </div>
            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="../app/resources/images/photos from you/1.JPG" >
                    </div>
                    <div class="item">
                        <img src="../app/resources/images/photos from you/2.JPG" >
                    </div>
                    <div class="item">
                        <img src="../app/resources/images/photos from you/3.jpeg" >
                    </div>
                    <div class="item">
                        <img src="../app/resources/images/photos from you/4.jpeg" >
                    </div>
                    <div class="item">
                        <img src="../app/resources/images/photos from you/5.jpeg" >
                    </div>
                    <div class="item">
                        <img src="../app/resources/images/photos from you/6.jpeg" >
                    </div>
                    <div class="item">
                        <img src="../app/resources/images/photos from you/7.JPG" >
                    </div>
                </div>
                <div class="buttons">
                    <button id="prev"><</button>
                    <button id="next">></button>
                </div>
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
               </div>
               </section>

      <!-- FOOTER -->

      <?php
              include("../app/model/shared/footer.php");
         ?>
   

    
    <script src="../app/resources/js/modal_script.js"></script>
    <script src="../app/resources/js/index_script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>