<?php 

//random array function you can use or write your own
function randomArrayVar2($array)
{
if (!is_array($array)){
return $array;
}
return $array[array_rand($array)];
}
 
//list of tips as arary
 
$tip= array(
             "torrent"=>"Use the <a href=\"torrent.php\">Bittorrent</a> client built into Phoenix Home Server to download movies, TV shows, music and more. The downloads will happen at the times when your ISP allows unthrottled torrenting! Any downloads will be stored on the server, so you can stream them from there or copy them to your computer!",
             "fileserver"=>"You can <a href=\"fileserver.php\">store files</a> on Phoenix and access them on any PC, phone, tablet or media centre in the house, or even remotely over the internet - great for archiving photos, music and documents. Access by FTP or as a networked drive.",
             "adblock"=>"Check out the <a href=\"ad.php\">ad-block</a> function to remove annoying ads from web pages on any device. This service will intercept the ads before they even get to your PC, phone or tablet.",
             "squidproxy"=>"Phoenix caches frequently accessed web pages to <a href=\"squid.php\">turbo charge</a> your internet access speeds!",
			 "author"=>"Phoenix Home Server was written by James Hartshorn without any adult supervision!");
 
//echo tip
echo (randomArrayVar2($tip));

?>