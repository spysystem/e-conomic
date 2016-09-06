<?php

namespace Economic;

class Employee_GetCostPriceByDate
{

    /**
     * @var EmployeeHandle $employeeHandle
     */
    protected $employeeHandle = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @param EmployeeHandle $employeeHandle
     * @param \DateTime $date
     */
    public function __construct($employeeHandle, \DateTime $date)
    {
      $this->employeeHandle = $employeeHandle;
      $this->date = $date->format(\DateTime::ATOM);
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
     * @return \Economic\Employee_GetCostPriceByDate
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
     * @return \Economic\Employee_GetCostPriceByDate
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

}
