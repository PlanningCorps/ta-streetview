<?php

//include "konnect.php";

// check if we got a posted value

if (isset($_GET[email])) {

  // clean it
  //$email = mysql_real_escape_string($_GET[email]);
  $email = $_GET[email];
  
  mail('hebbert@gmail.com', '56forward contact', $email);

  // store it
  //storeemail($email);
  
  echo "Thanks, we got your e-mail!";

}

?>