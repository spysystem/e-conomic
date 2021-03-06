<?php

namespace Economic;

class KeyFigureCodeHandle
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Economic\KeyFigureCodeHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
