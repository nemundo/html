<?php

namespace Nemundo\Html\Document;

use Nemundo\Core\Http\Response\HttpResponse;
use Nemundo\Core\Http\Response\StatusCode;
use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Html\Header\LibraryHeader;
use Nemundo\Html\Header\Meta;
use Nemundo\Html\Header\Title;


class HtmlDocument extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $title;
    // pageTitle

    /**
     * @var StatusCode
     */
    public $statusCode = StatusCode::OK;

    /**
     * @var Head
     */
    protected $head;

    /**
     * @var Body
     */
    protected $body;


    public function __construct()
    {
        parent::__construct(null);
    }


    protected function loadContainer()
    {

        parent::loadContainer();

        $this->head = new Head();
        $this->body = new Body();

        $library = new LibraryHeader();
        $this->addHeaderContainer($library);

    }


    public function addContainer(AbstractHtmlContainer $container)
    {

        $this->body->addContainer($container);

    }


    public function addHeaderContainer($container)
    {
        $this->head->addContainer($container);
    }


    public function addCssUrl($url)
    {

        LibraryHeader::addCssUrl($url);
        return $this;

    }


    // addJavaScriptLibary
    // addJavaScript
    public function addJsUrl($url)
    {

        LibraryHeader::addJsUrl($url);
        return $this;

    }


    public function getHtml()
    {

        $title = new Title();
        $title->content = $this->title;
        $this->addHeaderContainer($title);

        $meta = new Meta();
        $meta->addAttribute('charset', 'UTF-8');
        $this->addHeaderContainer($meta);

        $this->addHtml('<!DOCTYPE html>');

        // muss vor Header ausgelesen werden
        $htmlBody = $this->body->getHtml();

        $html = new Html();

        $html->addHtml($this->head->getHtml());
        $html->addHtml($htmlBody);

        parent::addContainer($html);

        return parent::getHtml();

    }


    public function render()
    {

        $response = new HttpResponse();
        $response->content = $this->getHtml();
        $response->statusCode = $this->statusCode;
        $response->sendResponse();
    }


    /*
    public function saveFile($filename)
    {

        $file = new TextFile();
        $file->filename = $filename;
        $file->addLine($this->getHtml());


    }*/


}
