<?php
/**
 * Created by PhpStorm.
 * User: Fatemeh
 * Date: 5/30/2020
 * Time: 2:18 PM
 */

namespace App\View;


interface IView
{
    public function open() : void;
    public function close() : void;
    public function renderNewLine() : string;
    public function renderWhiteSpace() : string;
}