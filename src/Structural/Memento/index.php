<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Designs\Structural\Memento\Editor;
use Designs\Structural\Memento\History;

$editor = new Editor();
$history = new History();

$editor->setContent('A');
$history->push($editor->createState());

$editor->setContent('B');
$history->push($editor->createState());

$editor->setContent('C');
$editor->restore($history->pop());
$editor->restore($history->pop());

echo $editor->getContent();

