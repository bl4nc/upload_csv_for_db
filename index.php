<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload csv for db</title>
</head>

<body>

    <form method="post" action="" enctype="multipart/form-data">

        <label>Select a csv data</label>

        <br>
        <br>
        <input type="file" name="csv_data" accept=".csv">
        <br>
        <br>
        <button type="submit">Send</button>
    </form>
</body>

</html>

<?php
include "env.php";
include "db_config.php";
if (!empty($_FILES)) {
    $file = $_FILES[array_keys($_FILES)[0]]['tmp_name']; //Uploaded file
    if (move_uploaded_file($file, "upload/" . "up.csv")) {
        $table_name = "test_table";
        $sql = "LOAD DATA LOCAL INFILE 'upload/up.csv' 
            INTO TABLE $table_name 
            FIELDS TERMINATED BY ';' 
            ENCLOSED BY '\"'
            LINES TERMINATED BY '\n'
            IGNORE 1 ROWS"; //Ignore title line

        $query = $mysqli->query($sql);
        if ($query) {
            unlink("upload/up.csv");
            echo 'Upload complete!';
        } else {
            echo 'Upload error';
        }
    }
}
