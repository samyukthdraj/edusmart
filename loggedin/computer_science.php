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
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
         <a href="quiz.php" name="quiz">Quiz</a>
         <a href="notes.php" name="notes" class="">Notes</a>
               <a href="../includes/logout.inc.php" name="logout-submit">Sign Out</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Computer science Courses</li>

  </ol>
</nav>

<div class="java-container">
  <div class="card" >
      <img src="img4.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >C++ - Cours</p>

        <p class="card-text details" >Language : French</p>
        <p class="card-text details" >Tutor : FormationVidéo</p>

      </div>
      <a href="computer_science/c++/description_formationvideo.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_formationvideo.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img5.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Learn C++ Programming | Video Tutorial for Beginners</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : LearningLad </p>
      </div>
      <a href="computer_science/c++/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img6.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">C++ Programming Tutorials</p>
        <p class="card-text details">Language : English</p>
        <p class="card-text details ">Tutor : thenewboston </p>
      </div>
      <a href="computer_science/c++/description_thenewboston.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_thenewboston.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img1.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Apprendre la programmation avec JAVA</p>

        <p class="card-text details" >Language : French</p>
        <p class="card-text details" >Tutor : Dominique Liard</p>

      </div>
      <a href="computer_science/java/description_dominique.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_dominique.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img2.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Learn Java Programming | Video Tutorial for Beginners</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : LearningLad </p>
      </div>
      <a href="computer_science/java/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img3.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Java Programs For Practice</p>
        <p class="card-text details">Language : English</p>
        <p class="card-text details ">Tutor : Alex Lee </p>
      </div>
      <a href="computer_science/java/description_alexlee.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_alexlee.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img7.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Python Tutorial for Beginners</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : Telusko</p>

      </div>
      <a href="computer_science/python/description_telusko.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_telusko.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img8.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Python Tutorials Arabic|| دورة برمجة بايثون</p>

        <p class="card-text details" >Language : Arabic</p>
        <p class="card-text details" >Tutor : TheNewBaghdad </p>
      </div>
      <a href="computer_science/python/description_thenewbaghdad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_thenewbaghdad.php" class="btn btn-primary">View Course !</a>
  </div>
</div>
