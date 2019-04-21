<?php
$no=$_POST['no'];
$co=$_POST['content'];
echo $no;
echo $co;

$conn = $conn=mysqli_connect("localhost","root","111111","useri");
$sql = "UPDATE board set content = '".$co."' WHERE no = ".$no;
$result = mysqli_query($conn, $sql);
header('Location: ./boardview.php?no='.$no);
?>