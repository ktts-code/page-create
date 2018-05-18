<?php include './header.php' ?>

<pre>
<?php
  $dir = './data';
  $f_list = array_slice(scandir( $dir ), 2);
  print_r( $f_list ) . "<br>";
 ?>
<br><br><br>
<?php
  foreach ($f_list as $key => $value) {
    $content = file_get_contents("./data/$value");
    $array = json_decode( $content, true );
    print $array['title'] . "<br>";
  }
 ?>

 <?php include './footer.php' ?>
