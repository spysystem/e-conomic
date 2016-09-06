<?php

namespace Economic;

class Project_Create
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var ProjectGroupHandle $projectGroupHandle
     */
    protected $projectGroupHandle = null;

    /**
     * @var boolean $isMainProject
     */
    protected $isMainProject = null;

    /**
     * @var ProjectHandle $mainProjectHandle
     */
    protected $mainProjectHandle = null;

    /**
     * @var DebtorHandle $debtorHandle
     */
    protected $debtorHandle = null;

    /**
     * @var EmployeeHandle $responsibleHandle
     */
    protected $responsibleHandle = null;

    /**
     * @param int $number
     * @param string $name
     * @param ProjectGroupHandle $projectGroupHandle
     * @param boolean $isMainProject
     * @param ProjectHandle $mainProjectHandle
     * @param DebtorHandle $debtorHandle
     * @param EmployeeHandle $responsibleHandle
     */
    public function __construct($number, $name, $projectGroupHandle, $isMainProject, $mainProjectHandle, $debtorHandle, $responsibleHandle)
    {
      $this->number = $number;
      $this->name = $name;
      $this->projectGroupHandle = $projectGroupHandle;
      $this->isMainProject = $isMainProject;
      $this->mainProjectHandle = $mainProjectHandle;
      $this->debtorHandle = $debtorHandle;
      $this->responsibleHandle = $responsibleHandle;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\Project_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\Project_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return ProjectGroupHandle
     */
    public function getProjectGroupHandle()
    {
      return $this->projectGroupHandle;
    }

    /**
     * @param ProjectGroupHandle $projectGroupHandle
     * @return \Economic\Project_Create
     */
    public function setProjectGroupHandle($projectGroupHandle)
    {
      $this->projectGroupHandle = $projectGroupHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMainProject()
    {
      return $this->isMainProject;
    }

    /**
     * @param boolean $isMainProject
     * @return \Economic\Project_Create
     */
    public function setIsMainProject($isMainProject)
    {
      $this->isMainProject = $isMainProject;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getMainProjectHandle()
    {
      return $this->mainProjectHandle;
    }

    /**
     * @param ProjectHandle $mainProjectHandle
     * @return \Economic\Project_Create
     */
    public function setMainProjectHandle($mainProjectHandle)
    {
      $this->mainProjectHandle = $mainProjectHandle;
      return $this;
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
     * @return \Economic\Project_Create
     */
    public function setDebtorHandle($debtorHandle)
    {
      $this->debtorHandle = $debtorHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getResponsibleHandle()
    {
      return $this->responsibleHandle;
    }

    /**
     * @param EmployeeHandle $responsibleHandle
     * @return \Economic\Project_Create
     */
    public function setResponsibleHandle($responsibleHandle)
    {
      $this->responsibleHandle = $responsibleHandle;
      return $this;
    }

}
