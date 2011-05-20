<?php  
	if (empty($_POST)){
		header("Location: index.php");
	} else {
		include "classes/Localization.inc.php";
		$loc = new Localization($_POST['lang']);
		if ($_POST['name'] != null) {
			$tester = $_POST['name'];
		}
		else {
			$tester = $loc->Translate("CARD_DEFAULT_NAME");
		}
	}
?>
<html>
	<head>
		<title><?php echo $loc->Translate("CARD_PAGE_TITLE"); ?> </title>
		<link rel="stylesheet" type="text/css" href="styles/style.css"> 
	</head>
	<body>
		<table width="500px" align="center" border="1">
		<?php
			$words = $loc->Translate("WORDS_ARRAY"); 
			shuffle($words);
			$random = array_rand($words, 30);
			shuffle($random);
			echo "<tr>";
			for($i=0;$i<25;$i++){
					if(($i % 5)==0) echo "</tr><tr>";
					if($i==12)
					{
						echo "<td width='100px' height='100px' align='center'><img src='images/bug.png' width='70px' height='70px' align='center'></td>";
					}else{
						echo "<td width='100px' height='100px' align='center'>" . $words[$random[$i]] . "</td>";
					}
				}
				echo "</tr>";
			?>

		</table>
		<center>
			<br>
			<?php echo $loc->Translate("CARD_WELCOME_MSG_1") . "<b> " . $tester . "</b>! " . $loc->Translate("CARD_WELCOME_MSG_2") ?>
		</center>
	</body>
</html>
