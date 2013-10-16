<?php
    if ($_FILES['upload']['error'] == 0) {

        $file = $_FILES['upload']['tmp_name'];

        $file_name = htmlspecialchars($_FILES['upload']['name'], ENT_QUOTES);

        $new_file_name = substr(md5(microtime()), rand(0, 26), 10) . '.' . get_file_type($file_name);

        $type = $_FILES['upload']['type'];

        $size = $_FILES['upload']['size'];

        $folder = 'upload';

        $dir = '../../upload'; // The directory that you want to download the file into in.

        $path = $dir . '/' . $new_file_name;

        $modified = date("Y-m-d H:i:s");

        if (file_exists($dir)) {
            if (move_uploaded_file($file, $path)) { //upload file to path folder
                $sql_up = "INSERT INTO 
				tb_upload 
                            VALUES 
                                (0, '$new_file_name', '$type', $size, '$folder', '$modified');                    
                        ";
                @mysql_query($sql_up) or die(mysql_error());
                header("Location: upload.php?new_file=$new_file_name");
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
?>
