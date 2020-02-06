<?php
  function TrimExtension() {
    $uri = $_SERVER['REQUEST_URI'];
    $ext = substr(strrchr($uri, '.'), 1);
    if ($ext == 'php') {
      $url = substr($uri, 0, strrpos($uri, '.'));
      redirect($url);
    }
  }
  function redirect($url) {
    if (!headers_sent()) {
      header('Location: '.$url);
      exit;
    } else {
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$url.'";';
      echo '</script>';
      echo '<noscript>';
      echo '<meta http-equiv="refresh" content="0; url='.$url.'" />';
      echo '</noscript>';
      exit;
    }
  }
?>
