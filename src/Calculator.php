<?php

namespace App;

class Calculator
{
    protected $data;

    public function setProducts($products)
    {
        $this->data = $products;

        return $this;
    }

    public function group($number)
    {
        $group = [];
        $count = 0;

        foreach ($this->data as $item) {
            $group[(int) floor($count / $number)][] = $item;

            $count += 1;
        }

        $this->data = $group;

        return $this;
    }

    public function sum($field)
    {
        $sum = [];

        foreach ($this->data as $group) {
            $tmp = 0;
            foreach ($group as $item) {
                $tmp += $item[$field];
            }
            $sum[] = $tmp;
        }

        return $sum;
    }
}
