<?php

namespace Nemundo\Html\Typography;


use Nemundo\Html\Container\AbstractContentContainer;
use Nemundo\Core\Type\DateTime\DateTime;

class Time extends AbstractContentContainer
{

    /**
     * @var DateTime
     */
    public $dateTime;


    protected function loadContainer()
    {
        parent::loadContainer();
        $this->tagName = 'time';
        $this->dateTime = new DateTime();

    }

    public function getHtml()
    {

        $this->addAttribute('datetime', $this->dateTime->getIsoDateFormat());

        return parent::getHtml();
    }

}