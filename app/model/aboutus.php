<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about us</title>
        <link rel="stylesheet" href="../resources/css/aboutus_style.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="bg-gradient">
      
             <!-- Navbar -->
             <?php
              include("shared/navbar.php");
              ?>

           <main>
            <div class="container" style="padding-top:80px">
              <div class="row">
                <div class="col-md-6" >
                        <img src="../resources/images/page_images/background.jpg" width="100%" height="100%">
                  </div>
                  <div class="col-md-6" >
                        <h2>Lorem, ipsum.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ducimus velit omnis enim! Voluptatum, dolorum.</p>
                      </div>
                  </div>
            </div>
            </main>
            
      <!-- Footer -->
 
      <?php
            include("shared/footer.php");
      ?>
    </body>
</html>