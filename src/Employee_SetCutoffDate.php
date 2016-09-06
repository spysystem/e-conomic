<?php

namespace Economic;

class Employee_SetCutoffDate
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param EmployeeHandle $employeeHandle
     * @param \DateTime $value
     */
    public function __construct($employeeHandle, \DateTime $value)
    {
      $this->employeeHandle = $employeeHandle;
      $this->value = $value->format(\DateTime::ATOM);
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
     * @return \Economic\Employee_SetCutoffDate
     */
    public function setEmployeeHandle($employeeHandle)
    {
      $this->employeeHandle = $employeeHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\Employee_SetCutoffDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
