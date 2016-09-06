<?php

namespace Economic;

class Debtor_SetCurrency
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var CurrencyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param CurrencyHandle $valueHandle
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
     * @return \Economic\Debtor_SetCurrency
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return CurrencyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param CurrencyHandle $valueHandle
     * @return \Economic\Debtor_SetCurrency
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
