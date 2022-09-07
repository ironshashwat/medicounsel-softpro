 <?php
 session_start();
 include("connect.php");
 if($_SESSION['patient']=="")
 {
	header("Location:login.php"); 
 }
 else
 {
	$query="select * from tbl_question";
	$res=mysql_query($query); 
 }
 ?>
 <html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<style>
		.btn
		{
			height:62px;
		}
	</style>
	</head>
	<body>
		<table height="100%" width="100%" class="table-striped">
			<tr class="bg-info">
				<th>S NO.</th>
				<th>Question</th>
				<th>Post Answer</th>
				<th>View Answer</th>
			</tr>
			
			<?php 
			$a=1;
			while($row=mysql_fetch_array($res,MYSQL_BOTH))
			{
			?>
			<tr>
				<td><?php echo $a; ?></td>
				<td><?php echo $row['question']; ?></td>
				<td>
					<form action="answer.php" method="post" class="form-inline">
						<input type="hidden" value="<?php echo $row['qid']; ?>" name="qid"/>
						<textarea name="ans" class="form-control"></textarea>
						<input type="submit" value="Add" class="btn btn-info"/>
					</form>
				</td>
				<!--<td><a href="post.php?qid=<?php //echo $row['0'] ?>">Post Answer</a></td> -->
				<td><a href="view.php?qid=<?php echo $row['0'] ?>" target="answer">View Answer</a></td>
			</tr>
			<?php
			$a++;
			}
			?>
		</table>
	</body>
 </html>