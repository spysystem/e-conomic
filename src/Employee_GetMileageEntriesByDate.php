<?php

namespace Economic;

class Employee_GetMileageEntriesByDate
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    /**
     * @param EmployeeHandle $employeeHandle
     * @param \DateTime $from
     * @param \DateTime $to
     */
    public function __construct($employeeHandle, \DateTime $from, \DateTime $to)
    {
      $this->employeeHandle = $employeeHandle;
      $this->from = $from->format(\DateTime::ATOM);
      $this->to = $to->format(\DateTime::ATOM);
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
     * @return \Economic\Employee_GetMileageEntriesByDate
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
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
     * @return \Economic\Employee_GetMileageEntriesByDate
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
     * @return \Economic\Employee_GetMileageEntriesByDate
     */
    public function setTo(\DateTime $to)
    {
      $this->to = $to->format(\DateTime::ATOM);
      return $this;
    }

}
