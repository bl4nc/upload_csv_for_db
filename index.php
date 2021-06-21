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

print_r($_FILES);