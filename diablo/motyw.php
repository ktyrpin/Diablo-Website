<?php
$style = isset($_COOKIE['style']) ? $_COOKIE['style'] : 'light'; 
?>
<link rel="stylesheet" id="pageStyle" href="<?php echo ($style === 'dark') ? 'dark.css' : 'light.css'; ?>">