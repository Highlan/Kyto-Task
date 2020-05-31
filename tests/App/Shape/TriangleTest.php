<?php

namespace Tests\App\Service;

use App\Service\Drawer;
use App\Shape\Triangle;
use App\View\CliViewRenderer;
use App\View\WebViewRenderer;
use \PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{


    public function testTriangleInCliAgent()
    {
        $shape = <<<EOF
   +   
   X   
  XXX  
 XXXXX 
XXXXXXX

EOF;
        $this->expectOutputString($shape);
        $triangle = new Triangle(new Drawer(new CliViewRenderer()), 5);
        $triangle->render();
    }

    public function testTriangleInWebAgent()
    {
        $shape = <<<EOF
<pre>&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</pre><pre>&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;&nbsp;</pre><pre>&nbsp;&nbsp;XXX&nbsp;&nbsp;</pre><pre>&nbsp;XXXXX&nbsp;</pre><pre>XXXXXXX</pre>
EOF;
        $this->expectOutputString($shape);
        $triangle = new Triangle(new Drawer(new WebViewRenderer()), 5);
        $triangle->render();
    }
}