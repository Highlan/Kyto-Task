<?php

namespace Tests\App\Service;

use App\Service\Drawer;
use App\Shape\Diamond;
use App\View\CliViewRenderer;
use App\View\WebViewRenderer;
use \PHPUnit\Framework\TestCase;

class DiamondTest extends TestCase
{


    public function testDiamondInCliAgent()
    {
        $shape = <<<EOF
   +   
   X   
+XXXXX+
   X   
   +   

EOF;
        $this->expectOutputString($shape);
        $triangle = new Diamond(new Drawer(new CliViewRenderer()), 5);
        $triangle->render();
    }

    public function testDiamondInWebAgent()
    {
        $shape = <<<EOF
<pre>&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</pre><pre>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</pre><pre>+XXXXX+</pre><pre>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</pre><pre>&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</pre>
EOF;
        $this->expectOutputString($shape);
        $triangle = new Diamond(new Drawer(new WebViewRenderer()), 5);
        $triangle->render();
    }
}