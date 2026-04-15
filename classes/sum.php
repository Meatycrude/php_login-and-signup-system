<?php

class Sum
{
    private $numbers = [];

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function calculate()
    {
        return array_sum($this->numbers);
    }

    public function reset()
    {
        $this->numbers = [];
        return $this;
    }
}