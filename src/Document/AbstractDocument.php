<?php

namespace Nemundo\Html\Document;

use Nemundo\Com\JavaScript\Code\AbstractJavaScriptCode;
use Nemundo\Core\Http\Response\HttpResponse;
use Nemundo\Core\Http\Response\StatusCode;
use Nemundo\Dev\App\Factory\DefaultTemplateFactory;
use Nemundo\Html\Container\AbstractContainer;
use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Html\Header\AbstractHeaderHtmlContainer;
use Nemundo\Html\Header\LibraryHeader;
use Nemundo\Html\Header\Meta;
use Nemundo\Html\Header\Title;
use Nemundo\Html\Script\JavaScript;


abstract class AbstractDocument extends AbstractContainer  // AbstractHtmlContainer
{

    abstract public function render();

    public function __construct()
    {
        parent::__construct(null);
    }







    /*
    public function render()
    {


        $page=(new DefaultTemplateFactory())->getDefaultTemplate();
        $page->addContainer($this);



        $response = new HttpResponse();
        $response->content = $page->getContent();  // $this->getContent();
        //$response->statusCode = $this->statusCode;
        $response->sendResponse();

    }*/

}
