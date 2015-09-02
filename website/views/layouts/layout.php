<!DOCTYPE html>
<html lang="en">
	<head>
	    <?php echo $this->template("includes/metadata.php")?>
	</head>
  	<body>
    	<?php echo $this->template("includes/header.php")?>
    	<?php echo $this->layout()->content; ?>
        <?php echo $this->template("includes/footer.php"); ?>
  	</body>
</html>