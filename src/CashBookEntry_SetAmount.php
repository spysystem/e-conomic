<?php

namespace Economic;

class CashBookEntry_SetAmount
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param float $value
     */
    public function __construct($cashBookEntryHandle, $value)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      $this->value = $value;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntryHandle()
    {
      return $this->cashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @return \Economic\CashBookEntry_SetAmount
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\CashBookEntry_SetAmount
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
