<?php 
function anti_Injeksi($text){
	global $koneksi;
	$safeText=$koneksi->real_escape_string(stripslashes(strip_tags(htmlspecialchars($text,ENT_QUOTES))));
	return $safeText;
}
 ?>