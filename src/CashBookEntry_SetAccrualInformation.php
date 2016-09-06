<?php

namespace Economic;

class CashBookEntry_SetAccrualInformation
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var AccountHandle $capitaliseAccountHandle
     */
    protected $capitaliseAccountHandle = null;

    /**
     * @var \DateTime $capitaliseStartDate
     */
    protected $capitaliseStartDate = null;

    /**
     * @var \DateTime $capitaliseEndDate
     */
    protected $capitaliseEndDate = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param AccountHandle $capitaliseAccountHandle
     * @param \DateTime $capitaliseStartDate
     * @param \DateTime $capitaliseEndDate
     */
    public function __construct($cashBookEntryHandle, $capitaliseAccountHandle, \DateTime $capitaliseStartDate, \DateTime $capitaliseEndDate)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      $this->capitaliseAccountHandle = $capitaliseAccountHandle;
      $this->capitaliseStartDate = $capitaliseStartDate->format(\DateTime::ATOM);
      $this->capitaliseEndDate = $capitaliseEndDate->format(\DateTime::ATOM);
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntryHandle()
    {
      return $this->cashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @return \Economic\CashBookEntry_SetAccrualInformation
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getCapitaliseAccountHandle()
    {
      return $this->capitaliseAccountHandle;
    }

    /**
     * @param AccountHandle $capitaliseAccountHandle
     * @return \Economic\CashBookEntry_SetAccrualInformation
     */
    public function setCapitaliseAccountHandle($capitaliseAccountHandle)
    {
      $this->capitaliseAccountHandle = $capitaliseAccountHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCapitaliseStartDate()
    {
      if ($this->capitaliseStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->capitaliseStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $capitaliseStartDate
     * @return \Economic\CashBookEntry_SetAccrualInformation
     */
    public function setCapitaliseStartDate(\DateTime $capitaliseStartDate)
    {
      $this->capitaliseStartDate = $capitaliseStartDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCapitaliseEndDate()
    {
      if ($this->capitaliseEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->capitaliseEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $capitaliseEndDate
     * @return \Economic\CashBookEntry_SetAccrualInformation
     */
    public function setCapitaliseEndDate(\DateTime $capitaliseEndDate)
    {
      $this->capitaliseEndDate = $capitaliseEndDate->format(\DateTime::ATOM);
      return $this;
    }

}
