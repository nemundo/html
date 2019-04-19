# HTML Generator

Generate Html Source Code.


## Installation 
```
composer require nemundo/html
```

### Dev Installation
```
git submodule add https://github.com/nemundo/html.git lib/html
```

```
$lib = new Library($autoload);
$lib->source = __DIR__ . '/lib/html/src/';
$lib->namespace = 'Nemundo\\Html';
```


## Example
```

$html = new \Nemundo\Html\Document\HtmlDocument();
$html->title = 'Document Example';

$html->addCssUrl('style.css');
$html->addJsUrl('javascript.js');

$h1 = new \Nemundo\Html\Heading\H1($html);
$h1->content = 'Hello World!';

$p = new \Nemundo\Html\Paragraph\Paragraph($html);
$p->content = 'Lorem ..';


$html->render();

```

