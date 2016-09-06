<?php

namespace Economic;

class CashBookEntry_GetStartDateResponse
{

    /**
     * @var \DateTime $CashBookEntry_GetStartDateResult
     */
    protected $CashBookEntry_GetStartDateResult = null;

    /**
     * @param \DateTime $CashBookEntry_GetStartDateResult
     */
    public function __construct(\DateTime $CashBookEntry_GetStartDateResult)
    {
      $this->CashBookEntry_GetStartDateResult = $CashBookEntry_GetStartDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCashBookEntry_GetStartDateResult()
    {
      if ($this->CashBookEntry_GetStartDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CashBookEntry_GetStartDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CashBookEntry_GetStartDateResult
     * @return \Economic\CashBookEntry_GetStartDateResponse
     */
    public function setCashBookEntry_GetStartDateResult(\DateTime $CashBookEntry_GetStartDateResult)
    {
      $this->CashBookEntry_GetStartDateResult = $CashBookEntry_GetStartDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
