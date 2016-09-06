<?php

namespace Economic;

class AccountingYearData
{

    /**
     * @var AccountingYearHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Year
     */
    protected $Year = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param boolean $IsClosed
     */
    public function __construct(\DateTime $FromDate, \DateTime $ToDate, $IsClosed)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      $this->IsClosed = $IsClosed;
    }

    /**
     * @return AccountingYearHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param AccountingYearHandle $Handle
     * @return \Economic\AccountingYearData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param string $Year
     * @return \Economic\AccountingYearData
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
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
     * @return \Economic\AccountingYearData
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
     * @return \Economic\AccountingYearData
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
      return $this->IsClosed;
    }

    /**
     * @param boolean $IsClosed
     * @return \Economic\AccountingYearData
     */
    public function setIsClosed($IsClosed)
    {
      $this->IsClosed = $IsClosed;
      return $this;
    }

}
