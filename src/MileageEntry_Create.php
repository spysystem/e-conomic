<?php

namespace Economic;

class MileageEntry_Create
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var string $startLocation
     */
    protected $startLocation = null;

    /**
     * @var string $endLocation
     */
    protected $endLocation = null;

    /**
     * @var float $distance
     */
    protected $distance = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param EmployeeHandle $employeeHandle
     * @param \DateTime $date
     * @param string $startLocation
     * @param string $endLocation
     * @param float $distance
     */
    public function __construct($projectHandle, $employeeHandle, \DateTime $date, $startLocation, $endLocation, $distance)
    {
      $this->projectHandle = $projectHandle;
      $this->employeeHandle = $employeeHandle;
      $this->date = $date->format(\DateTime::ATOM);
      $this->startLocation = $startLocation;
      $this->endLocation = $endLocation;
      $this->distance = $distance;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->projectHandle;
    }

    /**
     * @param ProjectHandle $projectHandle
     * @return \Economic\MileageEntry_Create
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployeeHandle()
    {
      return $this->employeeHandle;
    }

    /**
     * @param EmployeeHandle $employeeHandle
     * @return \Economic\MileageEntry_Create
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \Economic\MileageEntry_Create
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getStartLocation()
    {
      return $this->startLocation;
    }

    /**
     * @param string $startLocation
     * @return \Economic\MileageEntry_Create
     */
    public function setStartLocation($startLocation)
    {
      $this->startLocation = $startLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndLocation()
    {
      return $this->endLocation;
    }

    /**
     * @param string $endLocation
     * @return \Economic\MileageEntry_Create
     */
    public function setEndLocation($endLocation)
    {
      $this->endLocation = $endLocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
      return $this->distance;
    }

    /**
     * @param float $distance
     * @return \Economic\MileageEntry_Create
     */
    public function setDistance($distance)
    {
      $this->distance = $distance;
      return $this;
    }

}
