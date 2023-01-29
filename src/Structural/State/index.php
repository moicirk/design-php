<?php
/**
 * @author Igor Murujev
 */

use Designs\Structural\State\BrushTool;
use Designs\Structural\State\Canvas;
use Designs\Structural\State\SelectionTool;

require __DIR__ . '/../../../vendor/autoload.php';

$canvas = new Canvas();
$canvas->setCurrentTool(new SelectionTool());
$canvas->mouseDown();
$canvas->mouseUp();

$canvas->setCurrentTool(new BrushTool());
$canvas->mouseDown();
$canvas->mouseUp();
