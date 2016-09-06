<?php

namespace Economic;

class Debtor_SetYourReference
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var DebtorContactHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param DebtorContactHandle $valueHandle
     */
    public function __construct($debtorHandle, $valueHandle)
    {
      $this->debtorHandle = $debtorHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Debtor_SetYourReference
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorContactHandle $valueHandle
     * @return \Economic\Debtor_SetYourReference
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
