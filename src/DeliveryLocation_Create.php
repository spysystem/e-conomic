<?php

namespace Economic;

class DeliveryLocation_Create
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
     * @return \Economic\DeliveryLocation_Create
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

}
