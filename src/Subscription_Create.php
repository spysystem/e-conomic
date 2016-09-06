<?php

namespace Economic;

class Subscription_Create
{

    /**
     * @var int $subscriptionNumber
     */
    protected $subscriptionNumber = null;

    /**
     * @var string $subscriptionName
     */
    protected $subscriptionName = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $includeName
     */
    protected $includeName = null;

    /**
     * @var SubscriptionInterval $subscriptionInterval
     */
    protected $subscriptionInterval = null;

    /**
     * @var boolean $calendarYearBasis
     */
    protected $calendarYearBasis = null;

    /**
     * @var SubscriptionCollection $collection
     */
    protected $collection = null;

    /**
     * @var boolean $addPeriod
     */
    protected $addPeriod = null;

    /**
     * @var boolean $allowMoreThanOneForEachDebtor
     */
    protected $allowMoreThanOneForEachDebtor = null;

    /**
     * @param int $subscriptionNumber
     * @param string $subscriptionName
     * @param string $description
     * @param boolean $includeName
     * @param SubscriptionInterval $subscriptionInterval
     * @param boolean $calendarYearBasis
     * @param SubscriptionCollection $collection
     * @param boolean $addPeriod
     * @param boolean $allowMoreThanOneForEachDebtor
     */
    public function __construct($subscriptionNumber, $subscriptionName, $description, $includeName, $subscriptionInterval, $calendarYearBasis, $collection, $addPeriod, $allowMoreThanOneForEachDebtor)
    {
      $this->subscriptionNumber = $subscriptionNumber;
      $this->subscriptionName = $subscriptionName;
      $this->description = $description;
      $this->includeName = $includeName;
      $this->subscriptionInterval = $subscriptionInterval;
      $this->calendarYearBasis = $calendarYearBasis;
      $this->collection = $collection;
      $this->addPeriod = $addPeriod;
      $this->allowMoreThanOneForEachDebtor = $allowMoreThanOneForEachDebtor;
    }

    /**
     * @return int
     */
    public function getSubscriptionNumber()
    {
      return $this->subscriptionNumber;
    }

    /**
     * @param int $subscriptionNumber
     * @return \Economic\Subscription_Create
     */
    public function setSubscriptionNumber($subscriptionNumber)
    {
      $this->subscriptionNumber = $subscriptionNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionName()
    {
      return $this->subscriptionName;
    }

    /**
     * @param string $subscriptionName
     * @return \Economic\Subscription_Create
     */
    public function setSubscriptionName($subscriptionName)
    {
      $this->subscriptionName = $subscriptionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Economic\Subscription_Create
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeName()
    {
      return $this->includeName;
    }

    /**
     * @param boolean $includeName
     * @return \Economic\Subscription_Create
     */
    public function setIncludeName($includeName)
    {
      $this->includeName = $includeName;
      return $this;
    }

    /**
     * @return SubscriptionInterval
     */
    public function getSubscriptionInterval()
    {
      return $this->subscriptionInterval;
    }

    /**
     * @param SubscriptionInterval $subscriptionInterval
     * @return \Economic\Subscription_Create
     */
    public function setSubscriptionInterval($subscriptionInterval)
    {
      $this->subscriptionInterval = $subscriptionInterval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCalendarYearBasis()
    {
      return $this->calendarYearBasis;
    }

    /**
     * @param boolean $calendarYearBasis
     * @return \Economic\Subscription_Create
     */
    public function setCalendarYearBasis($calendarYearBasis)
    {
      $this->calendarYearBasis = $calendarYearBasis;
      return $this;
    }

    /**
     * @return SubscriptionCollection
     */
    public function getCollection()
    {
      return $this->collection;
    }

    /**
     * @param SubscriptionCollection $collection
     * @return \Economic\Subscription_Create
     */
    public function setCollection($collection)
    {
      $this->collection = $collection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddPeriod()
    {
      return $this->addPeriod;
    }

    /**
     * @param boolean $addPeriod
     * @return \Economic\Subscription_Create
     */
    public function setAddPeriod($addPeriod)
    {
      $this->addPeriod = $addPeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMoreThanOneForEachDebtor()
    {
      return $this->allowMoreThanOneForEachDebtor;
    }

    /**
     * @param boolean $allowMoreThanOneForEachDebtor
     * @return \Economic\Subscription_Create
     */
    public function setAllowMoreThanOneForEachDebtor($allowMoreThanOneForEachDebtor)
    {
      $this->allowMoreThanOneForEachDebtor = $allowMoreThanOneForEachDebtor;
      return $this;
    }

}
