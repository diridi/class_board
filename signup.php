<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];

if($pw!=$pwc){
    echo "패스워드 확인";
    echo "<a href=signup.html>back page</a>";
    exit();
}
if($id==NULL || $pw==NULL || $name==NULL){
    echo "모든 항목을 작성해주세요";
    echo "<a href=signup.html>back page</a>";
    exit();
}

$conn=mysqli_connect("localhost","root","111111","useri");

$check="SELECT * from user_info WHERE id='$id'";
$result = mysqli_query($conn,$check);

if($result->num_rows==1){
    echo "중복된 아이디입니다.";
    echo "<a href=signup.html>back page</a>";
    exit();
}

$signup = mysqli_query($conn,"
INSERT INTO user_info 
(id,pw,name)
VALUES
('$id','$pw','$name')
");
if($signup){
    echo "sign up success";
    header('Location: ./main.php');
}
?>