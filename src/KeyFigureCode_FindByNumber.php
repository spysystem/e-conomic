<?php

namespace Economic;

class KeyFigureCode_FindByNumber
{

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @param string $number
     */
    public function __construct($number)
    {
      $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \Economic\KeyFigureCode_FindByNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
