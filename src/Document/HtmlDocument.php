<?php

namespace Nemundo\Html\Document;

use Nemundo\Com\JavaScript\Code\AbstractJavaScriptCode;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Response\ContentType;
use Nemundo\Core\Http\Response\HttpResponse;
use Nemundo\Core\Http\Response\StatusCode;
use Nemundo\Html\Container\AbstractContainer;
use Nemundo\Html\Header\AbstractHeaderHtmlContainer;
use Nemundo\Html\Header\LibraryHeader;

use Nemundo\Html\Header\Meta\Meta;
use Nemundo\Html\Header\Title;
use Nemundo\Html\Script\JavaScript;


class HtmlDocument extends AbstractDocument
{

    /**
     * @var string
     */
    public $title;
    // pageTitle
    // headerTitle

    /**
     * @var StatusCode
     */
    //public $statusCode = StatusCode::OK;

    /**
     * @var Head
     */
    //protected $head;

    /**
     * @var Body
     */
    //protected $body;

    /**
     * @var JavaScript
     */
    protected $script;


    public function __construct()
    {
        parent::__construct(null);
    }


    protected function loadContainer()
    {

        parent::loadContainer();

        //$this->head = new Head();
        //$this->body = new Body();
        //$this->script = new JavaScript();

        //$library = new LibraryHeader();
        //$this->addHeaderContainer($library);

        //$library = new LibraryHeader($this);

    }


    /*
    public function addContainer(AbstractContainer $container)
    {

        $default = true;

        if ($container->isObjectOfClass(AbstractHeaderHtmlContainer::class)) {
            $this->addHeaderContainer($container);
            $default = false;
        }

        if ($container->isObjectOfClass(AbstractJavaScriptCode::class)) {
            $this->script->addContainer($container);
            $default = false;
        }

        if ($default) {
            $this->body->addContainer($container);
        }

    }


    public function addHeaderContainer($container)
    {
        $this->head->addContainer($container);
    }*/


    public function addCssUrl($url)
    {

        LibraryHeader::addCssUrl($url);
        return $this;

    }


    public function addJsUrl($url)
    {

        LibraryHeader::addJsUrl($url);
        return $this;

    }




    public function getHtml()
    {


       /* $title = new Title($this);
        $title->content = $this->title;
        //$this->addHeaderContainer($title);

        $meta = new Meta($this);
        $meta->addAttribute('charset', 'UTF-8');*/



        //$this->addHeaderContainer($meta);

       // $this->addContent('<!DOCTYPE html>');*/

        // check ob vorhanden
        /*if ($this->script->hasChild()) {
            $this->head->addContainer($this->script);
        }*/




        // muss vor Header ausgelesen werden
        //$htmlBody = $this->body->getContent()->bodyContent;

        $html = new Html();


        $title = new Title($html);
        $title->content = $this->title;
        //$this->addHeaderContainer($title);


        $meta = new Meta($html);
        $meta->addAttribute('charset', 'UTF-8');
        //$this->addHeaderContainer($meta);

        //$html->addContent('<!DOCTYPE html>');

        /*
        foreach ((new LibraryHeader())->getHeaderContainerList() as $com) {
            //(new Debug())->write($com->getClassName());
            $this->head->addContainer($com);
        }*/

        //(new Debug())->write($this->head->getContent());




        //$htmlItem  = parent::getContent();
        $htmlItem  =$this->getContent();

        //(new Debug())->write($htmlItem->headerContent);


        $library = new LibraryHeader();



        $head = new Head($html);
        $head->content = $library->getContent()->headerContent. $htmlItem->headerContent;

        $body = new Body($html);
        $body->content = $htmlItem->bodyContent;


        //$html->addContent($this->head->getContent()->headerContent);

        //$html->addContent($head->getContent()->bodyContent);
        //$html->addContent($body->getContent()->bodyContent);

        //parent::addContainer($html);




        return '<!DOCTYPE html>'.PHP_EOL.$html->getContent()->bodyContent;

        //return parent::getContent();

    }


    public function render()
    {

        $response = new HttpResponse();
        $response->content = $this->getHtml();  // $this->getContent()->bodyContent;
        $response->statusCode = $this->statusCode;
        $response->contentType = ContentType::HTML;
        $response->sendResponse();

    }

}
