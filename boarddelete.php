<?php
$no = $_GET['no'];
$conn = $conn=mysqli_connect("localhost","root","111111","useri");
$sql = 'DELETE from board WHERE no = '.$no;
$result = mysqli_query($conn, $sql);
header('Location: ./board.php');
?>