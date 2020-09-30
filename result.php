<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Chelsea+Market&family=Nunito+Sans:ital,wght@1,600&family=Ubuntu&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Home tutor</title>
</head>

<body style="background-color:#b2aad3;">
    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <div class=" container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.html">Home Tutor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php 

if(isset($_POST['submit'])){
  $search = $_POST['search'];
            
  $connection=mysqli_connect('localhost','root','','search_pincode');
  if(!$connection)
  {
    die("NOT CONNECTED");
  }     

  $query = "SELECT * FROM data_tutor WHERE pincode LIKE '%$search%' ";
  $search_query = mysqli_query($connection, $query);

  if(!$search_query) {

      die("QUERY FAILED" . mysqli_error($connection));

  }
  else
  {
    while($row = mysqli_fetch_assoc($search_query))
    {
      $name = $row['name'];
      $subject= $row['subject'];
      $price = $row['price'];
      ?>
     
      <div class="card" style="width: 18rem; margin:2rem; text-align:center;">
      <img class="card-img-top" src="./<?php echo $post_image;?>" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title"> <?php echo $name ?></h5>
          <h3 class="card-title"> <?php echo $subject ?></h5>
          <h3 class="card-title"> <?php echo $price ?></h5>
        </div>
      </div>
      
      <?php
    }
  }
}
?>
    </div>
    <!-- navigation -->

    <div class="blank ">
    

    </div>
    <!-- footer -->
    <footer class="footer ">
        <div class="container-fluid row ">
            <div class=" about-us col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">About Us</h2>
                <p class="brief-footer "> i am iitian</p>
            </div>
            <div class=" newsletter col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">Newsletter</h2>
                <p class="brief-footer ">
                    We are awesome.
                </p>
            </div>
            <div class="Register col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">Register</h2>
                <p class="brief-footer ">Register as student</p>
                <p class="brief-footer ">Register as tutor</p>
            </div>
            <div class=" contact-us col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">CONTACT US</h2>
                <p class="brief-footer ">
                    Lets us be social
                </p>
                <div>
                    <i class="fab fa-facebook fab-color "></i>
                    <i class="fab fa-youtube fab-color "></i>
                    <i class="fab fa-twitter fab-color "></i>
                    <i class="fab fa-instagram fab-color "></i>
                </div>
            </div>

        </div>
        <h4 class="copyright ">
            Copy Right
        </h4>
    </footer>
    <!-- footer -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
</body>

</html>