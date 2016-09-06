<?php

namespace Economic;

class DebtorEntry_GetRemainderDefaultCurrency
{

    /**
     * @var DebtorEntryHandle $debtorEntryHandle
     */
    protected $debtorEntryHandle = null;

    /**
     * @param DebtorEntryHandle $debtorEntryHandle
     */
    public function __construct($debtorEntryHandle)
    {
      $this->debtorEntryHandle = $debtorEntryHandle;
    }

    /**
     * @return DebtorEntryHandle
     */
    public function getDebtorEntryHandle()
    {
      return $this->debtorEntryHandle;
    }

    /**
     * @param DebtorEntryHandle $debtorEntryHandle
     * @return \Economic\DebtorEntry_GetRemainderDefaultCurrency
     */
    public function setDebtorEntryHandle($debtorEntryHandle)
    {
      $this->debtorEntryHandle = $debtorEntryHandle;
      return $this;
    }

}
