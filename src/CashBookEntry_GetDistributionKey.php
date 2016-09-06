<?php

namespace Economic;

class CashBookEntry_GetDistributionKey
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     */
    public function __construct($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
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
     * @return \Economic\CashBookEntry_GetDistributionKey
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

}
