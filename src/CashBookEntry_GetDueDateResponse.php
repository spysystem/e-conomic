<?php

namespace Economic;

class CashBookEntry_GetDueDateResponse
{

    /**
     * @var \DateTime $CashBookEntry_GetDueDateResult
     */
    protected $CashBookEntry_GetDueDateResult = null;

    /**
     * @param \DateTime $CashBookEntry_GetDueDateResult
     */
    public function __construct(\DateTime $CashBookEntry_GetDueDateResult)
    {
      $this->CashBookEntry_GetDueDateResult = $CashBookEntry_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCashBookEntry_GetDueDateResult()
    {
      if ($this->CashBookEntry_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CashBookEntry_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CashBookEntry_GetDueDateResult
     * @return \Economic\CashBookEntry_GetDueDateResponse
     */
    public function setCashBookEntry_GetDueDateResult(\DateTime $CashBookEntry_GetDueDateResult)
    {
      $this->CashBookEntry_GetDueDateResult = $CashBookEntry_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
