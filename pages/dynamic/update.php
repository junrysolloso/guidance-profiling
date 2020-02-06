<?php
  include_once '../../pages/static/config.php';
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['UserName'])) {
      $id = htmlspecialchars(trim($_GET['id']));
      $name = htmlspecialchars(trim($_GET['UserName']));
      $pass = md5(htmlspecialchars(trim($_GET['UserPass'])));
      $st = $conn->prepare("UPDATE `user_info` SET `UserName` = ?, `UserPass` = ? WHERE `UserId` = ?");
      if ($st->bind_param("ssi", $name, $pass, $id)) {
        if ($st->execute()) {
          echo 1;
        }
      }
    } elseif (isset($_GET['ProgramName'])) {
      $id = htmlspecialchars(trim($_GET['id']));
      $name = htmlspecialchars(trim($_GET['ProgramName']));
      $desc = htmlspecialchars(trim($_GET['ProgramDesc']));
      $st = $conn->prepare("UPDATE `program_info` SET `ProgramName` = ?, `ProgramDesc` = ? WHERE `ProgramNo` = ?");
      if ($st->bind_param("ssi", $name, $desc, $id)) {
        if ($st->execute()) {
          echo 1;
        }
      }
    } elseif (isset($_GET['dProgramNo'])) {
      $id = htmlspecialchars(trim($_GET['dProgramNo']));
      $st = $conn->prepare("DELETE FROM `program_info` WHERE `ProgramNo` = ?");
      if ($st->bind_param("i", $id)) {
        if ($st->execute()) {
          echo 1;
        }
      }
    } elseif (isset($_GET['dUserId'])) {
      $id = htmlspecialchars(trim($_GET['dUserId']));
      $st = $conn->prepare("DELETE FROM `user_info` WHERE `UserId` = ?");
      if ($st->bind_param("i", $id)) {
        if ($st->execute()) {
          echo 1;
        }
      }
    }
  }
?>
