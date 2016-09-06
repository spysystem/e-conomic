<?php

namespace Economic;

class Employee_GetTimeEntriesOnCurrentUserByDate
{

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    /**
     * @param \DateTime $from
     * @param \DateTime $to
     */
    public function __construct(\DateTime $from, \DateTime $to)
    {
      $this->from = $from->format(\DateTime::ATOM);
      $this->to = $to->format(\DateTime::ATOM);
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
     * @return \Economic\Employee_GetTimeEntriesOnCurrentUserByDate
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
     * @return \Economic\Employee_GetTimeEntriesOnCurrentUserByDate
     */
    public function setTo(\DateTime $to)
    {
      $this->to = $to->format(\DateTime::ATOM);
      return $this;
    }

}
