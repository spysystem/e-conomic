<?php

namespace Economic;

class CashBookEntry_SetDistributionKey
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var DistributionKeyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param DistributionKeyHandle $valueHandle
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
     * @return \Economic\CashBookEntry_SetDistributionKey
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DistributionKeyHandle $valueHandle
     * @return \Economic\CashBookEntry_SetDistributionKey
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
