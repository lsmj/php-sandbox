<?php
require_once './vendor/autoload.php';

use lsmj\phrint;

$demoArray = [
    'one',
    'two',
    'three',
];

phrint::p($demoArray);

?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.14'><\/script>".replace("HOST", location.hostname));
//]]></script>
