<?php

namespace Economic;

class CashBookEntry_GetEndDateResponse
{

    /**
     * @var \DateTime $CashBookEntry_GetEndDateResult
     */
    protected $CashBookEntry_GetEndDateResult = null;

    /**
     * @param \DateTime $CashBookEntry_GetEndDateResult
     */
    public function __construct(\DateTime $CashBookEntry_GetEndDateResult)
    {
      $this->CashBookEntry_GetEndDateResult = $CashBookEntry_GetEndDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCashBookEntry_GetEndDateResult()
    {
      if ($this->CashBookEntry_GetEndDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CashBookEntry_GetEndDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CashBookEntry_GetEndDateResult
     * @return \Economic\CashBookEntry_GetEndDateResponse
     */
    public function setCashBookEntry_GetEndDateResult(\DateTime $CashBookEntry_GetEndDateResult)
    {
      $this->CashBookEntry_GetEndDateResult = $CashBookEntry_GetEndDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
