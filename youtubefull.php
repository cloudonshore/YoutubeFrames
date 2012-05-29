<?php
$url = "http://www.youtube.com/watch?v=" . $_GET['url'];
$volume = $_GET['volume'];
$endtime = 0;
$starttime = 0;
if(isset($_GET['endtime']))
{
  $endtime = $_GET['endtime'];
}
if(isset($_GET['starttime']))
{
  $starttime = $_GET['starttime'];
}

echo "<html><head><script src='jquery.js'></script><script src='../okvideo/okvideo.js'></script><script> $(function(){ $.okvideo({ source: '$url', volume: $volume, hd: false, adproof: false, endtime: $endtime, starttime: $starttime }) }); </script></head><body></body></html>";

?>