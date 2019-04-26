<?php

namespace Nemundo\Html\Document;

use Nemundo\Com\JavaScript\Code\AbstractJavaScriptCode;
use Nemundo\Core\Http\Response\HttpResponse;
use Nemundo\Core\Http\Response\StatusCode;
use Nemundo\Html\Container\AbstractContainer;
use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Html\Header\AbstractHeaderHtmlContainer;
use Nemundo\Html\Header\LibraryHeader;
use Nemundo\Html\Header\Meta;
use Nemundo\Html\Header\Title;
use Nemundo\Html\Script\JavaScript;


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

        $this->head = new Head();
        $this->body = new Body();
        $this->script = new JavaScript();

        $library = new LibraryHeader();
        $this->addHeaderContainer($library);

    }


    public function addContainer(AbstractContainer $container)
    {

        $default = true;

        if ($container->isObjectOfClass(AbstractHeaderHtmlContainer::class)) {
            $this->addHeaderContainer($container);
        $default=false;
        }

        if ($container->isObjectOfClass(AbstractJavaScriptCode::class)) {
            $this->script->addContainer($container);
            $default=false;
        }

        if ($default) {
        $this->body->addContainer($container);
        }



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

        // check ob vorhanden
        if ($this->script->hasChild()) {
        $this->head->addContainer($this->script);
        }

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
