<?php

namespace Economic;

class Debtor_SetOurReference
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var EmployeeHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param EmployeeHandle $valueHandle
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
     * @return \Economic\Debtor_SetOurReference
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
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
     * @return \Economic\Debtor_SetOurReference
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
