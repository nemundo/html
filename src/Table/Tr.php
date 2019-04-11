<?php

namespace Nemundo\Html\Table;

use Nemundo\Html\Container\AbstractHtmlContainer;


class Tr extends AbstractHtmlContainer
{

    /**
     * @var bool
     */
    public $nowrap = false;

    /*function __construct(AbstractTable $table = null)
    {

        $this->tagName = 'tr';

        if ($table !== null) {
            $table->addTr($this);
        }

    }*/


    public function getHtml()
    {
        $this->tagName = 'tr';
        return parent::getHtml(); // TODO: Change the autogenerated stub
    }


}
