<?php

namespace Economic;

class TimeEntry_CreateOnCurrentUser
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
     * @param \DateTime $date
     * @param string $text
     * @param float $numberOfHours
     */
    public function __construct($projectHandle, $activityHandle, \DateTime $date, $text, $numberOfHours)
    {
      $this->projectHandle = $projectHandle;
      $this->activityHandle = $activityHandle;
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
     * @return \Economic\TimeEntry_CreateOnCurrentUser
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
     * @return \Economic\TimeEntry_CreateOnCurrentUser
     */
    public function setActivityHandle($activityHandle)
    {
      $this->activityHandle = $activityHandle;
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
     * @return \Economic\TimeEntry_CreateOnCurrentUser
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
     * @return \Economic\TimeEntry_CreateOnCurrentUser
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
     * @return \Economic\TimeEntry_CreateOnCurrentUser
     */
    public function setNumberOfHours($numberOfHours)
    {
      $this->numberOfHours = $numberOfHours;
      return $this;
    }

}
