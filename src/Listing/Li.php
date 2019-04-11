<?php

namespace Nemundo\Html\Listing;


use Nemundo\Html\Container\AbstractContentContainer;


class Li extends AbstractContentContainer
{


    public function getHtml()
    {
        $this->tagName = 'li';
        $this->returnOneLine = true;

       /* if ($this->content !== null) {
            $this->contentContainer->addHtml($this->content);
        }*/

        return parent::getHtml();
    }

}