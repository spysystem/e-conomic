<?php

namespace Economic;

class CashBook_BookWithDate
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
     * @param CashBookHandle $cashBookHandle
     * @param \DateTime $fromDate
     * @param \DateTime $toDate
     */
    public function __construct($cashBookHandle, \DateTime $fromDate, \DateTime $toDate)
    {
      $this->cashBookHandle = $cashBookHandle;
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      $this->toDate = $toDate->format(\DateTime::ATOM);
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
     * @return \Economic\CashBook_BookWithDate
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
     * @return \Economic\CashBook_BookWithDate
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
     * @return \Economic\CashBook_BookWithDate
     */
    public function setToDate(\DateTime $toDate)
    {
      $this->toDate = $toDate->format(\DateTime::ATOM);
      return $this;
    }

}
