<?php

namespace Economic;

class DeliveryLocation_GetDebtorResponse
{

    /**
     * @var DebtorHandle $DeliveryLocation_GetDebtorResult
     */
    protected $DeliveryLocation_GetDebtorResult = null;

    /**
     * @param DebtorHandle $DeliveryLocation_GetDebtorResult
     */
    public function __construct($DeliveryLocation_GetDebtorResult)
    {
      $this->DeliveryLocation_GetDebtorResult = $DeliveryLocation_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDeliveryLocation_GetDebtorResult()
    {
      return $this->DeliveryLocation_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $DeliveryLocation_GetDebtorResult
     * @return \Economic\DeliveryLocation_GetDebtorResponse
     */
    public function setDeliveryLocation_GetDebtorResult($DeliveryLocation_GetDebtorResult)
    {
      $this->DeliveryLocation_GetDebtorResult = $DeliveryLocation_GetDebtorResult;
      return $this;
    }

}
