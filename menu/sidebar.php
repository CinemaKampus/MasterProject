<?php

      if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
        include('admin.php');
      }
      else if(isset($_SESSION['role']) && $_SESSION['role']=='uploader'){
        include('uploader.php');
      }
      else if(isset($_SESSION['role']) && $_SESSION['role']=='viewer'){
        include('viewer.php');
      }
      else{
        include('guest.php');
      }
?>