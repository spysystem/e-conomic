<?php

namespace Economic;

class DebtorGroup_GetDebtors
{

    /**
     * @var DebtorGroupHandle $debtorGroupHandle
     */
    protected $debtorGroupHandle = null;

    /**
     * @param DebtorGroupHandle $debtorGroupHandle
     */
    public function __construct($debtorGroupHandle)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroupHandle()
    {
      return $this->debtorGroupHandle;
    }

    /**
     * @param DebtorGroupHandle $debtorGroupHandle
     * @return \Economic\DebtorGroup_GetDebtors
     */
    public function setDebtorGroupHandle($debtorGroupHandle)
    {
      $this->debtorGroupHandle = $debtorGroupHandle;
      return $this;
    }

}
