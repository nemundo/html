<?php

require '../config.php';


$html = new \Nemundo\Html\Document\HtmlDocument();


$input = new \Nemundo\Html\Form\Input\TextInput($html);
$input->value = '123123';
$input->placeholder = 'search';



$html->render();

