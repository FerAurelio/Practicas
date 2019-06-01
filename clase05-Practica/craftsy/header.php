<?php
$navLinks = [
  "smartphone" => "smartphone.php",
  "tablets" => "tablets.php",
  "computadoras" => "computadoras.php",

];

$access=[
  "login"=> "login.php",
  "registro"=> "register.php",
];

 ?>
 <header> <!-- Encabezadp -->
   <nav class="main-nav">
     <a href="index.html"><img class="logo" src="img/logo.png" alt="logo craftsy"></a>
     <ul class="menu">
       <?php foreach ($navLinks as $linkTxt => $linkUrl) : ?>
         <li><a href="<?php echo $linkUrl; ?>"> <?php echo $linkTxt; ?> </a></li>
       <?php endforeach; ?>
     </ul>
     <ul class="menu access">
       <?php foreach ($access as $linkAcc => $linkeado) : ?>
         <li><a href="<?php echo $linkeado; ?>"> <?php echo $linkAcc; ?> </a></li>
       <?php endforeach; ?>
     </ul>
   </nav>
 </header>
