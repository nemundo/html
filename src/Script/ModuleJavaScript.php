<?php

namespace Nemundo\Html\Script;

use Nemundo\Html\Script\JavaScript;
use Nemundo\Html\Script\JavaScriptType;

class ModuleJavaScript extends AbstractJavaScript
{


    public $src;

    public function getContent()
    {

        $this->type = 'module';
        $this->defer = true;

        return parent::getContent();

    }

}