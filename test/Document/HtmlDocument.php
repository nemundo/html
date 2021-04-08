<?php

require __DIR__.'/../config.php';


$html = new \Nemundo\Html\Document\AbstractHtmlDocument();
//$html->title = 'Document Example';

//$html->html->addAttribute('lang','de');


//\Nemundo\Html\Header\LibraryHeader::$documentTitle = 'Document Example';


/*$title=new \Nemundo\Html\Header\Title($html);
$title->content='Document Example';*/

$h1 = new \Nemundo\Html\Heading\H1($html);
$h1->id = 'id1';
$h1->content = 'Hello World!';

$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->content = 'Lorem ..';

$p=new \Nemundo\Html\Paragraph\Paragraph($html);
$p->content = 'hhhhhhhhhhhhhh';
//\Nemundo\Html\Header\LibraryHeader::addHeaderContainer($p);

//$meta = new \Nemundo\Html\Header\Meta\Meta();
//$meta->addAttribute('value','123123123123');
//\Nemundo\Html\Header\LibraryHeader::addHeaderContainer($meta);


$meta = new \Nemundo\Html\Header\Meta\ThemeColorMeta($html);
$meta->color='#C05B45';

$title=new \Nemundo\Html\Header\Title($html);
$title->content='hello world';

$html->render();


$file=new \Nemundo\Core\TextFile\Writer\TextFileWriter('c:/test/htmldocument.html');
$file->overwriteExistingFile=true;
$file->addLine($html->getHtml());
$file->saveFile();




