<?php

namespace Economic;

class TimeEntryData
{

    /**
     * @var TimeEntryHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var ProjectHandle $ProjectHandle
     */
    protected $ProjectHandle = null;

    /**
     * @var ActivityHandle $ActivityHandle
     */
    protected $ActivityHandle = null;

    /**
     * @var EmployeeHandle $EmployeeHandle
     */
    protected $EmployeeHandle = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var float $NumberOfHours
     */
    protected $NumberOfHours = null;

    /**
     * @var boolean $Approved
     */
    protected $Approved = null;

    /**
     * @var float $SalesPrice
     */
    protected $SalesPrice = null;

    /**
     * @var float $CostPrice
     */
    protected $CostPrice = null;

    /**
     * @param int $Id
     * @param \DateTime $Date
     * @param float $NumberOfHours
     * @param boolean $Approved
     */
    public function __construct($Id, \DateTime $Date, $NumberOfHours, $Approved)
    {
      $this->Id = $Id;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->NumberOfHours = $NumberOfHours;
      $this->Approved = $Approved;
    }

    /**
     * @return TimeEntryHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param TimeEntryHandle $Handle
     * @return \Economic\TimeEntryData
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
     * @return \Economic\TimeEntryData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->ProjectHandle;
    }

    /**
     * @param ProjectHandle $ProjectHandle
     * @return \Economic\TimeEntryData
     */
    public function setProjectHandle($ProjectHandle)
    {
      $this->ProjectHandle = $ProjectHandle;
      return $this;
    }

    /**
     * @return ActivityHandle
     */
    public function getActivityHandle()
    {
      return $this->ActivityHandle;
    }

    /**
     * @param ActivityHandle $ActivityHandle
     * @return \Economic\TimeEntryData
     */
    public function setActivityHandle($ActivityHandle)
    {
      $this->ActivityHandle = $ActivityHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployeeHandle()
    {
      return $this->EmployeeHandle;
    }

    /**
     * @param EmployeeHandle $EmployeeHandle
     * @return \Economic\TimeEntryData
     */
    public function setEmployeeHandle($EmployeeHandle)
    {
      $this->EmployeeHandle = $EmployeeHandle;
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
     * @return \Economic\TimeEntryData
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Economic\TimeEntryData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfHours()
    {
      return $this->NumberOfHours;
    }

    /**
     * @param float $NumberOfHours
     * @return \Economic\TimeEntryData
     */
    public function setNumberOfHours($NumberOfHours)
    {
      $this->NumberOfHours = $NumberOfHours;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApproved()
    {
      return $this->Approved;
    }

    /**
     * @param boolean $Approved
     * @return \Economic\TimeEntryData
     */
    public function setApproved($Approved)
    {
      $this->Approved = $Approved;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPrice()
    {
      return $this->SalesPrice;
    }

    /**
     * @param float $SalesPrice
     * @return \Economic\TimeEntryData
     */
    public function setSalesPrice($SalesPrice)
    {
      $this->SalesPrice = $SalesPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPrice()
    {
      return $this->CostPrice;
    }

    /**
     * @param float $CostPrice
     * @return \Economic\TimeEntryData
     */
    public function setCostPrice($CostPrice)
    {
      $this->CostPrice = $CostPrice;
      return $this;
    }

}
