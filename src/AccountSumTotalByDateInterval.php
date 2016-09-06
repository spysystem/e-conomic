<?php

namespace Economic;

class AccountSumTotalByDateInterval
{

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var \DateTime $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var \DateTime $DateTo
     */
    protected $DateTo = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @param \DateTime $DateFrom
     * @param \DateTime $DateTo
     * @param float $Total
     */
    public function __construct(\DateTime $DateFrom, \DateTime $DateTo, $Total)
    {
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      $this->Total = $Total;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->AccountHandle;
    }

    /**
     * @param AccountHandle $AccountHandle
     * @return \Economic\AccountSumTotalByDateInterval
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom()
    {
      if ($this->DateFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateFrom
     * @return \Economic\AccountSumTotalByDateInterval
     */
    public function setDateFrom(\DateTime $DateFrom)
    {
      $this->DateFrom = $DateFrom->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTo()
    {
      if ($this->DateTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateTo
     * @return \Economic\AccountSumTotalByDateInterval
     */
    public function setDateTo(\DateTime $DateTo)
    {
      $this->DateTo = $DateTo->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param float $Total
     * @return \Economic\AccountSumTotalByDateInterval
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

}
