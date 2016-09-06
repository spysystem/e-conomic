<?php

namespace Economic;

class SubscriptionData
{

    /**
     * @var SubscriptionHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IncludeName
     */
    protected $IncludeName = null;

    /**
     * @var SubscriptionInterval $SubscriptionInterval
     */
    protected $SubscriptionInterval = null;

    /**
     * @var boolean $CalendarYearBasis
     */
    protected $CalendarYearBasis = null;

    /**
     * @var SubscriptionCollection $Collection
     */
    protected $Collection = null;

    /**
     * @var boolean $AddPeriod
     */
    protected $AddPeriod = null;

    /**
     * @var boolean $AllowMoreThanOneForEachDebtor
     */
    protected $AllowMoreThanOneForEachDebtor = null;

    /**
     * @param int $Id
     * @param int $Number
     * @param boolean $IncludeName
     * @param SubscriptionInterval $SubscriptionInterval
     * @param boolean $CalendarYearBasis
     * @param SubscriptionCollection $Collection
     * @param boolean $AddPeriod
     * @param boolean $AllowMoreThanOneForEachDebtor
     */
    public function __construct($Id, $Number, $IncludeName, $SubscriptionInterval, $CalendarYearBasis, $Collection, $AddPeriod, $AllowMoreThanOneForEachDebtor)
    {
      $this->Id = $Id;
      $this->Number = $Number;
      $this->IncludeName = $IncludeName;
      $this->SubscriptionInterval = $SubscriptionInterval;
      $this->CalendarYearBasis = $CalendarYearBasis;
      $this->Collection = $Collection;
      $this->AddPeriod = $AddPeriod;
      $this->AllowMoreThanOneForEachDebtor = $AllowMoreThanOneForEachDebtor;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param SubscriptionHandle $Handle
     * @return \Economic\SubscriptionData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\SubscriptionData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\SubscriptionData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\SubscriptionData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Economic\SubscriptionData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeName()
    {
      return $this->IncludeName;
    }

    /**
     * @param boolean $IncludeName
     * @return \Economic\SubscriptionData
     */
    public function setIncludeName($IncludeName)
    {
      $this->IncludeName = $IncludeName;
      return $this;
    }

    /**
     * @return SubscriptionInterval
     */
    public function getSubscriptionInterval()
    {
      return $this->SubscriptionInterval;
    }

    /**
     * @param SubscriptionInterval $SubscriptionInterval
     * @return \Economic\SubscriptionData
     */
    public function setSubscriptionInterval($SubscriptionInterval)
    {
      $this->SubscriptionInterval = $SubscriptionInterval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCalendarYearBasis()
    {
      return $this->CalendarYearBasis;
    }

    /**
     * @param boolean $CalendarYearBasis
     * @return \Economic\SubscriptionData
     */
    public function setCalendarYearBasis($CalendarYearBasis)
    {
      $this->CalendarYearBasis = $CalendarYearBasis;
      return $this;
    }

    /**
     * @return SubscriptionCollection
     */
    public function getCollection()
    {
      return $this->Collection;
    }

    /**
     * @param SubscriptionCollection $Collection
     * @return \Economic\SubscriptionData
     */
    public function setCollection($Collection)
    {
      $this->Collection = $Collection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddPeriod()
    {
      return $this->AddPeriod;
    }

    /**
     * @param boolean $AddPeriod
     * @return \Economic\SubscriptionData
     */
    public function setAddPeriod($AddPeriod)
    {
      $this->AddPeriod = $AddPeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMoreThanOneForEachDebtor()
    {
      return $this->AllowMoreThanOneForEachDebtor;
    }

    /**
     * @param boolean $AllowMoreThanOneForEachDebtor
     * @return \Economic\SubscriptionData
     */
    public function setAllowMoreThanOneForEachDebtor($AllowMoreThanOneForEachDebtor)
    {
      $this->AllowMoreThanOneForEachDebtor = $AllowMoreThanOneForEachDebtor;
      return $this;
    }

}
