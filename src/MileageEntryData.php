<?php

namespace Economic;

class MileageEntryData
{

    /**
     * @var MileageEntryHandle $Handle
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
     * @var EmployeeHandle $EmployeeHandle
     */
    protected $EmployeeHandle = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $StartLocation
     */
    protected $StartLocation = null;

    /**
     * @var string $EndLocation
     */
    protected $EndLocation = null;

    /**
     * @var float $Distance
     */
    protected $Distance = null;

    /**
     * @var boolean $Approved
     */
    protected $Approved = null;

    /**
     * @var float $SalesRate
     */
    protected $SalesRate = null;

    /**
     * @var float $CostRate
     */
    protected $CostRate = null;

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
     * @param float $Distance
     * @param boolean $Approved
     */
    public function __construct($Id, \DateTime $Date, $Distance, $Approved)
    {
      $this->Id = $Id;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->Distance = $Distance;
      $this->Approved = $Approved;
    }

    /**
     * @return MileageEntryHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param MileageEntryHandle $Handle
     * @return \Economic\MileageEntryData
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
     * @return \Economic\MileageEntryData
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
     * @return \Economic\MileageEntryData
     */
    public function setProjectHandle($ProjectHandle)
    {
      $this->ProjectHandle = $ProjectHandle;
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
     * @return \Economic\MileageEntryData
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
     * @return \Economic\MileageEntryData
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getStartLocation()
    {
      return $this->StartLocation;
    }

    /**
     * @param string $StartLocation
     * @return \Economic\MileageEntryData
     */
    public function setStartLocation($StartLocation)
    {
      $this->StartLocation = $StartLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndLocation()
    {
      return $this->EndLocation;
    }

    /**
     * @param string $EndLocation
     * @return \Economic\MileageEntryData
     */
    public function setEndLocation($EndLocation)
    {
      $this->EndLocation = $EndLocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param float $Distance
     * @return \Economic\MileageEntryData
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
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
     * @return \Economic\MileageEntryData
     */
    public function setApproved($Approved)
    {
      $this->Approved = $Approved;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesRate()
    {
      return $this->SalesRate;
    }

    /**
     * @param float $SalesRate
     * @return \Economic\MileageEntryData
     */
    public function setSalesRate($SalesRate)
    {
      $this->SalesRate = $SalesRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostRate()
    {
      return $this->CostRate;
    }

    /**
     * @param float $CostRate
     * @return \Economic\MileageEntryData
     */
    public function setCostRate($CostRate)
    {
      $this->CostRate = $CostRate;
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
     * @return \Economic\MileageEntryData
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
     * @return \Economic\MileageEntryData
     */
    public function setCostPrice($CostPrice)
    {
      $this->CostPrice = $CostPrice;
      return $this;
    }

}
