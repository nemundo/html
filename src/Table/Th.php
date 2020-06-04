<?php

namespace Nemundo\Html\Table;

class Th extends AbstractTableCell
{

    public function __construct(Thead $parentContainer = null)
    {
        parent::__construct($parentContainer);
    }


    public function getContent()
    {

        $this->tagName = 'th';
        return parent::getContent();

    }

}