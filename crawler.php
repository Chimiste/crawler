<?php
require_once('core/simple_html_dom.php');
require_once('core/crawler.php');
require_once ("core/MysqliDb.php");
require_once ("core/config-ini.php");
echo '========================================<br>';
echo 'Data Scrapping processing...<br>'; 
echo '========================================<br>';
$crawler = new Crawler($config = array());
//link 1
//$data = $crawler->extractBlogData($crawler->urls[0], 1, 26);
//link 2
//$data = $crawler->extractBlogData($crawler->urls[0], 2, 10);
//link 4
//$data = $crawler->extractBlogData($crawler->urls[4], 4, 1);
//link 7
//$data = $crawler->extractBlogData($crawler->urls[7], 7);
//$data = $crawler->extractBlogData($crawler->urls[4], 4, 1);
//link 8

$data = $crawler->extractBlogData($crawler->urls[8], 8, 5);
echo  $crawler->getInsertedRow();

print '<pre>';
print_r($data);
?>
