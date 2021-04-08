<?php

require '../config.php';

$html = new \Nemundo\Html\Document\AbstractHtmlDocument();

$meta=new \Nemundo\Html\Header\Meta\DescriptionMeta($html);
$meta->description = 'hello world page';

$meta=new \Nemundo\Html\Header\Meta\ThemeColorMeta($html);
$meta->color = '#4285f4';

$html->render();
