<?php

namespace Nemundo\Html\Listing;


use Nemundo\Html\Container\AbstractContentContainer;


class Li extends AbstractContentContainer
{


    public function getContent()
    {
        $this->tagName = 'li';
        $this->returnOneLine = true;

       /* if ($this->content !== null) {
            $this->contentContainer->addHtml($this->content);
        }*/

        return parent::getContent();
    }

}