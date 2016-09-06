<?php

namespace Economic;

class CashBook_BookWithDateClosedPeriod
{

    /**
     * @var CashBookHandle $cashBookHandle
     */
    protected $cashBookHandle = null;

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var \DateTime $toDate
     */
    protected $toDate = null;

    /**
     * @var \DateTime $accrualDate
     */
    protected $accrualDate = null;

    /**
     * @var string $accrualText
     */
    protected $accrualText = null;

    /**
     * @param CashBookHandle $cashBookHandle
     * @param \DateTime $fromDate
     * @param \DateTime $toDate
     * @param \DateTime $accrualDate
     * @param string $accrualText
     */
    public function __construct($cashBookHandle, \DateTime $fromDate, \DateTime $toDate, \DateTime $accrualDate, $accrualText)
    {
      $this->cashBookHandle = $cashBookHandle;
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      $this->toDate = $toDate->format(\DateTime::ATOM);
      $this->accrualDate = $accrualDate->format(\DateTime::ATOM);
      $this->accrualText = $accrualText;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBookHandle()
    {
      return $this->cashBookHandle;
    }

    /**
     * @param CashBookHandle $cashBookHandle
     * @return \Economic\CashBook_BookWithDateClosedPeriod
     */
    public function setCashBookHandle($cashBookHandle)
    {
      $this->cashBookHandle = $cashBookHandle;
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
     * @return \Economic\CashBook_BookWithDateClosedPeriod
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
     * @return \Economic\CashBook_BookWithDateClosedPeriod
     */
    public function setToDate(\DateTime $toDate)
    {
      $this->toDate = $toDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAccrualDate()
    {
      if ($this->accrualDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->accrualDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $accrualDate
     * @return \Economic\CashBook_BookWithDateClosedPeriod
     */
    public function setAccrualDate(\DateTime $accrualDate)
    {
      $this->accrualDate = $accrualDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getAccrualText()
    {
      return $this->accrualText;
    }

    /**
     * @param string $accrualText
     * @return \Economic\CashBook_BookWithDateClosedPeriod
     */
    public function setAccrualText($accrualText)
    {
      $this->accrualText = $accrualText;
      return $this;
    }

}
