<?php
/*
 * $Id: getlicences.php 48432 2011-06-07 09:27:20Z emilieprudhomme $
 */
$doc = new DOMDocument();
$xsl = new XSLTProcessor();
$doc->load('documentationapi.xsl');
$xsl->importStyleSheet($doc);
$doc->load('getlicences.xml');
echo $xsl->transformToXML($doc);
