<?php

namespace Economic;

class Order_GetDebtorNameResponse
{

    /**
     * @var string $Order_GetDebtorNameResult
     */
    protected $Order_GetDebtorNameResult = null;

    /**
     * @param string $Order_GetDebtorNameResult
     */
    public function __construct($Order_GetDebtorNameResult)
    {
      $this->Order_GetDebtorNameResult = $Order_GetDebtorNameResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorNameResult()
    {
      return $this->Order_GetDebtorNameResult;
    }

    /**
     * @param string $Order_GetDebtorNameResult
     * @return \Economic\Order_GetDebtorNameResponse
     */
    public function setOrder_GetDebtorNameResult($Order_GetDebtorNameResult)
    {
      $this->Order_GetDebtorNameResult = $Order_GetDebtorNameResult;
      return $this;
    }

}
