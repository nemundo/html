<?php

namespace Nemundo\Html\Listing;


// OrderedList
class Ol extends AbstractListContainer
{

    public function getHtml()
    {
        $this->tagName = 'ol';
        return parent::getHtml();
    }

}
