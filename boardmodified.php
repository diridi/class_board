<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/boardview.css">
    <meta charset="UTF-8">
    <title>view page</title>
</head>
<body>
<?php
session_start();
$id = $_SESSION['id'];
$pw = $_SESSION['pw'];
$no=$_GET['no'];
$conn = $conn=mysqli_connect("localhost","root","111111","useri");
$sql = 'SELECT * from board WHERE no = '.$no;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
    <form class="formbox" action="boardmo.php" method="POST">
        <h1><?php echo $row['title']?></h1>
        <div class="info">작성자 : <?php echo $row['id']?> 날짜 : <?php echo $row['date']?> 조회 : <?php echo $row['hit']?></div>
        <div class="contents">
            <textarea name="content" value="<?php echo $row['content']?>"><?php echo $row['content']?></textarea>      
        </div>
        <input type="" name="no" value="<?php echo$no;?>">
        <div class="button">
            <input type="submit" value="완료">
        </div>
    </form>

</body>
</html>