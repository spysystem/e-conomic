<?php

namespace Economic;

class Currency_GetDataArrayResponse
{

    /**
     * @var ArrayOfCurrencyData $Currency_GetDataArrayResult
     */
    protected $Currency_GetDataArrayResult = null;

    /**
     * @param ArrayOfCurrencyData $Currency_GetDataArrayResult
     */
    public function __construct($Currency_GetDataArrayResult)
    {
      $this->Currency_GetDataArrayResult = $Currency_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCurrencyData
     */
    public function getCurrency_GetDataArrayResult()
    {
      return $this->Currency_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCurrencyData $Currency_GetDataArrayResult
     * @return \Economic\Currency_GetDataArrayResponse
     */
    public function setCurrency_GetDataArrayResult($Currency_GetDataArrayResult)
    {
      $this->Currency_GetDataArrayResult = $Currency_GetDataArrayResult;
      return $this;
    }

}
