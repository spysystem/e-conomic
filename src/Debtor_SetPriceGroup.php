<?php

namespace Economic;

class Debtor_SetPriceGroup
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var PriceGroupHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param PriceGroupHandle $valueHandle
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
     * @return \Economic\Debtor_SetPriceGroup
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param PriceGroupHandle $valueHandle
     * @return \Economic\Debtor_SetPriceGroup
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
