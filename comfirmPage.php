<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Page</title>
</head>
<body>
<style>
    p {
        font-size: large;
    }
</style>
<h1>Its a confirmation Page.</h1>
<h2><?php
echo "My first PHP script!";
    ?></h2>

   <p> <?php
        foreach($_POST as $key => $value){
            echo "<br/>$key : $value";
        }
    ?></p>
</body>
</html>
