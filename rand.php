<html>
<head>
<title>Randomise your password</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
if (isset($_POST ['numbers']) && $_POST ['numbers'] >6){
    $num = $_POST ['numbers'];
?>
<div id="border"></div>
<div id="content">
<h1>Randomise your password</h1>
<div id="rand">
<h2>Here is your password*</h2>
<p id="pass">
<?php
for ( $i = 0; $i < $num; ++$i ) {
if ( rand( 0, 1 ) ) {
$chr = chr( rand( 97, 122 ) );
}
else{
$chr = chr( rand( 33, 64 ) );
}
?>
<?php
echo $chr;
}
?>
</p>
<p id="warning">*Warning! No spacing in passwords!</p>
</div>
</div>
  <span id="footer">
  <p>idea by <a href="http://bannik.eu">bannik</a>.the <a href="#">code</a>.Liked? Share!
 <a href="https://twitter.com/share" class="twitter-share-button" data-text="Really easy way to randomise your password! Check it out!" data-via="TheBannik">Tweet</a>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
 </span>
<?php
}
else {
    header ( 'Location: index.php?error=1' );
}
?>
</body>
</html>