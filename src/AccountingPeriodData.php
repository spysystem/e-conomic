<?php

namespace Economic;

class AccountingPeriodData
{

    /**
     * @var AccountingPeriodHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var AccountingYearHandle $AccountingYearHandle
     */
    protected $AccountingYearHandle = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var AccountingPeriodStatus $Status
     */
    protected $Status = null;

    /**
     * @param int $Period
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param AccountingPeriodStatus $Status
     */
    public function __construct($Period, \DateTime $FromDate, \DateTime $ToDate, $Status)
    {
      $this->Period = $Period;
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      $this->Status = $Status;
    }

    /**
     * @return AccountingPeriodHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param AccountingPeriodHandle $Handle
     * @return \Economic\AccountingPeriodData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return \Economic\AccountingPeriodData
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
      return $this;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getAccountingYearHandle()
    {
      return $this->AccountingYearHandle;
    }

    /**
     * @param AccountingYearHandle $AccountingYearHandle
     * @return \Economic\AccountingPeriodData
     */
    public function setAccountingYearHandle($AccountingYearHandle)
    {
      $this->AccountingYearHandle = $AccountingYearHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \Economic\AccountingPeriodData
     */
    public function setFromDate(\DateTime $FromDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \Economic\AccountingPeriodData
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return AccountingPeriodStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param AccountingPeriodStatus $Status
     * @return \Economic\AccountingPeriodData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
