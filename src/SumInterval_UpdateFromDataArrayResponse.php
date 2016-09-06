<?php

namespace Economic;

class SumInterval_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfSumIntervalHandle $SumInterval_UpdateFromDataArrayResult
     */
    protected $SumInterval_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfSumIntervalHandle $SumInterval_UpdateFromDataArrayResult
     */
    public function __construct($SumInterval_UpdateFromDataArrayResult)
    {
      $this->SumInterval_UpdateFromDataArrayResult = $SumInterval_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSumIntervalHandle
     */
    public function getSumInterval_UpdateFromDataArrayResult()
    {
      return $this->SumInterval_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSumIntervalHandle $SumInterval_UpdateFromDataArrayResult
     * @return \Economic\SumInterval_UpdateFromDataArrayResponse
     */
    public function setSumInterval_UpdateFromDataArrayResult($SumInterval_UpdateFromDataArrayResult)
    {
      $this->SumInterval_UpdateFromDataArrayResult = $SumInterval_UpdateFromDataArrayResult;
      return $this;
    }

}
