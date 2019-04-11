<?php

namespace Nemundo\Html\Multimedia;


use Nemundo\Html\Container\AbstractHtmlContainer;


//namespace Nemundo\Html\AudioVideo;
//namespace Nemundo\Html\Player;

// Audio
class AudioPlayer extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $src;

    public function getHtml()
    {

        $this->tagName = 'audio';

        $this->addAttributeWithoutValue('controls');

        $source = new Source($this);
        $source->src = $this->src;
        $source->type = 'audio/mpeg';

        $this->addHtml('Your browser does not support the audio element.');

        return parent::getHtml();

    }

}