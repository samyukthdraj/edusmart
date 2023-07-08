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
mysqli_select_db($connect,'quizjava');
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

<?php

if(isset($_POST['submit']))
{
    if(!empty($_POST['quizchecked']))
    {
        $count = count($_POST['quizchecked']);
        echo "Out Of 5, You Have Selected ".$count. " options.";
        $result=0;
        $i=1;
        
       // if(isset($selected) || isset($checked))
        
        $select=$_POST['quizchecked'];
        //print_r(array_values($select));
        print_r($select);
        $q="select * from questions";
        $query=mysqli_query($connect,$q);
        
        while($rows = mysqli_fetch_array($query))
        {
            print_r($rows['ans_id']);
            $checked = $rows['ans_id'] == $select[$i];
            if($checked)
            {
                $result++;
            }
            $i++;
        } 
        echo "<br><br> The Total Score is ".$result;
    } 
}

    $name=$_SESSION['userId'];
    // there should be $result in the $finalresult= below but for some reason it shows error undefined variable eventhough i defined it
    $finalresult=" insert into user(username,total,answers) values ('$name','5','$result') ";
    $queryresult=mysqli_query($connect,$finalresult);
?>
