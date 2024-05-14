
<?php
If(isset($_FILES ["fuResume"])||(isset($tmpName))){

$FileName = $_FILES ["fuResume"]["name"];

$tmpName = $_FILES["fuResume"]["tmp_name"];


move_uploaded_file($tmpName, $fileName);

    echo(" uploaded") ;
 }
  echo(" uploaded suss") ;
 
?>
