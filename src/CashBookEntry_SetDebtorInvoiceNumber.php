<?php

namespace Economic;

class CashBookEntry_SetDebtorInvoiceNumber
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param int $value
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
     * @return \Economic\CashBookEntry_SetDebtorInvoiceNumber
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Economic\CashBookEntry_SetDebtorInvoiceNumber
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
