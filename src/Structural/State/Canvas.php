<?php
namespace Designs\Structural\State;

/**
 * @author Igor Murujev
 */
class Canvas
{
    private Tool $currentTool;

    public function mouseUp(): void
    {
        $this->currentTool->mouseUp();
    }

    public function mouseDown(): void
    {
        $this->currentTool->mouseDown();
    }

    public function getCurrentTool(): Tool
    {
        return $this->currentTool;
    }

    public function setCurrentTool(Tool $currentTool): void
    {
        $this->currentTool = $currentTool;
    }
}
