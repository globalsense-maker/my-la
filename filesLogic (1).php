
<?php
//include('tutor-function.php');
include_once 'db_connect.php';
?>

<?php
        global $id;
        // connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'la_db');

        $sql = "SELECT * FROM tutor_data";
                $result = mysqli_query($conn, $sql);
            
                $files = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // Uploads files
        if (isset($_POST['save'])) { // if save button on the form is clicked
            // name of the uploaded file
            $filename = $_FILES['myfile']['name'];

            // destination of the file on the server
            $destination = 'uploads' . $filename;

            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['myfile']['tmp_name'];
            $size = $_FILES['myfile']['size'];

            if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
                echo "You file extension must be .zip, .pdf or .docx";
            } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
                echo "File too large!";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                //     $sql = "INSERT INTO tutor_data (name, size, downloads) VALUES ('$filename', $size, 0)";
                //     if (mysqli_query($conn, $sql)) {
                //         echo "File uploaded successfully";
                //     }
                // } else {
                //     echo "Failed to upload file.";
                $yo3 = "UPDATE `tutor_data` SET name='$filename' WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
                
                if (mysqli_query($conn, $yo3)) {
                    echo " Document Uploaded successfully";
                    
                } else {
                    echo "Error: " . $yo3. ":-" . mysqli_error($conn);


                }


                $yo4 = "UPDATE `tutor_data` SET size='$size'WHERE userid='".$_SESSION['user']['id']."'ORDER BY userid DESC";
                
                if (mysqli_query($conn, $yo4)) {
                    echo "";
                    
                } else {
                    echo "Error: " . $yo4. ":-" . mysqli_error($conn);


                }
            }
        } 
    }   
?>



          




