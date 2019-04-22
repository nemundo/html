<?php


require '../config.php';


$html = new \Nemundo\Html\Document\HtmlDocument();
$html->title = 'Jquery Example';


$scriptSrc = new \Nemundo\Html\Header\ScriptSrc($html);
$scriptSrc->src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js';


$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->id = 'test1';
$p->content = '123';
$p->visible = false;




//$script = new \Nemundo\Html\Script\Script($html);
//$script->addScript('$("#test1").text("Hello world!");');

$html->render();