<?php
  $sStat = $_SESSION['sStat'];
  $sName = $_SESSION['sName'];
  $sVarStat = "";
  if($sStat == 1)
  {
    $sVarStat = "admin";
  } else {
    $sVarStat = "user";
  }
  echo $sName;
  echo ' | ';
  echo $sVarStat;
?>
