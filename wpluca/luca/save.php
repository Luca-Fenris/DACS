 <?php
	$con = mysqli_connect("localhost", "root", "", "dacs2018");
	if (isset($_POST ["email"]) && isset($_POST ["name"]) && isset($_POST ["password"])){
		$sql = "insert into user (email, nome, senha) values (?, ?, ?)";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, "ss", $_POST["email"], $_POST["name"], $_POST["password"]);
		mysqli_stmt_execute($stmt);
		$result = mysqli_query($con,$sql);
	}
	$con->close();
?>