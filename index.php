<?php
include("Var/Credentials.php");
include("Var/Connect.php");
include("Var/Vars.php");
include("Config/Config.php");
include("Var/Protocol.php");
include("Func/Func.php");
?>
<html>
<head>
    <title><?php echo $protocol_page_title; ?></title>
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include("Tronc/$header_version.php");
        include("Tronc/$protocol_page.php");
    ?>
</body>
</html>