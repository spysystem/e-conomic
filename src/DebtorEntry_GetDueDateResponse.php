<?php

namespace Economic;

class DebtorEntry_GetDueDateResponse
{

    /**
     * @var \DateTime $DebtorEntry_GetDueDateResult
     */
    protected $DebtorEntry_GetDueDateResult = null;

    /**
     * @param \DateTime $DebtorEntry_GetDueDateResult
     */
    public function __construct(\DateTime $DebtorEntry_GetDueDateResult)
    {
      $this->DebtorEntry_GetDueDateResult = $DebtorEntry_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getDebtorEntry_GetDueDateResult()
    {
      if ($this->DebtorEntry_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DebtorEntry_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DebtorEntry_GetDueDateResult
     * @return \Economic\DebtorEntry_GetDueDateResponse
     */
    public function setDebtorEntry_GetDueDateResult(\DateTime $DebtorEntry_GetDueDateResult)
    {
      $this->DebtorEntry_GetDueDateResult = $DebtorEntry_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
