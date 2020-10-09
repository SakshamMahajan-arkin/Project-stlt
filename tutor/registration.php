
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="registration.css">
  </head>
  <body>
    <div class="header container-fluid">
       <nav class="navbar navbar-expand-lg navbar-light ">
           <a class="navbar-brand" href="index.html">Home Tutor</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item ">
                       <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">About US</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link active" href="#">Register</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Feedback</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">Contact Us</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="#">Newsletter</a>
                   </li>
               </ul>
           </div>
       </nav>
     </div>
    <div class="start">
    <h1 class="f">Registor here...</h1>
    <form class="form_reg" action="submit_registor.php" method="post">
      <div class="wrap-input1 validate-input" data-validate = "name is required">
          <input class="input1" type="name" name="name" placeholder="Name" required>
          <span class="shadow-input1"></span>
        </div>
      <div class="wrap-input1 validate-input" data-validate = "Email is required">
          <input class="input1" type="email" name="email" placeholder="Email-id" required>
          <span class="shadow-input1"></span>
        </div>
      <div class="wrap-input1 validate-input" data-validate = "Phone is required">
          <input class="input1" type="text" name="phone" placeholder="Phone-number" required>
          <span class="shadow-input1"></span>
        </div>
        <div class="wrap-input1 validate-input" data-validate = "Field">
            <input class="input1" type="text" name="field" placeholder="Field of study?" required>
            <span class="shadow-input1"></span>
          </div>

    <div class="wrap-input1 validate-input" data-validate = "Pin is required">
        <input class="input1" type="text" name="pin" placeholder="Pin-code" required>
        <span class="shadow-input1"></span>
      </div>
      <div class="wrap-input1 validate-input" data-validate = "Price is required">
          <input class="input1" type="text" name="price" placeholder="Price" required>
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate = "Designation">
          <h6 class="ji">You are a student or tutor?</h6>
            <input type="radio" id="student" name="Designatio" value="student">
            <label for="student">Student</label><br>
            <input  type="radio" id="tutor" name="Designatio" value="tutor">
            <label for="tutor">Tutor</label>

          </div>
      <div class="container-contact1-form-btn">
      					<button class="contact1-form-btn" name="submit">
      						<span>
      							Submit
      							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      						</span>
      					</button>
      				</div>
</form>
</div>
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
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
  </body>

</html>
