<?php

namespace Economic;

class DebtorContact_GetComments
{

    /**
     * @var DebtorContactHandle $debtorContactHandle
     */
    protected $debtorContactHandle = null;

    /**
     * @param DebtorContactHandle $debtorContactHandle
     */
    public function __construct($debtorContactHandle)
    {
      $this->debtorContactHandle = $debtorContactHandle;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtorContactHandle()
    {
      return $this->debtorContactHandle;
    }

    /**
     * @param DebtorContactHandle $debtorContactHandle
     * @return \Economic\DebtorContact_GetComments
     */
    public function setDebtorContactHandle($debtorContactHandle)
    {
      $this->debtorContactHandle = $debtorContactHandle;
      return $this;
    }

}
