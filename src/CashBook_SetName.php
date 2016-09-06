<?php

namespace Economic;

class CashBook_SetName
{

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CashBookHandle $cashBookHandle
     * @param string $value
     */
    public function __construct($cashBookHandle, $value)
    {
      $this->cashBookHandle = $cashBookHandle;
      $this->value = $value;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBookHandle()
    {
      return $this->cashBookHandle;
    }

    /**
     * @param CashBookHandle $cashBookHandle
     * @return \Economic\CashBook_SetName
     */
    public function setCashBookHandle($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\CashBook_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
