<?php
include('functions.php');
include_once 'db_connect.php';
include 'filesLogic.php';


if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: loginn.php");
}
?>



<!DOCTYPE html>
<html lang="en">



  <head>
    
    <link rel="stylesheet" href="style.css">
    <title>Upload credentials</title>
    <style>
         body{
                background-image: url("img/teacher114.jpg");
                background-repeat: repeat;
                background-size:contain;
           
               
            }


           

    form {
        width: 60%;
        margin: 100px auto;
        padding: 30px;
        border: 1px solid #555;
        background-color: whitesmoke;
        position: relative;
        left: 5px;
        top: 150px;
        height: 400px;
        }
        input {
        width: 100%;
        border: 1px solid #f1e1e1;
        display: block;
        padding: 5px 10px;
        }

        button {
        border: none;
        padding: 10px;
        border-radius: 5px;
        background-color: green;
        color: #f1e1e1;
        font-weight: bolder;
        }

        .button2 {
        border: none;
        padding: 12px;
        border-radius: 5px;
        background-color: #081A50;
        width: 25%;
        position: absolute;
        bottom: 30px;
        color: #f1e1e1;
        font-weight: bolder;
        }


        table {
        width: 60%;
        border-collapse: collapse;
        margin: 100px auto;
        }
        th,
        td {
        height: 50px;
        vertical-align: center;
        border: 1px solid black;
        }

        .img{
            width: 50rem;
            position: absolute;
            bottom: 100px;
            height: 70%;
            left: 100px; 
        }
        .upp{
            color: red;
            position: 100px;
            font-size:small;
            font-weight: bolder;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .form-footer{
                position: absolute;
                left: 30px;
                bottom: 400px;
                background-color: darkred;
                padding:10px;
                border-radius: 5px;
            }
        .coo{
            color: red;
            font-size: medium;
        }

    </style>
  </head>
  <body>

 
  



    <div class="form">
      
        <form action="upload-credential.php" method="post" enctype="multipart/form-data" >

                                <div class="form-footer">
                                   <a style="text-decoration:none"; href="tutor-dashboard.php"><font color="white"><b><< Home</b></a>
                                </div>
          
						

							<?php  if (isset($_SESSION['user'])) : $username?>
							   <h1> <font size="6" color="blue" ><p align="center"> <?php echo $_SESSION['user']['username']; ?></h1></font></p>
                            <?php endif ?>
						<!-- end logged in user information -->
				
                        <h3><font color="black">Upload Credentials</font></h3>
          <input type="file" name="myfile" class="coo"> <br>
          <button type="submit" name="save" >UPLOAD</button>
          <p><font color="purple">______________________________________________<font></p>

				
				
						
				
									
                <?php

            global $img_name;
            if (isset($_POST['submit']))
            {
                $img_name = $_FILES['glryimage']['name'];
            
                //upload file
                if ($img_name!='')
                {
                    $ext = pathinfo($img_name, PATHINFO_EXTENSION);
                    $allowed = ['png', 'gif', 'jpg', 'jpeg'];
                
                    //check if it is valid image type
                    if (in_array($ext, $allowed))
                    {
                        $created = @date('Y-m-d');

                        // read image data into a variable for inserting
                        $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));
                                
                       
                        

                        $yo6 = "UPDATE `tutor_data` SET imgdata='$img_data'WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
        
                        if (mysqli_query($conn, $yo6)) {
                            echo " Image Uploaded Successful";
                            
                        } else {
                            echo "Error: " . $yo6 . ":-" . mysqli_error($conn);
                        }
                        


                        // $yo7 = "UPDATE `tutor_data` SET created='$created'WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
        
                        // if (mysqli_query($conn, $yo7)) {
                        //     echo "";
                            
                        // } else {
                        //     echo "Error: " . $yo7 . ":-" . mysqli_error($conn);
                        // }
                        
                        
                        
                    }
                }
                
            }

            ?>
                <p class="upp">Upload Professional Pix</p>
            
                
                    
                        <input type="file" name="glryimage" accept="image/*" />
                    
             
                        
            <button  type="btn"name="submit" value="Upload Image "class="button2">Upload Image</button>
            
	
	
        </form>
    </div>
</body>
</html>