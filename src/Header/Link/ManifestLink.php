<?php

namespace Nemundo\Html\Header\Link;


class ManifestLink extends AbstractLink
{

    public function getContent()
    {

        $this->rel = 'manifest';

        return parent::getContent();

    }

}