<?php
$text = "  Hello PHP Developer!  ";

echo "<h3>Mandatory String Functions:</h3>";
echo "Original String: '$text'<br><br>";

// 1. Basic Functions
echo "<b>strlen():</b> " . strlen($text) . "<br>"; 
echo "<b>str_word_count():</b> " . str_word_count($text) . "<br>";
echo "<b>strrev():</b> " . strrev($text) . "<br><br>";

// 2. Case Conversion
$cleanText = trim($text);
echo "<b>strtoupper():</b> " . strtoupper($cleanText) . "<br>";
echo "<b>strtolower():</b> " . strtolower($cleanText) . "<br>";
echo "<b>ucfirst():</b> " . ucfirst("hello world") . "<br>";
echo "<b>ucwords():</b> " . ucwords("hello world") . "<br><br>";

// 3. Search & Replace
echo "<b>strpos() for 'PHP':</b> " . strpos($text, "PHP") . "<br>";
echo "<b>str_replace():</b> " . str_replace("Developer", "Expert", $text) . "<br><br>";

// 4. Substring & Trimming
echo "<b>substr():</b> " . substr($cleanText, 6, 3) . "<br>";
echo "<b>trim():</b> '" . trim($text) . "'<br>";
echo "<b>ltrim():</b> '" . ltrim($text) . "'<br>";
echo "<b>rtrim():</b> '" . rtrim($text) . "'<br><br>";

// 5. String Comparison
$str1 = "PHP"; $str2 = "php";
echo "<b>strcmp() (Case-sensitive):</b> " . strcmp($str1, $str2) . "<br>";
echo "<b>strcasecmp() (Case-insensitive):</b> " . strcasecmp($str1, $str2) . "<br><br>";

// 6. Security & Special Characters
$html = "<script>alert('Hi');</script>";
echo "<b>htmlspecialchars():</b> " . htmlspecialchars($html) . "<br>";
echo "<b>addslashes():</b> " . addslashes("It's a PHP lab") . "<br>";
?>
