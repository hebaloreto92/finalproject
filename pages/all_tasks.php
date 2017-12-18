<!doctype html>

<html lang="en">
<head>
<body background="w3s.jpg">
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<?php
//this is how you print something

$arr = (array)$data;
if (empty($arr)) {
    echo "0 record fetched for your ID, you need to register first by clicking on ADD NEW TASK";
}
else
{
print utility\htmlTable::genarateTableFromMultiArray($data);
}

?>

<center><h1><a href="index.php?page=accounts&action=show">VIEW MY PROFILE </a></h1></center>
<center><h1><a href="index.php?page=tasks&action=create">ADD NEW TASK </a></h1></center>

<script src="js/scripts.js"></script>
</body>
</html>