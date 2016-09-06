<?php

namespace Economic;

class Employee_GetCutoffDateResponse
{

    /**
     * @var \DateTime $Employee_GetCutoffDateResult
     */
    protected $Employee_GetCutoffDateResult = null;

    /**
     * @param \DateTime $Employee_GetCutoffDateResult
     */
    public function __construct(\DateTime $Employee_GetCutoffDateResult)
    {
      $this->Employee_GetCutoffDateResult = $Employee_GetCutoffDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getEmployee_GetCutoffDateResult()
    {
      if ($this->Employee_GetCutoffDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Employee_GetCutoffDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Employee_GetCutoffDateResult
     * @return \Economic\Employee_GetCutoffDateResponse
     */
    public function setEmployee_GetCutoffDateResult(\DateTime $Employee_GetCutoffDateResult)
    {
      $this->Employee_GetCutoffDateResult = $Employee_GetCutoffDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
