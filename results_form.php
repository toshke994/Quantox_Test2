<?php
	/*Check if user is logged in. If not, redirect him to login_form
		and display message.*/
	session_start();
	if(!isset($_SESSION['currentEmail']))
	{
		$_SESSION['loginMessage'] = "Please login.";
		header('location: http://localhost/QuantoxTest2/login_form.php');
	}
	$currentPage = 'results';
?>
<html>
	<head>
		<title>Results</title>
		<link href="css/bootstrap.css" rel="stylesheet">
	</head>

	<body>
		<?php include('nav_bar.php'); ?>

		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>Email</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
			<?php
				/*Display all search results in table.*/
				require_once 'config.php';

				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
						$sql = "SELECT id, email, name FROM client WHERE email LIKE '%".$_POST['searchInput']."%' OR name LIKE '%".$_POST['searchInput']."%'";
						$result = $conn->query($sql);
						if ($result)
						{
							$array = array();
							while ($row = $result->fetch_assoc())
							{
								$id = $row['id'];
								$array[$id]['email'] = $row['email'];
								$array[$id]['name'] = $row['name'];

								print("<tr class='info'>");
								print("<td>"); print($array[$id]["email"]); print("</td>");
								print("<td>"); print($array[$id]["name"]); print("</td>");
								print("</tr>");
							}
						}
				}
			?>
			</tbody>
		</table>
	</body>
</html>
