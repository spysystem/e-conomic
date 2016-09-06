<?php

namespace Economic;

class CashBookEntry_SetDebtor
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var DebtorHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param DebtorHandle $valueHandle
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
     * @return \Economic\CashBookEntry_SetDebtor
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorHandle $valueHandle
     * @return \Economic\CashBookEntry_SetDebtor
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
