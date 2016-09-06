<?php

namespace Economic;

class Debtor_SetVatZone
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var VatZone $value
     */
    protected $value = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param VatZone $value
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
     * @return \Economic\Debtor_SetVatZone
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return VatZone
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param VatZone $value
     * @return \Economic\Debtor_SetVatZone
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
