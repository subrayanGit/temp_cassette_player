<?php

  $url = 'https://www.topricecookers.org/sitemap.xml';
  $xml = simplexml_load_file($url) or die("feed not loading");
  foreach($xml as $key => $val){
	  $link = (string)$val->loc;
	  $text = explode('/',$link);
	  $urlText = explode('-',$text[3]);
	  array_shift($urlText);
	  $urlText = implode(' ',$urlText);
	  //var_dump($urlText);	
	  echo 'link '.$link. ' <br>';
	  echo 'text '.$urlText. ' <br>';
	  echo "<a href='$link'> $urlText </a>";
	  echo '<br><br><hr>';
  }	
?>