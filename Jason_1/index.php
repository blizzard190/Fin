<?php

$file = 'school3.json';
if(file_exists($file))
{
  $filedata = file_get_contents($file);
  $objson = json_decode($filedata, true);
  echo"<hr><code><pre>";
  print_r($objson);
  echo"</pre></code><hr>";
}
else echo $file . 'not exists';


echo($objson['school']['Mediacollege']['courses']['0']);
echo("<br>");
echo($objson['school']['Horizoncollege']['courses']['1']);
?>
