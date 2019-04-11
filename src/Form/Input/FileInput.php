<?php

namespace Nemundo\Html\Form\Input;

use Nemundo\Core\Log\LogMessage;
use Nemundo\Web\Http\FileRequest\FileRequest;
use Nemundo\Web\Http\FileRequest\FileUpload;
use Nemundo\Web\Http\FileRequest\MultiFileRequest;


class FileInput extends AbstractInput
{

    /**
     * @var bool
     */
    public $multiple = false;

    /**
     * @var AcceptFileType
     */
    public $accept;


    public $capture;

//<input type="file" accept="image/*" capture="camera" />


    public function getHtml()
    {

        //$this->tagName = 'input';
        //$this->renderClosingTag = false;

        if ($this->multiple) {
            $this->name = $this->name . '[]';
        }

        $this->addAttribute('type', 'file');
        $this->addAttribute('accept', $this->accept);

        if ($this->multiple) {
            $this->addAttributeWithoutValue('multiple');
        }

        return parent::getHtml();

    }


    /**
     * @return FileRequest
     */
    public function getFileRequest()
    {


        if ($this->multiple) {
            (new LogMessage())->writeError('Multi Upload. Please use getMultiFileRequest()');
            exit;
        }

        $fileRequest = new FileRequest($this->name);

        return $fileRequest;

    }


    /**
     * @return FileUpload[]
     */
    public function getMultiFileRequest()
    {

        if (!$this->multiple) {
            (new LogMessage())->writeError('Multi Upload. Please use getMultiFileRequest()');
        }

        $multiFileRequest = new MultiFileRequest($this->name);

        return $multiFileRequest->getUploadFile();

    }


    public function getValue()
    {
        (new LogMessage())->writeError('Function getValue() is not allowed in FileInput');
    }

}
