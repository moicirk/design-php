<?php

namespace Designs\Structural\State;

class SelectionTool implements Tool
{
    public function mouseUp()
    {
        print "Deselecting tool\n";
    }

    public function mouseDown()
    {
        print "Selecting tools\n";
    }
}
