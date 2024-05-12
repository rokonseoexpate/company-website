<?php
$title = "Site Map";
require_once 'sitemap-generator.php';


$smg = new SitemapGenerator(include("sitemap-config.php"));
$smg->GenerateSitemap();

header("Location: sitemap.xml");
exit;
?>