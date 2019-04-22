<?php

require '../vendor/autoload.php';

$html = new \Nemundo\Html\Document\HtmlDocument();
$html->title = 'Document Example';

$html->addCssUrl('style.css');
$html->addJsUrl('javascript.js');

$h1 = new \Nemundo\Html\Heading\H1($html);
$h1->content = 'Hello World!';

$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->content = 'Lorem ..';



$html->render();