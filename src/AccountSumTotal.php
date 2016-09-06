<?php

namespace Economic;

class AccountSumTotal
{

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @param \DateTime $Date
     * @param float $Total
     */
    public function __construct(\DateTime $Date, $Total)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Economic\AccountSumTotal
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \Economic\AccountSumTotal
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Economic\AccountSumTotal
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

}
