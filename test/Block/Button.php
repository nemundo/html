<?php

require '../config.php';


$html = new \Nemundo\Html\Document\AbstractHtmlDocument();

$button = new \Nemundo\Html\Button\Button($html);
$button->label = 'Click me';

$html->render();

