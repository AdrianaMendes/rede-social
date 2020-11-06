<?php
$connect = new PDO("mysql:host=localhost;dbname=redesocial", "root", "");

$query = "SELECT * FROM postagens, usuarios WHERE postagens.autor = usuarios.email";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

header("Content-Type: text/xml;charset=iso-8859-1");

$base_url = "http://localhost/redesocial.php/";

echo "<?xml version='1.0' encoding='UTF-8' ?>" . PHP_EOL;
echo "<rss version='2.0'>" . PHP_EOL;
echo "<channel>" . PHP_EOL;
echo "<title>Feed Title | RSS</title>" . PHP_EOL;
echo "<link>" . $base_url . "index.php</link>" . PHP_EOL;
echo "<description>Cloud RSS</description>" . PHP_EOL;
echo "<language>en-us</language>" . PHP_EOL;

foreach ($result as $row) {
    $publish_Date = date("D, d M Y H:i:s", strtotime($row["datetime"]));

    echo "<item xmlns:dc='ns:1'>".PHP_EOL;
    echo "<title>".$row["titulo"]."</title>".PHP_EOL;
    echo "<link>".$base_url."blog/".$row["post_url"]."/</link>".PHP_EOL;
    echo "<guid>".md5($row["id"])."</guid>".PHP_EOL;
    echo "<pubDate>".$publish_Date."</pubDate>".PHP_EOL;
    echo "<dc:creator>".$row["autor"]."</dc:creator>".PHP_EOL;
    echo "<description><![CDATA[".substr($row["descricao"], 0, 300)."]]></description>".PHP_EOL;
    echo "</item>".PHP_EOL;
}
echo '</channel>'.PHP_EOL;
echo '</rss>'.PHP_EOL;