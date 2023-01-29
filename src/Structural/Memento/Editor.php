<?php
namespace Designs\Structural\Memento;

class Editor
{
    private string $content;

    public function createState(): EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state): void
    {
        $this->content = $state->getContent();
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
