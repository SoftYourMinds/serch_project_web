<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple Project</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../project.css">
</head>
<?php
	$mysqli = new mysqli("localhost", "root", "", "tesla");

	$query = "SELECT * FROM `project` ORDER by id";

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
	$y = $_POST['val'] - 1;
?>

<body>
	<header>
		<div class="header_inner">
			<div class="logo"><a href="../index.php">
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
			<div class='title'>
				<span><?php echo $vars[$y]['name']; ?> ❤</span>
				<span>Перегляд проєкту</span>
			</div>
			<div class="flex">
				<div id="left">
					<div class="listprojects">
						<div class="topblock">
							Опис проєкту
							<span>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
									id="Capa_1" width="25px" height="20px" viewBox="0 0 386.375 386.375"
									style="enable-background:new 0 0 386.375 386.375;" xml:space="preserve">
									<g>
										<path
											d="M21.05,286.875l76.5,76.5l-1.9,3.8l-95.6,19.2l19.1-95.6L21.05,286.875z M34.65,272.775l77.1,77.1l216.4-216.399   l-77.101-77.1L34.65,272.775z M374.85,34.375l-23-22.9c-15.3-15.3-38.199-15.3-53.5,0l-32.5,32.5l76.5,76.5l32.5-32.5   C390.15,72.675,390.15,47.775,374.85,34.375z" />
									</g>

								</svg></span>
						</div>
						<span class='descr'>
							<?php 
							echo $vars[$y]["descr"];
							
							?>
						</span>
					</div>

				</div>
				<div class="listprojects">
					<div class="topblock">
						Інформація про проєкт
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
								id="Capa_1" width="25px" height="20px" viewBox="0 0 386.375 386.375"
								style="enable-background:new 0 0 386.375 386.375;" xml:space="preserve">
								<g>
									<path
										d="M21.05,286.875l76.5,76.5l-1.9,3.8l-95.6,19.2l19.1-95.6L21.05,286.875z M34.65,272.775l77.1,77.1l216.4-216.399   l-77.101-77.1L34.65,272.775z M374.85,34.375l-23-22.9c-15.3-15.3-38.199-15.3-53.5,0l-32.5,32.5l76.5,76.5l32.5-32.5   C390.15,72.675,390.15,47.775,374.85,34.375z" />
								</g>

							</svg></span>
					</div>
					<span class='descr'>
						<table>
							<tbody>
								<tr>
									<td id='gr'><?php echo $vars[$y]["per"]; ?>%</td>
									<td>Готовність проекту по витраченому часу</td>
								</tr>
								<tr>
									<td class="bold"><?php echo $vars[$y]["hour"]; ?> ч</td>
									<td>Загальна розрахунковий час</td>
								</tr>
								<tr>
									<td class="bold"><?php echo $vars[$y]["hoursec"]; ?> ч <font>30 м</font>
									</td>
									<td>Загальна витрачений час</td>
								</tr>
								<tr>
									<td class='date'><?php echo date('d-m-Y', strtotime($vars[$y]["start"])); ?></td>
									<td>Дата початку</td>
								</tr>
								<tr>
									<td class='date'><?php echo date('d-m-Y', strtotime($vars[$y]["end"])); ?></td>
									<td>Дата завершення</td>
								</tr>
								<tr>
									<td>
										<table class='todoo'>
											<tr>
												<th style='width: <?php echo intval($vars[$y]["progress"]); ?>%' class='closed'>
												</th>
												<th style='width: <?php $temp = 100 - $vars[$y]["progress"]; echo intval($temp); ?>%'
													class='todo'></th>
											</tr>
										</table>
									</td>
									<td>прогрес</td>
								</tr>
								<tr>
									<td>
										<div class="ind <?php echo $vars[$y]["ind"]; ?>"></div>
									</td>
									<td>індикатор</td>
								</tr>
								<tr>
									<td class='pri'><?php echo $vars[$y]["prior"]; ?></td>
									<td>прорітет</td>
								</tr>
							</tbody>
						</table>
					</span>
				</div>

			</div>
		</div>



		<script>
		var topblock = document.querySelectorAll('.topblock');
		for (let i = 0; i < topblock.length; i++) {
			topblock[i].addEventListener('click', function() {
				topblock[i].closest('.listprojects').classList.toggle('h40');
			});
		}


		let svg = document.querySelectorAll('svg');
		for (let i = 0; i < svg.length; i++) {
			svg[i].addEventListener('click', function() {
				window.location.href = 'addrep.php?id=' + <?php echo $y; ?>;
			});
		}
		</script>
</body>

</html>