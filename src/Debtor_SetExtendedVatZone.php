<?php

namespace Economic;

class Debtor_SetExtendedVatZone
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var ExtendedVatZoneHandle $value
     */
    protected $value = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param ExtendedVatZoneHandle $value
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
     * @return \Economic\Debtor_SetExtendedVatZone
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ExtendedVatZoneHandle $value
     * @return \Economic\Debtor_SetExtendedVatZone
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
