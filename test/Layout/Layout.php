<?php

require '../config.php';

$html = new \Nemundo\Html\Document\HtmlDocument();

$header = new \Nemundo\Html\Layout\Header($html);

$nav = new \Nemundo\Html\Layout\Nav($html);

$main = new \Nemundo\Html\Layout\Main($html);

$section = new \Nemundo\Html\Layout\Section($html);

$article = new \Nemundo\Html\Layout\Article($html);

$footer = new \Nemundo\Html\Layout\Footer($html);


$html->render();









