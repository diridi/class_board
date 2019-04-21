<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/board.css">
    <meta charset="UTF-8">
    <title>board page</title>
</head>
<body>
	<h1>학급 게시판</h1>
	<button onclick="location.href='write.html'">글쓰기</button>
	<button onclick="location.href='logout.php'">로그아웃</button>
	<div class="boardd">
    <table>
			<thead>
				<tr>
					<th class="no">번호</th>
					<th class="title">제목</th>
					<th class="author">작성자</th>
					<th class="date">작성일</th>
					<th class="hit">조회</th>
				</tr>
			</thead>
			<tbody>
                <?php
                    $conn = $conn=mysqli_connect("localhost","root","111111","useri");
					$sql = 'select * from board order by no desc';
					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
					{
				?>
				<tr>
					<td class="no"><?php echo $row['no']?></td>
					<td class="title"><a href="boardview.php?no=<?php echo $row['no']?>"><?php echo $row['title']?></a></td>
					<td class="author"><?php echo $row['id']?></td>
					<td class="date"><?php echo $row['date']?></td>
					<td class="hit"><?php echo $row['hit']?></td>
				</tr>
					<?php
						}
					?>
			</tbody>
		</table>
		</div>
</body>
</html>




<?php

?>