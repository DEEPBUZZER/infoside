<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Top Secret</h1>
      <form method="post" enctype="multipart/form-data">
    	<label>Wählen Sie eine Textdatei (*.txt, *.html usw.) von Ihrem Rechner aus.
      <input name="datei" type="file" size="50" accept="text/*"> 
    </label>  
  <button>… und ab geht die Post!</button>
</form>




    <a href="logout.php">Abmelden</a>
  </body>

 
</html>
