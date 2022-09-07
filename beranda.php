<?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}
 echo "ini berandaa";