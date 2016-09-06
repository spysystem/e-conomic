<?php

namespace Economic;

class Order_GetDebtorEanResponse
{

    /**
     * @var string $Order_GetDebtorEanResult
     */
    protected $Order_GetDebtorEanResult = null;

    /**
     * @param string $Order_GetDebtorEanResult
     */
    public function __construct($Order_GetDebtorEanResult)
    {
      $this->Order_GetDebtorEanResult = $Order_GetDebtorEanResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorEanResult()
    {
      return $this->Order_GetDebtorEanResult;
    }

    /**
     * @param string $Order_GetDebtorEanResult
     * @return \Economic\Order_GetDebtorEanResponse
     */
    public function setOrder_GetDebtorEanResult($Order_GetDebtorEanResult)
    {
      $this->Order_GetDebtorEanResult = $Order_GetDebtorEanResult;
      return $this;
    }

}
