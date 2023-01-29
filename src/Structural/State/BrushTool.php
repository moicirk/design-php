<?php

namespace Designs\Structural\State;

class BrushTool implements Tool
{
    public function mouseUp()
    {
        print "Draw a line\n";
    }

    public function mouseDown()
    {
        print "Brush icon\n";
    }
}
