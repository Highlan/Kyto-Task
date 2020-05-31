<?php
/**
 * Created by PhpStorm.
 * User: Fatemeh
 * Date: 5/31/2020
 * Time: 6:06 PM
 */

namespace Tests\App\Service;


use App\Service\Drawer;
use App\View\CliViewRenderer;
use PHPUnit\Framework\TestCase;

class DrawerTest extends TestCase
{
    protected $drawer;


    public function setUp(): void
    {
        $view = new CliViewRenderer();
        $this->drawer = new Drawer($view);
    }

    public function testDrawLine()
    {
        $this->assertInstanceOf(\Iterator::class, $this->drawer->line(5, 3, 3, '+'));
    }
}