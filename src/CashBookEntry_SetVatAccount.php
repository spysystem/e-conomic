<?php

namespace Economic;

class CashBookEntry_SetVatAccount
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var VatAccountHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param VatAccountHandle $valueHandle
     */
    public function __construct($cashBookEntryHandle, $valueHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\CashBookEntry_SetVatAccount
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return VatAccountHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param VatAccountHandle $valueHandle
     * @return \Economic\CashBookEntry_SetVatAccount
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
