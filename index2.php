<?php
  header("content-type:text/html;charset=utf-8");
  echo "second page!";
  $url = curl_init();
  curl_setopt($url,CURLOPT_URL,"http://www.google.com/finance?catid=TRBC%3A50&ei=RKApU7D-JMXAkAWlmQE");
  curl_setopt($url,CURLOPT_RETURNTRANSFER,1);
  
  $contents = curl_exec($url);
  preg_match_all('/<table[^>]*?class="topmovers"[^>]*>[\s\S]*?<\/table>/i',$contents,$arr);
  echo"<hr><br>";
  echo $arr[0][0];
  curl_close($url);

?>