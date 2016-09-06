<?php

namespace Economic;

class Order_GetDebtorCountyResponse
{

    /**
     * @var string $Order_GetDebtorCountyResult
     */
    protected $Order_GetDebtorCountyResult = null;

    /**
     * @param string $Order_GetDebtorCountyResult
     */
    public function __construct($Order_GetDebtorCountyResult)
    {
      $this->Order_GetDebtorCountyResult = $Order_GetDebtorCountyResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorCountyResult()
    {
      return $this->Order_GetDebtorCountyResult;
    }

    /**
     * @param string $Order_GetDebtorCountyResult
     * @return \Economic\Order_GetDebtorCountyResponse
     */
    public function setOrder_GetDebtorCountyResult($Order_GetDebtorCountyResult)
    {
      $this->Order_GetDebtorCountyResult = $Order_GetDebtorCountyResult;
      return $this;
    }

}
