<?php

namespace Economic;

class SumInterval_GetDataArrayResponse
{

    /**
     * @var ArrayOfSumIntervalData $SumInterval_GetDataArrayResult
     */
    protected $SumInterval_GetDataArrayResult = null;

    /**
     * @param ArrayOfSumIntervalData $SumInterval_GetDataArrayResult
     */
    public function __construct($SumInterval_GetDataArrayResult)
    {
      $this->SumInterval_GetDataArrayResult = $SumInterval_GetDataArrayResult;
    }

    /**
     * @return ArrayOfSumIntervalData
     */
    public function getSumInterval_GetDataArrayResult()
    {
      return $this->SumInterval_GetDataArrayResult;
    }

    /**
     * @param ArrayOfSumIntervalData $SumInterval_GetDataArrayResult
     * @return \Economic\SumInterval_GetDataArrayResponse
     */
    public function setSumInterval_GetDataArrayResult($SumInterval_GetDataArrayResult)
    {
      $this->SumInterval_GetDataArrayResult = $SumInterval_GetDataArrayResult;
      return $this;
    }

}
