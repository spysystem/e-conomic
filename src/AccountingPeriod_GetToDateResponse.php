<?php

namespace Economic;

class AccountingPeriod_GetToDateResponse
{

    /**
     * @var \DateTime $AccountingPeriod_GetToDateResult
     */
    protected $AccountingPeriod_GetToDateResult = null;

    /**
     * @param \DateTime $AccountingPeriod_GetToDateResult
     */
    public function __construct(\DateTime $AccountingPeriod_GetToDateResult)
    {
      $this->AccountingPeriod_GetToDateResult = $AccountingPeriod_GetToDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getAccountingPeriod_GetToDateResult()
    {
      if ($this->AccountingPeriod_GetToDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccountingPeriod_GetToDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccountingPeriod_GetToDateResult
     * @return \Economic\AccountingPeriod_GetToDateResponse
     */
    public function setAccountingPeriod_GetToDateResult(\DateTime $AccountingPeriod_GetToDateResult)
    {
      $this->AccountingPeriod_GetToDateResult = $AccountingPeriod_GetToDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
