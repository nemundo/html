<?php


use Nemundo\Html\Header\Meta\Meta;

require '../config.php';


/*
$meta=new Meta();
$meta->addAttribute('lang','de');



$div = new \Nemundo\Html\Block\Div();
$div->id='div1';



$p = new \Nemundo\Html\Paragraph\Paragraph($div);
$p->content = '123';
$p->editable = true;

$h1=new \Nemundo\Html\Heading\H1($div);
$h1->content='hello';

$div2 = new \Nemundo\Content\App\Explorer\Com\Exp1Div($div);


$header = $div->getContent()->headerContent;
echo $header;
echo '-------------------------';


$html = $div->getContent()->bodyContent;
echo $html;


/*
$header = $meta->getContent()->headerContent;
echo $header;
echo '-------------------------';

$header = $meta->getContent()->bodyContent;
echo $header;


//(new \Nemundo\Core\Debug\Debug())->write($p->getContent()->bodyContent);





/*
$meta = new Meta();
$meta->addAttribute('lang','en');
(new \Nemundo\Core\Debug\Debug())->write($meta->getContent()->headerContent);
(new \Nemundo\Core\Debug\Debug())->write($meta->getContent()->bodyContent);






/*
class ShowContainer extends \Nemundo\Html\Container\AbstractHtmlContainer
{

    public function getHeader() {

        $meta = new Meta($this);
        $meta->addAttribute('show', 'one');


    }


    public function getContent()
    {

        //$this->addc

        $h1 = new \Nemundo\Html\Heading\H1($this);
        $h1->content = '123123123';

        return parent::getContent();
    }

}

(new \Nemundo\Core\Debug\Debug())->write((new ShowContainer())->getContent());
(new \Nemundo\Core\Debug\Debug())->write((new ShowContainer())->getContent());*/


$html = new \Nemundo\Html\Document\HtmlDocument();
$html->title = 'Document Example';

//new ShowContainer($html);

/*
$div = new \Nemundo\Html\Block\Div($html);
$div->content='hello world';*/

/*$description=new Meta($html);
$description->addAttribute('description','hello world');

/*
$html->addCssUrl('style.css');
$html->addJsUrl('javascript.js');*/


$h1 = new \Nemundo\Html\Heading\H1($html);
$h1->id = 'id1';
$h1->content = 'Hello World!';

$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->content = 'Lorem ..';

$meta = new Meta($html);
$meta->addAttribute('yyy', '123');


$html->render();



/*
$html = new \Nemundo\Html\Document\HtmlDocument();
$html->title = 'Jquery Example';


$scriptSrc = new \Nemundo\Html\Header\ScriptSrc($html);
$scriptSrc->src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js';


$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->id = 'test1';
$p->content = '123';
$p->visible = false;




//$script = new \Nemundo\Html\Script\Script($html);
//$script->addScript('$("#test1").text("Hello world!");');

$html->render();*/