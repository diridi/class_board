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
    <div class="formbox">
        <h1><?php echo $row['title']?></h1>
        <div class="info">작성자 : <?php echo $row['id']?> 날짜 : <?php echo $row['date']?> 조회 : <?php echo $row['hit']?></div>
        <div class="contents"><?php echo $row['content']?></div>
        <div class="button">
            <button onclick="location.href='board.php'">목록</button>
            <?php
                if($id == $row['id'] && $pw == $row['password']){
            ?>
            <button onclick="location.href='boardmodified.php?no=<?php echo $no;?>'">수정</button>
            <button onclick="location.href='boarddelete.php?no=<?php echo $no;?>'">삭제</button>
            <?php
                }
            ?>
        </div>
    </div>

</body>
</html>