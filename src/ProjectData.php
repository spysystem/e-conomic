<?php

namespace Economic;

class ProjectData
{

    /**
     * @var ProjectHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ProjectGroupHandle $ProjectGroupHandle
     */
    protected $ProjectGroupHandle = null;

    /**
     * @var boolean $IsMainProject
     */
    protected $IsMainProject = null;

    /**
     * @var ProjectHandle $MainProjectHandle
     */
    protected $MainProjectHandle = null;

    /**
     * @var DebtorHandle $DebtorHandle
     */
    protected $DebtorHandle = null;

    /**
     * @var EmployeeHandle $ResponsibleHandle
     */
    protected $ResponsibleHandle = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @var float $Mileage
     */
    protected $Mileage = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @param int $Number
     * @param boolean $IsMainProject
     * @param boolean $IsAccessible
     * @param float $Mileage
     * @param boolean $IsClosed
     */
    public function __construct($Number, $IsMainProject, $IsAccessible, $Mileage, $IsClosed)
    {
      $this->Number = $Number;
      $this->IsMainProject = $IsMainProject;
      $this->IsAccessible = $IsAccessible;
      $this->Mileage = $Mileage;
      $this->IsClosed = $IsClosed;
    }

    /**
     * @return ProjectHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ProjectHandle $Handle
     * @return \Economic\ProjectData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
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
     * @return \Economic\ProjectData
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
     * @return \Economic\ProjectData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getProjectGroupHandle()
    {
      return $this->ProjectGroupHandle;
    }

    /**
     * @param ProjectGroupHandle $ProjectGroupHandle
     * @return \Economic\ProjectData
     */
    public function setProjectGroupHandle($ProjectGroupHandle)
    {
      $this->ProjectGroupHandle = $ProjectGroupHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMainProject()
    {
      return $this->IsMainProject;
    }

    /**
     * @param boolean $IsMainProject
     * @return \Economic\ProjectData
     */
    public function setIsMainProject($IsMainProject)
    {
      $this->IsMainProject = $IsMainProject;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getMainProjectHandle()
    {
      return $this->MainProjectHandle;
    }

    /**
     * @param ProjectHandle $MainProjectHandle
     * @return \Economic\ProjectData
     */
    public function setMainProjectHandle($MainProjectHandle)
    {
      $this->MainProjectHandle = $MainProjectHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->DebtorHandle;
    }

    /**
     * @param DebtorHandle $DebtorHandle
     * @return \Economic\ProjectData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getResponsibleHandle()
    {
      return $this->ResponsibleHandle;
    }

    /**
     * @param EmployeeHandle $ResponsibleHandle
     * @return \Economic\ProjectData
     */
    public function setResponsibleHandle($ResponsibleHandle)
    {
      $this->ResponsibleHandle = $ResponsibleHandle;
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
     * @return \Economic\ProjectData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAccessible()
    {
      return $this->IsAccessible;
    }

    /**
     * @param boolean $IsAccessible
     * @return \Economic\ProjectData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

    /**
     * @return float
     */
    public function getMileage()
    {
      return $this->Mileage;
    }

    /**
     * @param float $Mileage
     * @return \Economic\ProjectData
     */
    public function setMileage($Mileage)
    {
      $this->Mileage = $Mileage;
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
     * @return \Economic\ProjectData
     */
    public function setIsClosed($IsClosed)
    {
      $this->IsClosed = $IsClosed;
      return $this;
    }

}
