<?php

namespace Economic;

class Account_GetEntryTotalsPerCalendarYearResponse
{

    /**
     * @var ArrayOfAccountSumTotalByDateInterval $Account_GetEntryTotalsPerCalendarYearResult
     */
    protected $Account_GetEntryTotalsPerCalendarYearResult = null;

    /**
     * @param ArrayOfAccountSumTotalByDateInterval $Account_GetEntryTotalsPerCalendarYearResult
     */
    public function __construct($Account_GetEntryTotalsPerCalendarYearResult)
    {
      $this->Account_GetEntryTotalsPerCalendarYearResult = $Account_GetEntryTotalsPerCalendarYearResult;
    }

    /**
     * @return ArrayOfAccountSumTotalByDateInterval
     */
    public function getAccount_GetEntryTotalsPerCalendarYearResult()
    {
      return $this->Account_GetEntryTotalsPerCalendarYearResult;
    }

    /**
     * @param ArrayOfAccountSumTotalByDateInterval $Account_GetEntryTotalsPerCalendarYearResult
     * @return \Economic\Account_GetEntryTotalsPerCalendarYearResponse
     */
    public function setAccount_GetEntryTotalsPerCalendarYearResult($Account_GetEntryTotalsPerCalendarYearResult)
    {
      $this->Account_GetEntryTotalsPerCalendarYearResult = $Account_GetEntryTotalsPerCalendarYearResult;
      return $this;
    }

}
