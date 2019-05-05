<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Html\Script\JavaScript;


// LibraryHeader
class LibraryHeader extends AbstractHtmlContainer
{


    private static $jsUrlList = [];

    private static $cssUrlList = [];


    private static $jsList = [];

    private static $styleList = [];

    /**
     * @var AbstractHtmlContainer[]
     */
    private static $headerContainerList = [];

    public static function addCssUrl($url)
    {


        LibraryHeader::$cssUrlList[] = $url;
        //return $this;
    }


    // addJavaScriptLibary
    // addJavaScript
    public static function addJsUrl($url)
    {

        // Unique List


        LibraryHeader::$jsUrlList[] = $url;

        //return $this;

    }


    public static function addStyle($style)
    {

        LibraryHeader::$styleList[] = $style;
        //$ this->cssText[] = $css;
        //return $this;
    }

    public static function addJavaScript($code)
    {

        LibraryHeader::$jsList[] = $code;

        //LibraryHeader::add

        //$this->jsScript[] = $code;
        //return $this;
    }


    // addJquery
    /* public function addJqueryScript($code)
     {
         $this->jqueryScript[] = $code;
         return $this;
     }*/


    public static function addHeaderContainer(AbstractHtmlContainer $container)
    {

        LibraryHeader::$headerContainerList[] = $container;


    }


    public function getContent()
    {


        /*
        $link = new StylesheetLink();
        $link->href = $url;

        $this->addHeader($link);*/

        /*$script = new JavaScript();
      $script->src = $url;
      $this->addHeader($script);*/


        LibraryHeader::$jsUrlList = array_unique(LibraryHeader::$jsUrlList);
        foreach (LibraryHeader::$jsUrlList as $filename) {
            $js = new JavaScript($this);// JavaScriptLibrary();
            $js->src = $filename;
            //$this->addHeader($js);
        }

        LibraryHeader::$cssUrlList = array_unique(LibraryHeader::$cssUrlList);
        foreach (LibraryHeader::$cssUrlList as $filename) {
            $css = new StylesheetLink($this);  // StylesheetLibrary();
            $css->href = $filename;
            //$this->addHeader($css);
        }


        if (count(LibraryHeader::$styleList) > 0) {
            $style = new Style($this);
            foreach (LibraryHeader::$styleList as $value) {
                $style->addStyle($value);
            }
        }


        if (count(LibraryHeader::$jsList) > 0) {
            $style = new JavaScript($this);
            foreach (LibraryHeader::$jsList as $value) {
                $style->addCodeLine($value);
            }
        }


        foreach (LibraryHeader::$headerContainerList as $container) {
            $this->addContainer($container);
        }

        return parent::getContent();

    }

}