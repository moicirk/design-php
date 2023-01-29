<?php
/**
 * @author Igor Murujev
 */
namespace Designs\Structural\Memento;

class History
{
    private array $states = [];

    public function push(EditorState $state): void
    {
        $this->states[] = $state;
    }

    public function pop(): EditorState
    {
         return array_pop($this->states);
    }
}
