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
    private $content = '';


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


    public function addContainer(AbstractContainer $container)
    {

        $this->containerList[] = $container;
        return $this;

    }


    public function addContainerAtFirst(AbstractContainer $container)
    {

        array_unshift($this->containerList, $container);
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


    public function getContent()
    {


        $item = new HtmlContainerItem();

        $item->bodyContent .= $this->content . PHP_EOL;

        foreach ($this->getContainerList() as $com) {

            //$html .= $com->getContent();

            //(new Debug())->write($com->getClassName());

            $childItem = $com->getContent();
            $item->headerContent .= $childItem->headerContent . PHP_EOL;
            $item->bodyContent .= $childItem->bodyContent . PHP_EOL;

            /*
            if ($com->isObjectOfClass(AbstractHeaderHtmlContainer::class)) {

                //(new Debug())->write($com->getContent());
                //$this->header .= $com->getContent();
                //LibraryHeader::addHeaderContainer($com);
                $item->headerContent.= $com->getContent()->headerContent;

            } else {


                $item->bodyContent.= $com->getContent()->bodyContent;
                //$html .= $com->getContent();

            }*/

        }

        //$html .= PHP_EOL;
        $item->bodyContent .= PHP_EOL;

        return $item;


        /*
        $html = '';
        $html .= $this->content;
        foreach ($this->getContainerList() as $com) {

            if ($com->isObjectOfClass(AbstractHeaderHtmlContainer::class)) {

                (new Debug())->write($com->getContent());
                exit;

            } else {

            $html .= $com->getContent();

            }


        }
        $html .= PHP_EOL;

        return $html;*/

    }


    protected function addContent($content)
    {

        $this->content .= $content . PHP_EOL;
        return $this;

    }


    public function getHeader()
    {

        $header = '';
        return $header;


        /* $html = '';
         $html .= $this->content;
         foreach ($this->getContainerList() as $com) {
             $html .= $com->getContent();
         }
         $html .= PHP_EOL;

         return $html;*/


    }


}