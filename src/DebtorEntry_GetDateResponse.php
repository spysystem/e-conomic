<?php

namespace Economic;

class DebtorEntry_GetDateResponse
{

    /**
     * @var \DateTime $DebtorEntry_GetDateResult
     */
    protected $DebtorEntry_GetDateResult = null;

    /**
     * @param \DateTime $DebtorEntry_GetDateResult
     */
    public function __construct(\DateTime $DebtorEntry_GetDateResult)
    {
      $this->DebtorEntry_GetDateResult = $DebtorEntry_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getDebtorEntry_GetDateResult()
    {
      if ($this->DebtorEntry_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DebtorEntry_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DebtorEntry_GetDateResult
     * @return \Economic\DebtorEntry_GetDateResponse
     */
    public function setDebtorEntry_GetDateResult(\DateTime $DebtorEntry_GetDateResult)
    {
      $this->DebtorEntry_GetDateResult = $DebtorEntry_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
