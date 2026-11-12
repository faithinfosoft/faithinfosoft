<?php

$html = file_get_contents('http://localhost:8080/');

$text = strip_tags($html);

$htmlSize = strlen($html);
$textSize = strlen(trim(preg_replace('/\s+/', ' ', $text)));

$ratio = ($textSize / $htmlSize) * 100;

echo "<h2>Code to Text Ratio Report</h2>";

echo "HTML Size: " . $htmlSize . " bytes<br>";
echo "Text Size: " . $textSize . " bytes<br>";
echo "Ratio: " . round($ratio, 2) . "%";

?>