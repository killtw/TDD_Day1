<?php

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $products = [];

    protected $calculator;

    public function setUp()
    {
        $this->products = [
            ['Id' => 1, 'Cost' => 1, 'Revenue' => 11, 'SellPrice' => 21],
            ['Id' => 2, 'Cost' => 2, 'Revenue' => 12, 'SellPrice' => 22],
            ['Id' => 3, 'Cost' => 3, 'Revenue' => 13, 'SellPrice' => 23],
            ['Id' => 4, 'Cost' => 4, 'Revenue' => 14, 'SellPrice' => 24],
            ['Id' => 5, 'Cost' => 5, 'Revenue' => 15, 'SellPrice' => 25],
            ['Id' => 6, 'Cost' => 6, 'Revenue' => 16, 'SellPrice' => 26],
            ['Id' => 7, 'Cost' => 7, 'Revenue' => 17, 'SellPrice' => 27],
            ['Id' => 8, 'Cost' => 8, 'Revenue' => 18, 'SellPrice' => 28],
            ['Id' => 9, 'Cost' => 9, 'Revenue' => 19, 'SellPrice' => 29],
            ['Id' => 10, 'Cost' => 10, 'Revenue' => 20, 'SellPrice' => 30],
            ['Id' => 11, 'Cost' => 11, 'Revenue' => 21, 'SellPrice' => 31],
        ];

        $this->calculator = new \App\Calculator();
    }

    public function tearDown()
    {
        $this->products = [];
    }

    /** @test */
    public function it_should_set_3_items_as_a_group_and_sum_Cost()
    {
        $expected = [6, 15, 24, 21];

        $group = 3;
        $field = 'Cost';

        $actual = $this->calculator->setProducts($this->products)->group($group)->sum($field);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function it_should_set_4_items_as_a_group_and_sum_Revenue()
    {
        $expected = [50, 66, 60];

        $group = 4;
        $field = 'Revenue';

        $actual = $this->calculator->setProducts($this->products)->group($group)->sum($field);

        $this->assertEquals($expected, $actual);
    }
}
