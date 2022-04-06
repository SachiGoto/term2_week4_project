
<?php





  

session_start();
        
include("connect.php");
// include("display.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // if(!empty($first_name) && !empty($last_name) && !empty($email) && !is_numeric($phone))
    // {

      if(!empty($first_name) )
      {

     

      
      $query = " insert into contact_information(first_name, last_name, email, phone_number) values('$first_name', '$last_name', '$email','$phone')";

      mysqli_query($con, $query);

      echo ("Message has been sent!");

      // header("Location:login.php");

  }else{
      echo "Something went wrong. Please try again.";
  };

}
  





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/9b13b3eb3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="./img/faviconA.svg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jura:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- <style>


      .container-fluid{
        width:70%;
        display:flex;
        justify-content:center;
       
      }

      @media (min-width: 992px){
        .container-fluid{
        width:60%;
        display:flex;
        justify-content:center;
       
      }

       .socialMedia{
         margin-right:70px;
       }
      }
    </style> -->
 
          <style>

            .required:after{
              content:" *";
              color: red;
            }
            /* .message{ */
            .message{
                font-size: 14px;
                margin:4px 0px;
                color:rgb(68, 66, 66);
                display:none;
                font-weight:bold;
            }
    
    
            
            .error{
                color:red;
                
            }
    
            .success{
                color:green;
            }
    
    
    
    
         
    
    
    
            .imageError{
                width:25px;
                height:20px;
                display:none;
            }
    
            .imgSuccess{
                width:20px;
                height:20px;
                display:none;
            }

            .{
              display:none;
            }
    
    
    
        </style>
</head>
<body>



  
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php" width="80"><img src="./img/2sachiLogo.svg" width="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        
          <li class="nav-item">
            <a class="nav-link" href="#">My Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Background</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contactpage.php">Contact Me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./display.php">A list</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="socialMedia d-lg-flex d-none">
        <li><a href="https://ca.linkedin.com/in/sachi-goto-33580a215" target="_blank"> <i class="fab fa-linkedin"></i></a></li>
        <li><a href="https://github.com/SachiGoto" target="_blank"><i class="fab fa-github"></i></a></li>
        <li><a href="mailto:sgoto01@mylangara.ca" target="_blank"><i class="fas fa-envelope"></i></a></li>
        <li><a href="https://www.instagram.com/sachi8619/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
    </div>


  </nav>


  <div class="container boxA">
 
  
    <div class="container boxE">
        <form method="post">
            <h3 class="abrilFont">Let's Talk</h3>
            <fieldset>
            <legend>Contact Form</legend>

           
        <div class="form-group">
            <label class="required" for="first_name">First Name:</label>
            <p class="message" id="firstname-message">First name must be entered</p>
            <div class="d-flex">
            <input class="form-control" name="first_name" type = "text" id="first_name">
       
              <img src="./img/alerticon copy.png" class="imageError" id="firstname_error">
              <img src="./img/tick.png" class="imgSuccess" id="firstname_success">
            </div>          
           
       </div>

        <div class="form-group">
          <label class="required" for="last_name">Last Name:</label>
          <p class="message" id="lastname-message">Last name must be entered</p>
          <div class="d-flex">
            <input class="form-control" name="last_name" type = "text" id="last_name">
              <img src="./img/alerticon copy.png" class="imageError" id="lastname_error" >
              <img src="./img/tick.png" class="imgSuccess" id="lastname_success">
            </div>
          
      </div>

        <div class="form-group">
            <label for ="email">Email address:</label>
            <p class="message" id="email_message">The format expected is bob@domain.com</p>
            <div class="d-flex">
            <input  class="form-control" name="email" type = "email" name = "email" id="email">
            <img src="./img/alerticon copy.png" class="imageError" id="email_error">
            <img src="./img/tick.png" class="imgSuccess" id="email_success">
            </div>
           
        </div> 

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <p class="message" id="phone_message">Not a valid phone number</p>
            <div class="d-flex">
              <input  class="form-control" name="phone" type = "text" name = "phone" id="phone_number">
              <img src="./img/alerticon copy.png" class="imageError" id="phone_error">
              <img src="./img/tick.png" class="imgSuccess" id="phone_success">
              </div>
              
        </div>
            
        <div class="form-group mb-3">
            <p>Prefered contact method</p>
            <input type="checkbox" id="visEmail">
            <label for="viaEmail">Email</label>
        
            <input type="checkbox" id="viaPhone">
            <label for="viaPhone">Phone number</label>
        </div>

        <div class="form-group mb-3">
            <p>Do you already have a website?</p>
            <input type="checkbox" id="yes">
            <label for="yes">Yes</label>
    
            <input type="checkbox" id="no">
            <label for="no">No</label>
                  
        </div>
       
        
        <div class="form-group mt-3 mb-3">
             <p>What would you like to discuss?</p>
             <textarea  class="form-control" id="textarea" name="message" placeholder="Write a message here!" maxlength="600"></textarea><br>
        </div>

    
        <!-- <button type="submit" value ="Submit" id="submit">Submit</button><br> -->
        <button type="submit" class="btn btn-secondary btn-md mb-5">Submit</button>
        </fieldset>
       
        </form>

    </div>
   

    <div class="boxD">
        <div class="container boxB" >
            <div id="google_map"></div>  
        </div>

        <div class="container boxC">
            <h4 class="abrilFont">My Contact Info</h4>
            <p>Adress: 1234 Broadway Vancouver BC.V5R 4T6</p>
            <p>Email Adress: gotosachiii@gmail.com</p>
            <p>Phone number: 778-321-4060</p>
         </div>
    </div>

  


</div>



 
    
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./validation.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfhDomu0iglfc6Eo9ixxnpdVjdUd5REBU&callback=initMap">
</script>

<script type="text/javascript">

    function initMap(){
            
        // define my lat long corrdinates//
    
        var mylocation = {
            lat: 49.263839, 
             lng: -123.15116
        }
    
        // define your map//
        // great a map in this object//
    
        var map = new google.maps.Map(document.getElementById("google_map"),{
            // set how close or far your map to be//
            zoom:15,
            center: mylocation
              
    });
    
       // plot your marker//
       var marker = new google.maps.Marker({
    
        position:mylocation,
        map:map
    
       })
    }
   

  </script>
</body>
</html>
<!-- this one doesn't work -->
<!-- AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg -->


<!-- this one works -->
<!-- AIzaSyAfhDomu0iglfc6Eo9ixxnpdVjdUd5REBU -->