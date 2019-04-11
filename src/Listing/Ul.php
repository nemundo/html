<?php

namespace Nemundo\Html\Listing;


// UnorderdList
class Ul extends AbstractListContainer
{

    public function getHtml()
    {
        $this->tagName = 'ul';
        return parent::getHtml();
    }

}
