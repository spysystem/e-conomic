<?php

namespace Economic;

class TimeEntry_Create
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var ActivityHandle $activityHandle
     */
    protected $activityHandle = null;

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var string $text
     */
    protected $text = null;

    /**
     * @var float $numberOfHours
     */
    protected $numberOfHours = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param ActivityHandle $activityHandle
     * @param EmployeeHandle $employeeHandle
     * @param \DateTime $date
     * @param string $text
     * @param float $numberOfHours
     */
    public function __construct($projectHandle, $activityHandle, $employeeHandle, \DateTime $date, $text, $numberOfHours)
    {
      $this->projectHandle = $projectHandle;
      $this->activityHandle = $activityHandle;
      $this->employeeHandle = $employeeHandle;
      $this->date = $date->format(\DateTime::ATOM);
      $this->text = $text;
      $this->numberOfHours = $numberOfHours;
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
     * @return \Economic\TimeEntry_Create
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return ActivityHandle
     */
    public function getActivityHandle()
    {
      return $this->activityHandle;
    }

    /**
     * @param ActivityHandle $activityHandle
     * @return \Economic\TimeEntry_Create
     */
    public function setActivityHandle($activityHandle)
    {
      $this->activityHandle = $activityHandle;
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
     * @return \Economic\TimeEntry_Create
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
     * @return \Economic\TimeEntry_Create
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Economic\TimeEntry_Create
     */
    public function setText($text)
    {
      $this->text = $text;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfHours()
    {
      return $this->numberOfHours;
    }

    /**
     * @param float $numberOfHours
     * @return \Economic\TimeEntry_Create
     */
    public function setNumberOfHours($numberOfHours)
    {
      $this->numberOfHours = $numberOfHours;
      return $this;
    }

}
