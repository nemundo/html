<?phprequire '../config.php';$html = new \Nemundo\Html\Document\HtmlDocument();$textarea = new \Nemundo\Html\Form\Textarea\Textarea($html);$textarea->cols = 10;$textarea->rows = 10;$textarea->value = 'test';$html->render();