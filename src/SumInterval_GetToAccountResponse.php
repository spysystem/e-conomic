<?php

namespace Economic;

class SumInterval_GetToAccountResponse
{

    /**
     * @var int $SumInterval_GetToAccountResult
     */
    protected $SumInterval_GetToAccountResult = null;

    /**
     * @param int $SumInterval_GetToAccountResult
     */
    public function __construct($SumInterval_GetToAccountResult)
    {
      $this->SumInterval_GetToAccountResult = $SumInterval_GetToAccountResult;
    }

    /**
     * @return int
     */
    public function getSumInterval_GetToAccountResult()
    {
      return $this->SumInterval_GetToAccountResult;
    }

    /**
     * @param int $SumInterval_GetToAccountResult
     * @return \Economic\SumInterval_GetToAccountResponse
     */
    public function setSumInterval_GetToAccountResult($SumInterval_GetToAccountResult)
    {
      $this->SumInterval_GetToAccountResult = $SumInterval_GetToAccountResult;
      return $this;
    }

}
