<?php

namespace Economic;

class Account_GetBudgetFiguresByDate
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @param AccountHandle $accountHandle
     * @param \DateTime $fromDate
     * @param \DateTime $toDate
     */
    public function __construct($accountHandle, \DateTime $fromDate, \DateTime $toDate)
    {
      $this->accountHandle = $accountHandle;
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      $this->toDate = $toDate->format(\DateTime::ATOM);
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->accountHandle;
    }

    /**
     * @param AccountHandle $accountHandle
     * @return \Economic\Account_GetBudgetFiguresByDate
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->fromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromDate
     * @return \Economic\Account_GetBudgetFiguresByDate
     */
    public function setFromDate(\DateTime $fromDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->toDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->toDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $toDate
     * @return \Economic\Account_GetBudgetFiguresByDate
     */
    public function setToDate(\DateTime $toDate)
    {
      $this->toDate = $toDate->format(\DateTime::ATOM);
      return $this;
    }

}
