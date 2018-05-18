<pre>
<?php
  //1 read file content -> tring
  //$content = file_get_contents("./data/test.json");

  //2 json -> Array
  //$array = json_decode( $content, true );

  //var_dump( $array );
  //print $array['time'];

  // WRITE file_get_contents

  $person = [
    "name" => "Jan clod Vam ne Dam",
    "age"  => 1000,
    "alive"=> true,
    "title"=>"actor"
  ];

  // 1. Array - json
  $json = json_encode( $person );
  var_dump( $json );

  // 2 Save to file
  file_put_contents( "./data/person.json", $json );

 ?>
