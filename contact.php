<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$emailfrom = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mailto = "md.rasel@platinumgw.com";
$headers = "From: ".$emailfrom;

$txt = "you have a mail form".$name.".\n\n".$message;

mail($mailto, $txt, $headers );
header("Location: index.php?mailsend");

}

?>