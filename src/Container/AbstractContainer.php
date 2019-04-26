<?php

namespace Nemundo\Html\Container;

use Nemundo\Core\Base\AbstractBaseClass;


abstract class AbstractContainer extends AbstractBaseClass
{

    /**
     * @var AbstractContainer[]
     */
    protected $containerList = [];

    /**
     * @var string
     */
    private $html = '';


    public function __construct(AbstractContainer $parentContainer = null)
    {

        if ($parentContainer !== null) {
            $parentContainer->addContainer($this);
        }

        $this->loadContainer();

    }


    protected function loadContainer()
    {

    }


    // protected
    // für Html public
    // für Code
    public function addContainer(AbstractContainer $container)
    {

        $this->containerList[] = $container;
        return $this;

    }


    public function getContainerList($recursive = false)
    {

        /** @var AbstractContainer[] $containerList */
        $containerList = [];

        foreach ($this->containerList as $container) {

            $containerList[] = $container;

            if ($recursive) {
                $containerList = array_merge($containerList, $container->getContainerList(true));
            }

        }

        return $containerList;

    }


    public function hasChild()
    {

        $value = false;
        if (sizeof($this->containerList) > 0) {
            $value = true;
        }

        return $value;


    }


    // getContent
    public function getHtml()
    {

        $html = '';


        $html .= $this->html;

        foreach ($this->getContainerList() as $com) {
            $html .= $com->getHtml();
        }


        $html .= PHP_EOL;

        //$html = trim($html);

        return $html;

    }


    protected function addHtml($html)
    {

        /*
        $text = $html;
        if (is_array($html)) {
            $text = (new Translation())->getText($html);
        }*/

        $this->html .= $html . PHP_EOL;
        return $this;

    }

}