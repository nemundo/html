<?php

namespace Nemundo\Html\Document;

use Nemundo\Core\Http\Response\ContentType;
use Nemundo\Core\Http\Response\HttpResponse;
use Nemundo\Html\Script\JavaScript;


abstract class HtmlDocument extends AbstractDocument
{



    /**
     * @var Html
     */
    protected $html;

    /**
     * @var Head
     */
    protected $head;

    /**
     * @var
     */
    protected $body;

    public function __construct()
    {
        parent::__construct(null);
    }


    /* public function addCssUrl($url)
     {

         LibraryHeader::addCssUrl($url);
         return $this;

     }


     public function addJsUrl($url)
     {

         LibraryHeader::addJsUrl($url);
         return $this;

     }*/


    protected function loadContainer()
    {

        parent::loadContainer();
        $this->html = new Html();
        $this->head = new Head($this->html);
        $this->body = new Body($this->html);

    }


    public function getContent()
    {

        /*$title = new Title($this);
        $title->content = $this->title;*/

        /*$meta = new Meta($this);
        $meta->addAttribute('charset', 'UTF-8');*/

        return parent::getContent();

    }


    public function getHtml()
    {

        //$html = new Html();

        $htmlItem = $this->getContent();

        /*$library = new LibraryHeader();

        $title = new Title($library);
        $title->content = LibraryHeader::$documentTitle;  // $this->title;*/


        //$head = new Head($this->html);
        //$head->addContent($library->getContent()->headerContent . $htmlItem->headerContent);
        $this->head->addContent($htmlItem->headerContent);

        //$body = new Body($this->html);
        $this->body->addContent(PHP_EOL . $htmlItem->bodyContent);

        $html = '<!DOCTYPE html>' . PHP_EOL . $this->html->getBodyContent();

        return $html;

    }


    public function render()
    {

        $response = new HttpResponse();
        $response->content = $this->getHtml();
        $response->statusCode = $this->statusCode;
        $response->contentType = ContentType::HTML;
        $response->sendResponse();

    }


    // writeFile($filename)


}
