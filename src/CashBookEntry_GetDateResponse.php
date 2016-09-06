<?php

namespace Economic;

class CashBookEntry_GetDateResponse
{

    /**
     * @var \DateTime $CashBookEntry_GetDateResult
     */
    protected $CashBookEntry_GetDateResult = null;

    /**
     * @param \DateTime $CashBookEntry_GetDateResult
     */
    public function __construct(\DateTime $CashBookEntry_GetDateResult)
    {
      $this->CashBookEntry_GetDateResult = $CashBookEntry_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCashBookEntry_GetDateResult()
    {
      if ($this->CashBookEntry_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CashBookEntry_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CashBookEntry_GetDateResult
     * @return \Economic\CashBookEntry_GetDateResponse
     */
    public function setCashBookEntry_GetDateResult(\DateTime $CashBookEntry_GetDateResult)
    {
      $this->CashBookEntry_GetDateResult = $CashBookEntry_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
