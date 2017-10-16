<?php

session_start();

require_once "../../../dompdf/dompdf_config.inc.php";
require_once "../../../dompdf/www/functions.inc.php";

function li_arrow() {
  return '<li style="list-style-image: url(\'images/arrow_0' . rand(1,6) . '.gif\');">';  
}

function li_star() {
  return '<li style="list-style-image: url(\'images/star_0' . rand(1,5) . '.gif\');">';  
}

auth_check();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>dompdf - The PHP 5 HTML to PDF Converter</title>
  <link rel="stylesheet" href="../../../dompdf/www/style.css" type="text/css"/>
  <link rel="SHORTCUT ICON" href="../../../dompdf/www/images/favicon.ico"/>
  <script type="text/javascript" src="../../../dompdf/www/jquery-1.4.2.js"></script>
  
  <?php if (isset($_SESSION["auth_message"])) { ?>
    <script type="text/javascript">
      alert("<?php echo $_SESSION["auth_message"]; ?>");
    </script>
  <?php } ?>
</head>

<body>

<div id="header" class="bar">
  <a href="../../../dompdf/www/index.php"><img id="logo" src="../../../dompdf/www/images/title.gif" alt="dompdf"/></a>
  <a href="http://www.dompdf.com/" target="_blank">www.dompdf.com</a>
  — 
  Send bug reports to <a href="http://code.google.com/p/dompdf/issues/list">the bug tracker</a> 
  & support questions to <a href="http://groups.google.com/group/dompdf">Google Groups</a>.
</div>

<div id="left_col">
  <ul>
    <li style="list-style-image: url('../../../dompdf/www/images/star_02.gif');"><a href="../../../dompdf/www/index.php">Overview</a></li>
    <li style="list-style-image: url('../../../dompdf/www/images/star_02.gif');"><a href="../../../dompdf/www/examples.php">Examples</a></li>
    <li style="list-style-image: url('../../../dompdf/www/images/star_02.gif');"><a href="../../../dompdf/www/demo.php">Demo</a></li>
    <li style="list-style-image: url('../../../dompdf/www/images/star_02.gif');"><a href="../../../dompdf/www/setup.php">Setup / Config</a></li>
    <li style="list-style-image: url('../../../dompdf/www/images/star_02.gif');"><a href="../../../dompdf/www/fonts.php">Fonts</a></li>
  </ul>
</div>

<div id="content">