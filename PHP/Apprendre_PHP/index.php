<?php
session_start();
unset($_SESSION['role']);
$title = "Mon site";
$nav = 'index';
require 'elements/header.php';

?>


<h1>Bootstrap starter template</h1>
  <div class="starter-template">
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    
  </div>

<?php require 'elements/footer.php';?>
