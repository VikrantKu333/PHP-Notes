<!-- PHP File Upload -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
    <style>
        header {
            background-color: mediumpurple;
            padding: 10px;
        }

        section {
            background-color: mediumorchid;
            padding: 10px;
            margin: 5px 0;
        }

        input {
            padding: 10px;
            margin: auto;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <h2>PHP File Upload</h2>
    </header>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <!-- Select image to upload: -->
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <!-- PHP File Upload -->
        <?php
        echo "<pre>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $target_dir = "PHP Testing/Upload/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo "\n<b>The File is an image - </b>" . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "\n<b>The File is not an image.</b>";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "\n<b>Sorry, the file already exists.</b>";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "\n<b>Sorry, your file is too large.</b>";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "\n<b>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</b>";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "\n<b>Sorry, your file was not uploaded.</b>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    echo "\n<b>The file </b>" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "<b> has been uploaded.</b>";
                } else {
                    echo "\n<b>Sorry, there was an error uploading your file.</b>";
                }
            }
        }
        echo "</pre>";
        ?>
    </section>
</body>

</html>