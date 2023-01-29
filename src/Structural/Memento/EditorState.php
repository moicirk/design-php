<?php
/**
 * @author Igor Murujev
 */

namespace Designs\Structural\Memento;

class EditorState
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
