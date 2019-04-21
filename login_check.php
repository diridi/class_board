<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$conn=mysqli_connect("localhost","root","111111","useri");

$check="SELECT * FROM user_info WHERE id='$id'";
$result = $conn ->query($check);
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC);
    var_dump($row['pw']);
    var_dump($pw);
    if($row['pw'] == $pw){
        $_SESSION['id']=$id;
        $_SESSION['pw']=$pw;
        if(isset($_SESSION['id'])){
            header('Location: ./main.php');
        }
        else{
            echo "세션저장실패";
        }
    }
    else{
        echo "틀린 패스워드";
    }
}
else{
    echo "틀린 아이디";
}
?>