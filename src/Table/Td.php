<?php

namespace Nemundo\Html\Table;


class Td extends AbstractTableCell
{

    public function getContent()
    {

        $this->tagName = 'td';
        return parent::getContent();

    }

}