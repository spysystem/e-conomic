<?php

namespace Economic;

class Unit_FindByNumberList
{

    /**
     * @var ArrayOfInt $numbers
     */
    protected $numbers = null;

    /**
     * @param ArrayOfInt $numbers
     */
    public function __construct($numbers)
    {
      $this->numbers = $numbers;
    }

    /**
     * @return ArrayOfInt
     */
    public function getNumbers()
    {
      return $this->numbers;
    }

    /**
     * @param ArrayOfInt $numbers
     * @return \Economic\Unit_FindByNumberList
     */
    public function setNumbers($numbers)
    {
      $this->numbers = $numbers;
      return $this;
    }

}
