<?php

namespace Economic;

class Account_GetSumIntervalsResponse
{

    /**
     * @var ArrayOfSumIntervalHandle $Account_GetSumIntervalsResult
     */
    protected $Account_GetSumIntervalsResult = null;

    /**
     * @param ArrayOfSumIntervalHandle $Account_GetSumIntervalsResult
     */
    public function __construct($Account_GetSumIntervalsResult)
    {
      $this->Account_GetSumIntervalsResult = $Account_GetSumIntervalsResult;
    }

    /**
     * @return ArrayOfSumIntervalHandle
     */
    public function getAccount_GetSumIntervalsResult()
    {
      return $this->Account_GetSumIntervalsResult;
    }

    /**
     * @param ArrayOfSumIntervalHandle $Account_GetSumIntervalsResult
     * @return \Economic\Account_GetSumIntervalsResponse
     */
    public function setAccount_GetSumIntervalsResult($Account_GetSumIntervalsResult)
    {
      $this->Account_GetSumIntervalsResult = $Account_GetSumIntervalsResult;
      return $this;
    }

}
