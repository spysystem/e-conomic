<?php

namespace Economic;

class Project_GetMileageEntriesByDate
{

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    /**
     * @param ProjectHandle $projectHandle
     * @param \DateTime $from
     * @param \DateTime $to
     */
    public function __construct($projectHandle, \DateTime $from, \DateTime $to)
    {
      $this->projectHandle = $projectHandle;
      $this->from = $from->format(\DateTime::ATOM);
      $this->to = $to->format(\DateTime::ATOM);
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
     * @return \Economic\Project_GetMileageEntriesByDate
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $from
     * @return \Economic\Project_GetMileageEntriesByDate
     */
    public function setFrom(\DateTime $from)
    {
      $this->from = $from->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      if ($this->to == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->to);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $to
     * @return \Economic\Project_GetMileageEntriesByDate
     */
    public function setTo(\DateTime $to)
    {
      $this->to = $to->format(\DateTime::ATOM);
      return $this;
    }

}
