<?php
  header("content-type:text/html;charset=utf-8");
  echo "first page!";
  $url = curl_init();
  curl_setopt($url,CURLOPT_URL,"http://www.google.com/finance?catid=TRBC%3A50&ei=XAopU9izAceFlQWQUg");
  
  

  curl_setopt($url,CURLOPT_RETURNTRANSFER,1);
  
  $contents = curl_exec($url);
  
  preg_match_all('%<td colspan=8[^<>]*>(.*)</td>%isU',$contents,$arr);
  $str = substr($arr[0][0],0);
  $arr2 = split(" ",$str);
  echo"<hr><br>";
  echo $arr2[8];
  curl_close($url);
?>
