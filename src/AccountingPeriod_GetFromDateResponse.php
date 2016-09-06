<?php

namespace Economic;

class AccountingPeriod_GetFromDateResponse
{

    /**
     * @var \DateTime $AccountingPeriod_GetFromDateResult
     */
    protected $AccountingPeriod_GetFromDateResult = null;

    /**
     * @param \DateTime $AccountingPeriod_GetFromDateResult
     */
    public function __construct(\DateTime $AccountingPeriod_GetFromDateResult)
    {
      $this->AccountingPeriod_GetFromDateResult = $AccountingPeriod_GetFromDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getAccountingPeriod_GetFromDateResult()
    {
      if ($this->AccountingPeriod_GetFromDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccountingPeriod_GetFromDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccountingPeriod_GetFromDateResult
     * @return \Economic\AccountingPeriod_GetFromDateResponse
     */
    public function setAccountingPeriod_GetFromDateResult(\DateTime $AccountingPeriod_GetFromDateResult)
    {
      $this->AccountingPeriod_GetFromDateResult = $AccountingPeriod_GetFromDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
