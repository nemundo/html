<?php

require '../config.php';


$html = new \Nemundo\Html\Document\HtmlDocument();
//$html->title = 'Document Example';

\Nemundo\Html\Header\LibraryHeader::$documentTitle = 'Document Example';






/*$title=new \Nemundo\Html\Header\Title($html);
$title->content='Document Example';*/

$h1 = new \Nemundo\Html\Heading\H1($html);
$h1->id = 'id1';
$h1->content = 'Hello World!';

$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->content = 'Lorem ..';


//(new \Nemundo\Core\Debug\Debug())->write($html->getHtml());


$p=new \Nemundo\Html\Paragraph\Paragraph();
$p->content = 'hhhhhhhhhhhhhh';
\Nemundo\Html\Header\LibraryHeader::addHeaderContainer($p);

$meta = new \Nemundo\Html\Header\Meta\Meta();
$meta->addAttribute('value','123123123123');
\Nemundo\Html\Header\LibraryHeader::addHeaderContainer($meta);


$html->render();


