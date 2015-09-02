<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->template("includes/mobile/metadata.php")?>
		<?php echo $this->template("includes/mobile/header.php")?>
	</head>
  	<body>
		<?php echo $this->template("includes/mobile/header_account.php")?>
		<?php echo $this->layout()->content; ?>
		<?php echo $this->template("includes/mobile/footer.php"); ?>
  	</body>
</html>