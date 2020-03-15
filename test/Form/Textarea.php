<?php


require '../config.php';


$html = new \Nemundo\Html\Document\HtmlDocument();

$textarea = new \Nemundo\Html\Form\Textarea\Textarea($html);
$textarea->value = '';


$html->render();
