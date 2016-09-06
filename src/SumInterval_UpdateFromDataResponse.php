<?php

namespace Economic;

class SumInterval_UpdateFromDataResponse
{

    /**
     * @var SumIntervalHandle $SumInterval_UpdateFromDataResult
     */
    protected $SumInterval_UpdateFromDataResult = null;

    /**
     * @param SumIntervalHandle $SumInterval_UpdateFromDataResult
     */
    public function __construct($SumInterval_UpdateFromDataResult)
    {
      $this->SumInterval_UpdateFromDataResult = $SumInterval_UpdateFromDataResult;
    }

    /**
     * @return SumIntervalHandle
     */
    public function getSumInterval_UpdateFromDataResult()
    {
      return $this->SumInterval_UpdateFromDataResult;
    }

    /**
     * @param SumIntervalHandle $SumInterval_UpdateFromDataResult
     * @return \Economic\SumInterval_UpdateFromDataResponse
     */
    public function setSumInterval_UpdateFromDataResult($SumInterval_UpdateFromDataResult)
    {
      $this->SumInterval_UpdateFromDataResult = $SumInterval_UpdateFromDataResult;
      return $this;
    }

}
