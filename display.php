

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/9b13b3eb3d.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/jpg" href="./img/faviconA.svg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jura:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>A list</title>
    <style>
      main{
        margin-left:10%;
        margin-right:10%;

      }
      </style>
</head>

<body>
    

        <nav class="navbar navbar-expand-md navbar-light bg-light container d-flex flex-row">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.php" width="80"><img src="./img/2sachiLogo.svg" width="80"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                
                  <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Background</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contactpage.php">Contact Me</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- <div class="socialMedia d-lg-flex d-none align-items-center ">
                <li><a href="https://ca.linkedin.com/in/sachi-goto-33580a215" target="_blank"> <i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://github.com/SachiGoto" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="mailto:gotosachiii@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
                <li><a href="https://www.instagram.com/sachi8619/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                
            </div> -->


          </nav>


          <main>

          <h2> A list of contact information  </h2><br>


      <table>
              <?php


include("connect.php");

function getData($con){

  

    // check for entered user name and password matches 

    // redirecting to login using header function 



    

 
   
    $query = "select * from contact_information order by Date desc ";

    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>
                <td> ID: " .$row["ID"]. "</td>
                <td> First Name: " . $row["first_name"]. "</td>
                 <td> Last Name: " . $row["last_name"]."</td>
                 <td> Phone Number " . $row["phone_number"]. "</td>
                <td> Date " .$row["Date"]. "<br></td> </tr>";
        }
      } else {
        echo "0 results";
      }

    // if($result && mysqli_num_rows($result) > 0){

        
        
    //     $user_data = mysqli_fetch_assoc($result);

    //     foreach($user_data as $column => $value){

    //         echo "<p>". $column . "</p>" . "<p>" .$value. "</p>" ;

    //     }
     
      
    //     return $user_data;
    

    // header("Location:login.php");
    die;
   
    };

      

getData($con);


// $res = $db->query('SELECT ID, first_name, last_name, email, phone_number, FROM contact_information');
// $row = $db->fetchRow($res, MDB_FETCHMODE_ASSOC);
/*
$row will contain:
array (
    'id'    => <column "id" data>,
    'name'  => <column "name" data>,
    'email' => <column "email" data>
)
*/
// Access the data with:
// $id    = $row['ID'];
// $first_name  = $row['first_name'];
// $last_name = $row['last_name'];
// $email = $row['email'];
// $phone_number = $row['phone_number'];


// echo $id;
// echo $first_name;


?>
</table>


         </main>






