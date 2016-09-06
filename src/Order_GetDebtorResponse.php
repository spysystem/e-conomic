<?php

namespace Economic;

class Order_GetDebtorResponse
{

    /**
     * @var DebtorHandle $Order_GetDebtorResult
     */
    protected $Order_GetDebtorResult = null;

    /**
     * @param DebtorHandle $Order_GetDebtorResult
     */
    public function __construct($Order_GetDebtorResult)
    {
      $this->Order_GetDebtorResult = $Order_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getOrder_GetDebtorResult()
    {
      return $this->Order_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $Order_GetDebtorResult
     * @return \Economic\Order_GetDebtorResponse
     */
    public function setOrder_GetDebtorResult($Order_GetDebtorResult)
    {
      $this->Order_GetDebtorResult = $Order_GetDebtorResult;
      return $this;
    }

}
