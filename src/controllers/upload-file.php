<?php

require_once '../system/system.php';
notlogin_header('index.php');

if ($_POST) {

    if ($_FILES['upload']['error'] == 0) {

        $file = $_FILES['upload']['tmp_name'];
        $file_name = htmlspecialchars($_FILES['upload']['name'], ENT_QUOTES);

        // Random file name
        if (isset($_POST['checkbox'])) {
            $new_file_name = substr(md5(microtime()), rand(0, 26), 10) . '.' . get_file_type($file_name);
            // Specify directory to upload
            $type = $_FILES['upload']['type'];

            $size = $_FILES['upload']['size'];

            $folder = 'upload02';

            $dir = '../../' . $folder; //  The directory that you want to download the file into it.

            $path = $dir . '/' . $new_file_name;

            $modified = date("Y-m-d H:i:s");

            if (file_exists($dir)) {
                if (move_uploaded_file($file, $path)) {  // upload file to path folder
                    $sql_up = "INSERT INTO 
				tb_upload 
                            VALUES 
                                (0, '$new_file_name', '$type', $size, '$folder', '$modified');                    
                        ";
                    @mysql_query($sql_up) or die(mysql_error());
                    echo '
					<script>window.location = "../views/upload.php?new_file=' . $new_file_name . '";</script>
				';
                    //header("Location: upload.php?new_file=$new_file_name");
                    // header("Refresh: 2; url=upload.php?new_file=$new_file_name");
                    // echo "Uploading file ...";
                    exit();
                } else {
                    echo 'ERROR Upload file';
                    exit();
                }
            } else {
                echo 'ERROR No upload folder';
                exit();
            }
        } // END if(isset($_POST['checkbox']))
        // Define New name
        if (isset($_POST['newname'])) {
            $new_name = htmlspecialchars($_POST['newname'], ENT_QUOTES);
        } else {
            $new_name = htmlspecialchars($_FILES['upload']['name'], ENT_QUOTES);
        }

        //check  RegEx 
        $pattern = "/^[a-zA-Z0-9_\)\.\(\-]/";
        $name = strtolower($new_name);
        $str_ext = '.' . get_file_type($name);
        $name_only_length = strlen($name) - strlen($str_ext);
        $name_only = substr($name, 0, $name_only_length);

        if (!preg_match($pattern, $name_only)) {
            echo '<script>window.location = "../views/upload.php?upload_error=name_error";</script>';
            exit();
        }

        // Specify directory to upload
        $type = $_FILES['upload']['type'];

        $size = $_FILES['upload']['size'];

        $folder = 'upload02';

        $dir = '../../' . $folder; //  The directory that you want to download the file into it.

        $path = $dir . '/' . $new_name;

        $modified = date("Y-m-d H:i:s");

        if (file_exists($dir)) {
            if (move_uploaded_file($file, $path)) {  // upload file to path folder
                $sql_up = "INSERT INTO 
				tb_upload 
                            VALUES 
                                (0, '$new_name', '$type', $size, '$folder', '$modified');                    
                        ";
                @mysql_query($sql_up) or die(mysql_error());
                echo '
					<script>window.location = "../views/upload.php?new_file=' . $new_name . '";</script>
				';
                //header("Location: upload.php?new_file=$new_file_name");
                // header("Refresh: 2; url=upload.php?new_file=$new_file_name");
                // echo "Uploading file ...";
                exit();
            } else {
                echo 'ERROR Upload file';
                exit();
            }
        } else {
            echo 'ERROR No upload folder';
            exit();
        }
    }
} // END if post


header("Location: ../views/upload.php");
exit();
?>