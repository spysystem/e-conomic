<?php

namespace Economic;

class CurrencyData
{

    /**
     * @var CurrencyHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CurrencyHandle $Handle
     * @return \Economic\CurrencyData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
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
     * @return \Economic\CurrencyData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
