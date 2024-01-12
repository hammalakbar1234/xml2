<?php
$xml = new DOMDocument();
$xml -> load("index.xml");
if($xml -> validate()){
    echo "valid";
}
else {
    echo "not valid";
}
?>