<?php

namespace Economic;

class CashBookEntry_SetCreditorInvoiceNumber
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param string $value
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
     * @return \Economic\CashBookEntry_SetCreditorInvoiceNumber
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
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
     * @return \Economic\CashBookEntry_SetCreditorInvoiceNumber
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
