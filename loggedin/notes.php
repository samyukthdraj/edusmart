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
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">"> -->
<title>EDUSMART</title>

<style>
.subjects
{
    height: 55px;
    background-color: lavender;
    display: flex;
    text-align: center;
    justify-content: center;
    font-size: 35px;
    font-family: Arial, Helvetica, sans-serif;
    color: #7971ea;
    font-weight: 100;
}

.all
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 75%;
    width: 75%;
    background-color: lavender;
    margin: auto;
    margin-top: 20px;
}
a
{
    
    color: #7971ea;
}
a:hover
{
    color: black;
}
.java
{
    position: absolute;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 10px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.cpp
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 80px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
.python
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 150px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}
.arabic
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 220px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.english
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 290px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.french
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 360px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.software
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 430px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.aerospace
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 500px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.chemical
{
    position: absolute;;
    width: 75%;
    font-size: 20px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* border: 2px black solid; */
    background-color: whitesmoke;
    margin-top: 570px;
    padding: 10px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}


</style>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
         <a href="quiz.php" name="quiz" class="">Quiz</a>
         <a href="notes.php" name="notes" class="active">Notes</a>
               <a href="../includes/logout.inc.php" name="logout-submit">Sign Out</a>';
               
       }
        ?>
      </div>
 </header>

<div class="subjects"><u>SUBJECTS</u> </div>
<div class="all">
    <div class="container min-vh-100 d-flex justify-content-center">
        <div class="java">
        <a href="notesjava.php">JAVA NOTES</a>
        </div>
        <div class="cpp">
        <a href="notescpp.php">C++ NOTES</a>
        </div>
        <div class="python">
        <a href="notespython.php">PYTHON NOTES</a>
        </div>
       <div class="arabic">
        <a href="notesarabic.php">ARABIC NOTES</a>
       </div>
       <div class="english">
        <a href="notesenglish.php">ENGLISH NOTES</a>
       </div>
       <div class="french">
        <a href="notesfrench.php">FRENCH NOTES</a>
       </div>
       <div class="software">
        <a href="notessoftware.php">SOFTWARE ENGINEERING NOTES</a>
       </div>
       <div class="aerospace">
        <a href="notesaerospace.php">AEROSPACE ENGINEERING NOTES</a>
       </div>
       <div class="chemical">
        <a href="noteschemical.php">CHEMICAL ENGINEERING NOTES</a>
       </div>

    </div>
</div>
