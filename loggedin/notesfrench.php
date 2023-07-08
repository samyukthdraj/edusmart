<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<title>EDUSMART</title>
<head>
<style>
    .note
    {
        width: 100%;
        height: 100vh;
    }
</style>
</head>

<body>
<div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../profile.php" name="profile">Profile</a>
         <a href="quiz.php" name="quiz">Quiz</a>
         <a href="notes.php" name="notes" class="active">Notes</a>
               <a href="../includes/logout.inc.php" name="logout-submit">Sign Out</a>';
               
       }
        ?>
      </div>
 </header>

 <iframe class="note"src="../notes/frenchnotes.pdf" frameborder="0"></iframe>
</body>
</html>