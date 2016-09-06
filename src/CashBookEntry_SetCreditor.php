<?php

namespace Economic;

class CashBookEntry_SetCreditor
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var CreditorHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param CreditorHandle $valueHandle
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
     * @return \Economic\CashBookEntry_SetCreditor
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return CreditorHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param CreditorHandle $valueHandle
     * @return \Economic\CashBookEntry_SetCreditor
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
