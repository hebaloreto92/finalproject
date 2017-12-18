
<!doctype html>
<head><title>heba.com</title>
<hr>
       Copyright &copy 2014 All Right Reserved: heba.com
       </hr>
<center>
<h1>HEBA SHAHID</h1>
</center>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

 
<body background="w3s.jpg">
        <center><img src="myimage.jpg" width="300" height="200"><br><br>
        


<h1>
    <?php

    //this how to print some data;
    

    ?> </h1>



<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
    


        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>
        

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>



        <button type="submit">Login</button>
    </div>

<br>
</form>
<form action="index.php?page=accounts&action=registerUser" method="post">

    <div class="container">
    
    
    
        <h3>Not registered?<h3><button type="submit">Register</button>
        
    </div>


</form>


<!--<form action="index.php?page=tasks&action=delete&id=<?php /*$data['id'] */?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>-->



<script src="js/scripts.js"></script>

</body>
</html>