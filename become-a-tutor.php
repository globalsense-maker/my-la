<?php
include('tutor-function.php');
include_once 'db_connect.php';
?>


<?php 

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");
}
?>

<!doctype html>
<head>
    <title>become a tutor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/b-a-t.csss">
    <style>
        body{
            background-color:#02124B;
            
            color: white;
            text-align: center;
        }

        
        .wrapper-main{

        background-image: url("img/ht-111.JPG");
        background-size: cover;
        background-repeat: repeat;

        }

        .navbar {
            background-color: whitesmoke;
            position: absolute;
            top:0px;
            right: 0px;
            width: 100%;
            padding: 10px 0px 0px 0px;
            margin: 0 auto;
            border: 0px solid rgba(7, 22, 92, 0.774);
            
            
        }
        .nvh{
            position: absolute;
            margin-left: -200px;
            margin-top: -40px;
        }

        .nva{
            position: absolute;
            margin-left: -80px;
            margin-top: -40px;
        }

        .nvs{
            position: absolute;
            margin-left: 30px;
            margin-top: -40px;
        }


        .navbar ul {
            list-style-type: none;
         
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: red;
            font-weight: bolder;
            font-size: 15px;
            font-family: Georgia;
            display: block;
            padding: 10px;
            text-decoration: none;
        }

        /* Style the dropdown menu */
        .navbar ul ul {
            position: absolute;
            top: 100%;
            display: none;
        }

        .navbar ul ul li {
            display: block;
        }

        .navbar li:hover ul {
            display: block;
        }

        /* Change the background color of dropdown links on hover */
        .navbar ul li a:hover {
            background-color: whitesmoke;
            
        }
        .logo-align{
            position:absolute;
            right:100px;
            margin-top: -25px;

            
        }
        .img-size{
            height:35px;
            position: relative;
            display: block;
            right: -70px;
            bottom: 10px;
        }



        .container{
                background-color: #EAF8FA;
                align-content: center;
                padding:100px 0px 100px 0px;
                position:absolute;
                width:60%;
                height: max-content;
                max-height: fit-content;
                left:160px;
                height: 700%;
                bottom:-500px;
                border-radius: 0px;
                border-radius: 5px;
            }

           

        
        .btn{
        display: block;
        width: 90%;
        color:white;
        padding: 4px;
        margin:auto;
        font-size: 1.7rem;
        box-shadow:2px 2px 2px 2px white;
        cursor: pointer;
        background-color: green;
        border-radius: 5px;
        position:absolute;
        font-family: Georgia;
        top: 455px;
        left: 10px;
    }

        input,
        input::placeholder {
        font: 1.25rem/3 Georgia;
        text-align: center;
        }
        
        .back{
            display: block;
            width: fit-content;
            color:white;
            padding: 10px;
            margin:auto;
            font-size: 1.0rem;
            box-shadow:2px 2px 2px 2px black;
            cursor: pointer;
            background-color: #081C87 ;
            border-radius: 5px;
            position:absolute;
            top: 7px;
            left: 10px;
        }

            .drop{
                color:grey;
            }


            html{
    font-size: 62.5%;
    font-family: Georgia;
}

.wrapper-main{
    position: absolute;
    width: 100%;
    padding: 200px 10px 200px 10px;
    margin: 0 auto;
   
}








.leg{
    font-size: 1.0em;
    font-family: Georgia;
    font-weight: bolder;
    color: red;
    position: absolute;
    left:100px;
    top: -30px;
    text-align: center;
}
.cw1{
    font-size: 1.5em;
    font-family: Georgia;
    font-weight: bolder;
    color: red;
    position: absolute;
    left:50px;
    top: 40px;
    text-align: center;
}

.tx{
    color:grey;
    padding:0px;
    background-color: white;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 350px;
    left: 10px;
    font-size: medium;
    width: 90%;
    
}

.tx1{
    color:grey;
    padding:0px;
    background-color: white;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 290px;
    left: 10px;
    font-size: medium;
    font-weight: bolder;
    width: 90%;
    
}

.tx10{
    color:grey;
    padding:0px;
    background-color: white;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 230px;
    left: 10px;
    font-size: medium;
    font-weight: bolder;
    width:90%;
    
}
.tx2{
    color:grey;
    padding:8px;
    background-color: white;
    padding: 0px;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 170px;
    left: 10px;
    font-size: medium;
    font-weight: bolder;
    width:90%;
    
}

.tx3{
    color:grey;
    padding:8px;
    background-color: white;
    width: 45%;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 70px;
    left: 10px;
    font-size: small;
    font-weight: bolder;
    
    
}

.tx5{
    color:grey;
    padding:8px;
    background-color: white;
    width: 45%;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 70px;
    left: 125px;
    font-size: small;
    font-weight: bolder;
    
}

.tx6{
    color:grey;
    padding:8px;
    background-color: white;
    width: 45%;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 29px;
    left: 10px;
    font-size: small;
    font-weight: bolder;
    color:grey;
    
}

.tx8{

    color:grey;
    padding:8px;
    background-color: white;
    padding: 0px;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 110px;
    left: 10px;
    font-size: medium;
    font-weight: bolder;
    width:90%;
    
    
}

.tx9{
    color:grey;
    padding:8px;
    background-color: white;
    width: 45%;
    border-radius: 3px;
    border: 0px;
    position: absolute;
    bottom: 29px;
    left: 125px;
    font-size: small;
    font-weight: bolder;
    
}
.drop{
    color:grey;
}


    @media only screen and (max-width: 600px) {
        .wrapper-main{
            width: 100%;
            
        }

    }





    @media only screen and (min-width: 601px) and (max-width: 768px){
        .wrapper-main{
            width: 100%;
        
        }

    }


    </style>
    

</head>
<body>
    <div class="wrapper-main">
    <nav class="navbar">
                    <ul>
                        <li><a href="#" class="nvh">Home</a></li>
                        <li><a href="#" class="nva">About</a></li>
                        <li><a href="#" class="nvs">Service</a></li>
                        
                            
                     
                        <li class="logo-align">
                            <a href="#"><img src="img/s-logoii.JPG" class="img-size" ></a>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Online Courses</a></li>
                                <li><a href="#">Tutoring Service</a></li>
                                <li><a href="#">Learning Resources</a></li>
                                <li><a href="#">Learning Community</a></li>
                                <li><a href="#">FAQ</a></li>

                            </ul>

                                   
                              
                        </li>
                  <form  class="container" action="become-a-tutor.php" method="post">

      

                    
                                <div class="form-footer">
                                   <a style="text-decoration:none"; href="tutor-dashboard.php"><font color="white"><b><div class="back"> << HOME</b></div></a>
                                </div>
                            <div class="leg">
                                <?php  if (isset($_SESSION['user'])) : $username?>
                                    <h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']; ?></h1></font></p>
                                <?php endif ?>
                            </div>
						

                       

                            <?php
                           
                           
							if(isset($_POST['submit_btn']))
							{ 
                                
                           
                          
								
								$fullname = $_POST['fullname'];
								$email = $_POST['email']; 
                                $phone_no = $_POST['phone_no']; 
                                $class_type = $_POST['class_type']; 
                                $qualification = $_POST['qualification'];
                                $subject = $_POST['subject'];
                                $state= $_POST['state']; 
                                $address = $_POST['address']; 
                                $lga = $_POST['lga'];  



                                $query = "INSERT INTO `tutor_data` (userid,fullname,email,phone_no,class_type,qualification,subject,state,address,lga) VALUES ('".$_SESSION['user']['id']."', '$fullname','$email','$phone_no','$class_type','$qualification','$subject','$address','$state','$lga')";
                                if (mysqli_query($conn, $query)) {
									//echo " Step1 succeed proceed to step2";
                                    

                                   //echo "<div style='background-color:red;'><p style='color:white; height:20px'>"."recorded number</p></div>"."<br>";
                                  echo "<p style='background-color:#0A9191; color:white; border-radius:5px; solid black; width:150px;  height:40px; bottom:20px; '>"."  STEP 1 SUCCEED <br>";

									
								} else {
									echo "Error: " . $query . ":-" . mysqli_error($conn);
								}



								mysqli_close($conn);
                                

    						}    
                               
                            
                            ?>




                             
                                <p class="cw1">Be our Professional Tutor (Online/Physical)</p>
                               
                                
                                <input text="text" placeholder="fullname" required="enter fullname" class="tx" name="fullname"></input>
                                
                                <input text="text" placeholder="email" required="Your Email Required" class="tx1" name="email"></input>
                                
                                <input text="text" placeholder="phone" required="Tel Phone required" class="tx2" name="phone_no"></input>
                                
                                <select class="tx3" placeholder="myname" required="class type reqired" name="class_type">
                                    <option>Class-type</option>
                                    <option>Online Classes</option>
                                    <option>Physical Classes</option>
                                    <option>Both</option>
                                </select>

                                
                                <select class="tx5"  required="qualification" name="qualification">
                                    <option>Qualification</option>
                                    <option>PhD</option>
                                    <option>MSc</option>
                                    <option>B.Sc</option>
                                    <option>HND</option>
                                    <option>OND</option>
                                    <option>SSCE</option>
                                    <option>Others</option>
                                </select>

                                <select class="tx6"  required="Subject/Course" name="subject">
                                    <option >Subject/Course</option>
                                    <option>Biology</option>
                                    <option>Business Studies</option>
                                    <option>Chemistry</option>
                                    <option>Computer Science</option>
                                    <option>Design and Technology</option>
                                    <option>Drama and Theater </option>
                                    <option>Economics</option>
                                    <option>English Language</option>
                                    <option>Literature</option>
                                    <option>Environmental Science</option>
                                    <option>French</option>
                                    <option>Mathematics</option>
                                    <option>Further Mathematics</option>
                                    <option>Geography</option>
                                    <option>Government </option>
                                    <option>Law</option>
                                    <option>Media Studies</option>
                                    <option>Philosophy</option>
                                    <option>Psychology</option>
                                    <option>Physics</option>
                                    <option>Religious Studies</option>
                                    <option>Sociology</option>
                                    <option>Spanish</option>
                                    <option>German</option>
                                    <option>Statistics</option>
                                    <option>Geology</option>
                                    <option>Computing</option>
                                    <option>Physical Education</option>
                                    <option>Environmental Science</option>

                                </select>
                                
                                <input text="text" placeholder="Address" required="Address required" class="tx8" name="address"></input>
                                
                                <select class="tx9"  required="Subject/Course" name="state">
                                    <option>State of Residence</option>
                                    <option>Abia</option>
                                    <option>Adamawa</option>
                                    <option>Anambra</option>
                                    <option>Akwa Ibom</option>
                                    <option>Bauchi</option>
                                    <option>Benue </option>
                                    <option>Bayelsa</option>
                                    <option>Borno</option>
                                    <option>Cross River</option>
                                    <option>Delta</option>
                                    <option>Ebonyi</option>
                                    <option>Edo</option>
                                    <option>Ekiti</option>
                                    <option>Enugu</option>
                                    <option>Gombe </option>
                                    <option>Imo</option>
                                    <option>Jigawa</option>
                                    <option>Kaduna</option>
                                    <option>Kastina</option>
                                    <option>Kebbi</option>
                                    <option>Kogi</option>
                                    <option>Kwara</option>
                                    <option>Lagos</option>
                                    <option>Nazarawa</option>
                                    <option>Niger</option>
                                    <option>Ogun</option>
                                    <option>Ondo</option>
                                    <option>Osun</option>
                                    <option>Oyo</option>
                                    <option>Plateau</option>
                                    <option>Rivers</option>
                                    <option>Sokoto</option>
                                    <option>Taraba</option>
                                    <option>Yobe</option>
                                    <option>Zamfara</option>
                                    <option>FCT</option>

                                </select>
                                <input text="text" placeholder="LGA" required="Address required" class="tx10" name="lga"></input>
                                
                                
                                <button type="btn" class="btn" name="submit_btn"><a style="text-decoration:none";  href="upload-credential.php"><font color="white">SUBMIT</button>
                                
   
    </div>
</body>
<html>