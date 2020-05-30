<?php

namespace App\Command;


use App\Service\IInput;

class GetInput implements IInput
{

    public function get()
    {
        return $this->execute();
    }

    public function execute()
    {
        while (true)
        {
            echo "Please choose height among these values (" . implode(', ', HEIGHT_ARRAY_SIZE) . ")? ";

            $input = (int)rtrim(fgets(STDIN));
            if (in_array($input, HEIGHT_ARRAY_SIZE))
            {
                return $input;
            }
            else
            {
                echo PHP_EOL . "Invalid Input. Please try again." . PHP_EOL;
            }
        }
    }
}