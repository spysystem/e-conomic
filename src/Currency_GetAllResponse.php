<?php

namespace Economic;

class Currency_GetAllResponse
{

    /**
     * @var ArrayOfCurrencyHandle $Currency_GetAllResult
     */
    protected $Currency_GetAllResult = null;

    /**
     * @param ArrayOfCurrencyHandle $Currency_GetAllResult
     */
    public function __construct($Currency_GetAllResult)
    {
      $this->Currency_GetAllResult = $Currency_GetAllResult;
    }

    /**
     * @return ArrayOfCurrencyHandle
     */
    public function getCurrency_GetAllResult()
    {
      return $this->Currency_GetAllResult;
    }

    /**
     * @param ArrayOfCurrencyHandle $Currency_GetAllResult
     * @return \Economic\Currency_GetAllResponse
     */
    public function setCurrency_GetAllResult($Currency_GetAllResult)
    {
      $this->Currency_GetAllResult = $Currency_GetAllResult;
      return $this;
    }

}
