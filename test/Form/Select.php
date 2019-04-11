<?php

require '../../config.php';


$html = new \Nemundo\Html\Document\HtmlDocument();


$select = new \Nemundo\Html\Form\Select\Select($html);

$optgroup = new \Nemundo\Html\Form\Select\Optgroup($select);
$optgroup->label = 'Optgroup1';

$option = new \Nemundo\Html\Form\Select\Option($select);
$option->value = 1;
$option->label = 'Option 1';

$option = new \Nemundo\Html\Form\Select\Option($select);
$option->value = 1;
$option->label = 'Option 2';
$option->disabled = true;

$optgroup = new \Nemundo\Html\Form\Select\Optgroup($select);
$optgroup->label = 'Optgroup2';
$optgroup->disabled = true;

$option = new \Nemundo\Html\Form\Select\Option($select);
$option->value = 3;
$option->label = 'Option 3';

$option = new \Nemundo\Html\Form\Select\Option($select);
$option->value = 4;
$option->label = 'Option 4';


$html->render();

