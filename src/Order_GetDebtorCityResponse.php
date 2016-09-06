<?php

namespace Economic;

class Order_GetDebtorCityResponse
{

    /**
     * @var string $Order_GetDebtorCityResult
     */
    protected $Order_GetDebtorCityResult = null;

    /**
     * @param string $Order_GetDebtorCityResult
     */
    public function __construct($Order_GetDebtorCityResult)
    {
      $this->Order_GetDebtorCityResult = $Order_GetDebtorCityResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDebtorCityResult()
    {
      return $this->Order_GetDebtorCityResult;
    }

    /**
     * @param string $Order_GetDebtorCityResult
     * @return \Economic\Order_GetDebtorCityResponse
     */
    public function setOrder_GetDebtorCityResult($Order_GetDebtorCityResult)
    {
      $this->Order_GetDebtorCityResult = $Order_GetDebtorCityResult;
      return $this;
    }

}
