<?php

namespace Economic;

class Subscriber_Create
{

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var SubscriptionHandle $subscriptionHandle
     */
    protected $subscriptionHandle = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @var \DateTime $registeredDate
     */
    protected $registeredDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @param DebtorHandle $debtorHandle
     * @param SubscriptionHandle $subscriptionHandle
     * @param \DateTime $startDate
     * @param \DateTime $registeredDate
     * @param \DateTime $endDate
     */
    public function __construct($debtorHandle, $subscriptionHandle, \DateTime $startDate, \DateTime $registeredDate, \DateTime $endDate)
    {
      $this->debtorHandle = $debtorHandle;
      $this->subscriptionHandle = $subscriptionHandle;
      $this->startDate = $startDate->format(\DateTime::ATOM);
      $this->registeredDate = $registeredDate->format(\DateTime::ATOM);
      $this->endDate = $endDate->format(\DateTime::ATOM);
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->debtorHandle;
    }

    /**
     * @param DebtorHandle $debtorHandle
     * @return \Economic\Subscriber_Create
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscriptionHandle()
    {
      return $this->subscriptionHandle;
    }

    /**
     * @param SubscriptionHandle $subscriptionHandle
     * @return \Economic\Subscriber_Create
     */
    public function setSubscriptionHandle($subscriptionHandle)
    {
      $this->subscriptionHandle = $subscriptionHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Economic\Subscriber_Create
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegisteredDate()
    {
      if ($this->registeredDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->registeredDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $registeredDate
     * @return \Economic\Subscriber_Create
     */
    public function setRegisteredDate(\DateTime $registeredDate)
    {
      $this->registeredDate = $registeredDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Economic\Subscriber_Create
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

}
