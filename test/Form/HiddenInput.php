<?php

require '../../config.php';


$html = new \Nemundo\Html\Document\HtmlDocument();

$hidden = new \Nemundo\Html\Form\Input\HiddenInput($html);
$hidden->value = '123';

$hidden = new \Nemundo\Com\FormBuilder\Item\HiddenFormItem($html);
$hidden->name = 'hidden';
$hidden->value = 'on';

$html->render();

