<?php

namespace Nemundo\Html\Multimedia;


use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Html\Multimedia\Source;


// Video
class VideoPlayer extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $src;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;


    public function getHtml()
    {

        // Responsive Video
        // https://www.w3schools.com/css/css_rwd_videos.asp

        $this->tagName = 'video';

        $this->addAttribute('width', $this->width);
        $this->addAttribute('height', $this->height);

        $this->addAttributeWithoutValue('controls');

        $source = new Source($this);
        $source->src = $this->src;
        $source->type = 'video/mp4';
        // " type="video/ogg">
        //$this->addHtml('<source src="' . $this->src . '" type="video/mp4">');
        $this->addHtml('Your browser does not support the video tag.');

        return parent::getHtml();

    }

}