<?php

namespace Nemundo\Html\Multimedia;


use Nemundo\Html\Container\AbstractHtmlContainer;



// AudioPlayer
// Nemundo\Html\Player
class Audio extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $src;

    public function getContent()
    {

        $this->tagName = 'audio';

        $this->addAttributeWithoutValue('controls');

        $source = new Source($this);
        $source->src = $this->src;
        $source->type = 'audio/mpeg';

        $this->addContent('Your browser does not support the audio element.');

        return parent::getContent();

    }

}