<?php


require '../config.php';

/*
$textarea = new \Nemundo\Html\Form\Textarea\Textarea();
$textarea->value = '123123';
(new \Nemundo\Core\Debug\Debug())->write($textarea->getBodyContent());
*/


$html = new \Nemundo\Html\Document\HtmlDocument();

$textarea = new \Nemundo\Html\Form\Textarea\Textarea($html);
//$textarea->value = '123123';

$html->render();
