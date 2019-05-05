<?php

namespace Nemundo\Html\Listing;


// OrderedList
class Ol extends AbstractListContainer
{

    public function getContent()
    {
        $this->tagName = 'ol';
        return parent::getContent();
    }

}
