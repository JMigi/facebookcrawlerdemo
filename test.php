<?php

$start = "file:///C:/Users/Miguel/Documents/GitHub/jmigi.github.io/index.html";

function test($url){
    $doc = new DOMDocument();
    $doc->loadHTML(file_get_contents($url));
    
    $linklist = $doc->getElementsByTagName("a");
    
    foreach($linklist as $link){
        $l = $link->getAttribute("href")."\n"; 
        
        if(substr($l, 0, 1) == "/" && substr($l, 0, 2)!= "//"){
            $l = "https://".$l;
        }
        echo $l."\n";
    }
}
test($start);
?>