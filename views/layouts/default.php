<!DOCTYPE html>
<html lang="en">
<head>

    <?php  layout_element("meta"); ?>
	<?php  layout_element("style"); ?>
	
<?php layout_element("top_nav"); ?>

</head>

<body>


	<?php layout_element("side_nav"); ?>

<?php require_once(  DIR_MAIN_CONTENT .DS . $main_content .".php"); ?>




</body>
</html>
