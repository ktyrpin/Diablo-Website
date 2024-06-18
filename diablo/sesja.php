<?php
  session_start(); 
  
  if(isset($_SESSION['page_views'])){
      $_SESSION['page_views']++; 
  } else {
      $_SESSION['page_views'] = 1; 
  }
  
  if (!isset($_SESSION['session_start'])) {
      $_SESSION['session_start'] = time(); 
  }
  
  $session_start_time = date('Y-m-d H:i:s', $_SESSION['session_start']);
  
  ?>