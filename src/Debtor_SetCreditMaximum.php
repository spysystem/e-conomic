<?php

namespace Economic;

class Debtor_SetCreditMaximum
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param float $value
     */
    public function __construct($debtorHandle, $value)
    {
      $this->debtorHandle = $debtorHandle;
      $this->value = $value;
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
     * @return \Economic\Debtor_SetCreditMaximum
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\Debtor_SetCreditMaximum
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
