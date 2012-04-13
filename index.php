<html>
<head>
<title>Randomise your password</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<?php
header( 'Content-type: text/html; charset=utf-8' );
?>
</head>
<body>
<div id="border"></div>
<div id="content">
<h1>Randomise your password</h1>
<div id="rand">
<?php
  if(empty($_GET['error'])){
?>
<h2>What could go wrong</h2>
<?php
  }
?>
<?php
  if (isset($_GET[ 'error' ]) && $_GET[ 'error' ] == "1" ) {
?>
     <p>Whoopsie, something went wrong, your pass should have at least 6 digits</p>
<?php
  }
?>
  <form action="rand.php" method="post">
  <input type="text" name="numbers" placeholder="Digits of your pass"/>
  <input type="submit" value="Gimme some!" />
  </form>
  </div>
  </div>
  <span id="footer">
  <p>idea by <a href="http://bannik.eu">bannik</a>.the <a href="#">code</a>.Liked? Share!
 <a href="https://twitter.com/share" class="twitter-share-button" data-text="Really easy way to randomise your password! Check it out!" data-via="TheBannik">Tweet</a>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></p>
</body>
</html>