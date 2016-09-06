<?php

namespace Economic;

class Account_GetEntryTotalsPerCalendarMonthResponse
{

    /**
     * @var ArrayOfAccountSumTotalByDateInterval $Account_GetEntryTotalsPerCalendarMonthResult
     */
    protected $Account_GetEntryTotalsPerCalendarMonthResult = null;

    /**
     * @param ArrayOfAccountSumTotalByDateInterval $Account_GetEntryTotalsPerCalendarMonthResult
     */
    public function __construct($Account_GetEntryTotalsPerCalendarMonthResult)
    {
      $this->Account_GetEntryTotalsPerCalendarMonthResult = $Account_GetEntryTotalsPerCalendarMonthResult;
    }

    /**
     * @return ArrayOfAccountSumTotalByDateInterval
     */
    public function getAccount_GetEntryTotalsPerCalendarMonthResult()
    {
      return $this->Account_GetEntryTotalsPerCalendarMonthResult;
    }

    /**
     * @param ArrayOfAccountSumTotalByDateInterval $Account_GetEntryTotalsPerCalendarMonthResult
     * @return \Economic\Account_GetEntryTotalsPerCalendarMonthResponse
     */
    public function setAccount_GetEntryTotalsPerCalendarMonthResult($Account_GetEntryTotalsPerCalendarMonthResult)
    {
      $this->Account_GetEntryTotalsPerCalendarMonthResult = $Account_GetEntryTotalsPerCalendarMonthResult;
      return $this;
    }

}
