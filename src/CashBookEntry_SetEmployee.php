<?php

namespace Economic;

class CashBookEntry_SetEmployee
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var EmployeeHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param EmployeeHandle $valueHandle
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
     * @return \Economic\CashBookEntry_SetEmployee
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param EmployeeHandle $valueHandle
     * @return \Economic\CashBookEntry_SetEmployee
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
