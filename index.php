<?php 
require_once "classes/Localization.inc.php";

if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}
else {
	$lang = "en_US";
}
	$loc = new Localization($lang);
?>
<html>
	<head>
		<title><?php echo $loc->Translate("INDEX_PAGE_TITLE"); ?> </title>
		<link rel="stylesheet" type="text/css" href="styles/style.css"> 
	</head>
	<body>
		<div id="language">
			<a href="index.php?lang=pt_BR"><img src="images/br.gif"></a>
			<a href="index.php?lang=en_US"><img src="images/us.gif"></a>
		</div>
		<a href="https://github.com/knorrium/bingo"><img style="position: absolute; top: 0; right: 0; border: 0;" src="images/github.png" alt="Fork me on GitHub"></a>
		<center>
			<?php echo $loc->Translate("INDEX_WELCOME_MSG_1"); ?>
			<br /><br />
			<?php echo $loc->Translate("INDEX_WELCOME_MSG_2"); ?>
			<br /><br />
			<form action="card.php" method="POST"> 
				<input type="text" id="name" name="name" maxlength="100" />
				<input type="hidden" id="lang" name="lang" value="<?php echo $lang; ?>">
				<input type="submit" value="<?php echo $loc->Translate("INDEX_SUBMIT_BUTTON"); ?>">
			</form>
			<?php echo $loc->Translate("INDEX_AUTHORS"); ?>
			<br />
			<?php echo $loc->Translate("INDEX_DISCLAIMER"); ?>
			<br />
			<?php echo $loc->Translate("INDEX_FOOTER_MSG"); ?>
		</center>
	</body>
</html
