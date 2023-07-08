<?php 
session_start();
$connect=mysqli_connect("localhost","root","");
if(!$connect)
{
    echo "Failed sdr";
}
// if($connect)
//  {
// echo "Success sdr";
// }
mysqli_select_db($connect,'quizaerospace');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<title>EDUSMART</title>
</head>
<style>
    .question{
        width: 100%;
        background-color: aliceblue;
        height: fit-content;
    }
    .answers{
        width: 100%;
        background-color: aliceblue;
        height: fit-content;
    }
</style>
</head>
<body>
<body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
         <a href="quiz.php" name="quiz" class="active">Quiz</a>
         <a href="notes.php" name="notes" class="">Notes</a>
               <a href="../includes/logout.inc.php" name="logout-submit">Sign Out</a>';              
       }
        ?>
      </div>
 </header>
</body>
</html>

<form action="quizcheck.php" method="post">

<?php
for($i=1;$i<6;$i++)
{
$q="select * from questions where qid=$i";
$query=mysqli_query($connect,$q);
while($rows=mysqli_fetch_array($query))
{
    ?>
    <!-- <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto justify-content-center d-block"> -->
    <div class="question">
        <h4 class="card-header"> <?php echo $rows['question'] ?> </h4>
        
        <?php 
        $q="select * from answers where ans_id=$i";
        $query=mysqli_query($connect,$q);
            
        while($rows=mysqli_fetch_array($query))
        {
            ?>
        <div class="answers">
            <input type="radio" name="quizchecked[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid'] ?>">
            <?php echo $rows['answer']; ?>
        </div>
    </div>

<?php    
        }
}
}
?>

<input type="submit" name="submit">
</form>      
</div>