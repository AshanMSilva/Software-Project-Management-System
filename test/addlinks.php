<?php
	if(isset($_POST['upload'])){
		$db = mysqli_connect("localhost","root","","git");
		$text = $_POST['text'];
		$re = substr($text, 0, 7);
		//$text = urlencode($text);
		//$text = mysql_real_escape_string($text);
		$Price = $_POST['Name'];
		if ( $text!=NUll  and $Price!=Null ){
			
			$sql = "INSERT INTO project_link( name,link) VALUES ('$Price','$text');";
			mysqli_query($db,$sql);
		}
		
	}


?>
<!DOCTYPE html>
<html>
<head>
<link href = "bootstrap/css/bootstrap.min.css" rel = "stylesheet">
    <link href = "stylesheet.css" rel = "stylesheet">
    <script src="Resources/jquery/jquery-3.3.1.min.js"></script>
    <link rel="shortcut icon" href="Resources/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- File uploader plugin -->

    <script src="Resources/fileUploader/dropzone.js"></script>



    <link href="Resources/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="Resoures/styles.css" rel="stylesheet">
    <title>Link Upload</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<style>



</style>
<body>
<div id = "content"  >
    <h1 id = "head"></h1>
	<form method = "post" action = "addlinks.php" enctype = "multipart/form-data">
	<div class="input-group">
		<input type = "text" class="form-control" id="validationDefaultUsername" name = "Name" placeholder = "Project Name Is">
	
		
	</div>  
	<textarea name = "text"  class="form-control" id="validationDefaultUsername" cols="40" rows = "4" placeholder = "GitHub Link" ></textarea> 

	<input  id = "submit" class="btn btn-primary" type = "submit" name = "upload" value = "Submit" style="height:50px;width:460px" >
		
	</form>
	
	</div>
	
</div> 

</body>
</html>
