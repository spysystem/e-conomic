<?php

namespace Economic;

class SumInterval_GetDataResponse
{

    /**
     * @var SumIntervalData $SumInterval_GetDataResult
     */
    protected $SumInterval_GetDataResult = null;

    /**
     * @param SumIntervalData $SumInterval_GetDataResult
     */
    public function __construct($SumInterval_GetDataResult)
    {
      $this->SumInterval_GetDataResult = $SumInterval_GetDataResult;
    }

    /**
     * @return SumIntervalData
     */
    public function getSumInterval_GetDataResult()
    {
      return $this->SumInterval_GetDataResult;
    }

    /**
     * @param SumIntervalData $SumInterval_GetDataResult
     * @return \Economic\SumInterval_GetDataResponse
     */
    public function setSumInterval_GetDataResult($SumInterval_GetDataResult)
    {
      $this->SumInterval_GetDataResult = $SumInterval_GetDataResult;
      return $this;
    }

}
