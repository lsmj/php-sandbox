<?php
require_once('vendor/autoload.php');

use lsmj\phrint;

$demo_array = [
    'one',
    'two',
    'three'
];

phrint::p($demo_array);

?>
<script id="__bs_script__">
    //<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
    //]]>
</script>
