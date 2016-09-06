<?php

namespace Economic;

class CurrencyHandle
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Economic\CurrencyHandle
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
