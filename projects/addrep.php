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
	$y = $_GET['id'];
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
	<form action="update.php" method="post">
		<input type="hidden" value="<?php echo $y; ?>" name='id'>
		<div class="content">
			<div class="content_inner">
				<div class='title'>
					<span>???????????????? ?????????????? ???</span>
					<span>????????????????????????</span>
				</div>
				<div class="flex">
					<div id="left">
						<div class="listprojects" style="margin-bottom: 20px;">
							<div class="topblock">
								????'?? ??????????????

							</div>

							<span class='descr'>
								<input type="text" name='name' value='<?php echo $vars[$y]['name'] ?>' required>
							</span>
						</div>
						<div class="listprojects">
							<div class="topblock">
								???????? ??????????????

							</div>

							<span class='descr'>
								<textarea name="descr" cols="20" rows="4" required><?php echo $vars[$y]['descr'] ?></textarea>
							</span>
						</div>
					</div>
					<div class="listprojects">
						<div class="topblock">
							???????????????????? ?????? ????????????

						</div>
						<span class='descr'>
							<table>
								<tbody>
									<tr>
										<td id='gr'><input type="text" name="per" style="width: 60px"
												value='<?php echo $vars[$y]['per'] ?>'>%</td>
										<td>???????????????????? ?????????????? ???? ?????????????????????? ????????</td>
									</tr>
									<tr>
										<td class="bold"><input type="text" name="hour" style="width: 60px"
												value='<?php echo $vars[$y]['hour'] ?>'> ??</td>
										<td>???????????????? ?????????????????????????? ??????</td>
									</tr>
									<tr>
										<td class="bold"><input type="text" name="hoursec" style="width: 60px"
												value='<?php echo $vars[$y]['hoursec'] ?>'> ??
										</td>
										<td>???????????????? ???????????????????? ??????</td>
									</tr>
									<tr>
										<td class='date'><input type="date" name="start" style="width: 130px"
												value='<?php echo $vars[$y]['start'] ?>'></td>
										<td>???????? ??????????????</td>
									</tr>
									<tr>
										<td class='date'><input type="date" name="end" style="width: 130px"
												value='<?php echo $vars[$y]['end'] ?>'></td>
										<td>???????? ????????????????????</td>
									</tr>
									<tr>
										<td>
											<input type="range" name="progress" value='<?php echo $vars[$y]['progress'] ?>'>
										</td>
										<td>??????????????</td>
									</tr>
									<tr>
										<td>
											<select name="ind" id="" value='<?php echo $vars[$y]['ind'] ?>'>
												<option value="red">????????????????</option>
												<option value="yellow">????????????</option>
												<option value="green">??????????????</option>
											</select>
										</td>
										<td>??????????????????</td>
									</tr>
									<tr>
										<td>
											<select name="prior" id="">
												<option value="??????????????">??????????????</option>
												<option value="????????????????">????????????????</option>
												<option value="??????????????">??????????????</option>
											</select>
										</td>
										<td>????????????????</td>
									</tr>
									<tr>
										<td colspan='2' align="right" style="border-bottom: 0;">
											<input type="submit">
										</td>
									</tr>
								</tbody>
							</table>
						</span>
					</div>

				</div>
			</div>
	</form>



	<script>
	var topblock = document.querySelectorAll('.topblock');
	for (let i = 0; i < topblock.length; i++) {
		topblock[i].addEventListener('click', function() {
			topblock[i].closest('.listprojects').classList.toggle('h40');
		});
	}
	</script>
</body>

</html>