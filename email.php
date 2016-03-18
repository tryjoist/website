<?php
  if (isset($_REQUEST['email']))
  {
    $email = $_REQUEST['email'];

    mail("tryjoist@gmail.com", "Joist Signup 🎉🎊👏", $email);
  }
?>
