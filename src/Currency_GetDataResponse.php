<?php

namespace Economic;

class Currency_GetDataResponse
{

    /**
     * @var CurrencyData $Currency_GetDataResult
     */
    protected $Currency_GetDataResult = null;

    /**
     * @param CurrencyData $Currency_GetDataResult
     */
    public function __construct($Currency_GetDataResult)
    {
      $this->Currency_GetDataResult = $Currency_GetDataResult;
    }

    /**
     * @return CurrencyData
     */
    public function getCurrency_GetDataResult()
    {
      return $this->Currency_GetDataResult;
    }

    /**
     * @param CurrencyData $Currency_GetDataResult
     * @return \Economic\Currency_GetDataResponse
     */
    public function setCurrency_GetDataResult($Currency_GetDataResult)
    {
      $this->Currency_GetDataResult = $Currency_GetDataResult;
      return $this;
    }

}
