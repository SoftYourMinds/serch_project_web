<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Project</title>
	<link rel="stylesheet" href="style.css">
</head>
<?php
	$mysqli = new mysqli("localhost", "root", "", "tesla");

	$query = "SELECT * FROM `project` ORDER by id DESC";

	$vars = [];
	$i = 0;
	if ($result = $mysqli->query($query)) {
		 while ($var = $result->fetch_assoc()) {
			  $vars[$i]["id"] = $var["id"];
			  $vars[$i]["name"] = $var["name"];
			  $vars[$i]["descr"] = $var["descr"];
			  $vars[$i]["per"] = $var["per"];
			  $vars[$i]["hour"] = $var["hour"];
			  $vars[$i]["hoursec"] = $var["hoursec"];
			  $vars[$i]["start"] = $var["start"];
			  $vars[$i]["end"] = $var["end"];
			  $vars[$i]["progress"] = $var["progress"];
			  $vars[$i]["ind"] = $var["ind"];
			  $vars[$i]["prior"] = $var["prior"];
			  $i++;
		 }
	}

?>

<body>
	<header>
		<div class="header_inner">
			<div class="logo"><a href="">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
						id="Vrstva_1" x="0px" y="0px" viewBox="0 0 45.4 45.4" style="enable-background:new 0 0 45.4 45.4;"
						xml:space="preserve">
						<path class="st1"
							d="M22.7,45.4c12.5,0,22.7-10.2,22.7-22.7S35.2,0,22.7,0S0,10.2,0,22.7S10.2,45.4,22.7,45.4" />
						<path class="st0"
							d="M19.6,33.1V12.3c-5.3,1.4-8.4,5.2-8.4,10.3C11.2,27.7,14.4,31.7,19.6,33.1 M39.8,22.6c0,4.8-1.7,8.8-5.1,12  c-3.2,3.1-7.7,4.8-12.1,4.8c-4.6,0-8.6-1.6-11.9-4.6c-3.6-3.2-5.3-7.4-5.3-12.1C5.4,17,8.1,11.9,13,8.6c3-2,6.4-2.8,10.9-2.8h0.9  v27.4c5.5-1,9.1-5.3,9.1-10.7c0-3.9-2-7.2-5.3-9.1V6.9C36,10,39.8,15.5,39.8,22.6" />
					</svg>
				</a>
			</div>
			<div class="profile">VT</div>
		</div>
	</header>

	<div class="content">
		<div class="content_inner">
			<div class="listprojects">
				<div class="top">
					<div class="left">
						Список проектів <span>(<?php echo $i;?>)</span>
					</div>
					<a href="create.php">
						<div class="right">
							Створити проект
						</div>
					</a>
				</div>
				<div class="center">
					<table>
						<tbody>
							<tr>
								<td>ІМ'Я</td>
								<td>ІНДЕКАТОР</td>
							</tr>
							<?php 
								for($y = 0; $y < $i; $y++){
									echo '
									<tr class="proj">
										<td>'.$vars[$y]["name"].' <input type="hidden" value="'.$vars[$y]["id"].'"></td>
										<td>
											<div class="ind '.$vars[$y]["ind"].'"></div>
										</td>
									</tr>									
									';
								}
							
							?>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<script>
	var proj = document.querySelectorAll('.proj');
	for (let i = 0; i < proj.length; i++) {
		proj[i].addEventListener('click', function() {
			window.location.href = 'check.php?id=' + proj[i].querySelector('input').value;
		});
	}
	</script>
</body>

</html>