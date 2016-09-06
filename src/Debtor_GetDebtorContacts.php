<?php

namespace Economic;

class Debtor_GetDebtorContacts
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @param DebtorHandle $debtorHandle
     */
    public function __construct($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->debtorHandle;
    }

    /**
     * @param DebtorHandle $debtorHandle
     * @return \Economic\Debtor_GetDebtorContacts
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

}
