<?php
/* Change to your timezone */
date_default_timezone_set("America/Recife");

/* Your GitHub username */
$username = "pedrofelipe";

$url = "https://github.com/$username.atom";

function get_XML_file($url) {
	$output = file_get_contents($url);
	return $output;
}

$xml_file = get_XML_file($url);
$xml = new SimpleXMLElement($xml_file);

/* Change $i max value to show more or less results */
for($i = 0; $i < 12;) {
	$text = $xml->entry[$i]->title;
	$link = $xml->entry[$i]->link["href"];
	$name = explode("https://github.com/", $xml->entry[$i]->link["href"]);
	$published = date("d/m/Y", strtotime($xml->entry[$i]->updated));

	echo "<p class='activity'>$text > <a href='$link' target='_blank'>$name[1]</a></p>\n";
	echo $published . "\n<br /><br />";
	$i++;
}
?>