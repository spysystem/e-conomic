<?php

namespace Economic;

class Employee_GetMileageEntriesByDateResponse
{

    /**
     * @var ArrayOfMileageEntryHandle $Employee_GetMileageEntriesByDateResult
     */
    protected $Employee_GetMileageEntriesByDateResult = null;

    /**
     * @param ArrayOfMileageEntryHandle $Employee_GetMileageEntriesByDateResult
     */
    public function __construct($Employee_GetMileageEntriesByDateResult)
    {
      $this->Employee_GetMileageEntriesByDateResult = $Employee_GetMileageEntriesByDateResult;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getEmployee_GetMileageEntriesByDateResult()
    {
      return $this->Employee_GetMileageEntriesByDateResult;
    }

    /**
     * @param ArrayOfMileageEntryHandle $Employee_GetMileageEntriesByDateResult
     * @return \Economic\Employee_GetMileageEntriesByDateResponse
     */
    public function setEmployee_GetMileageEntriesByDateResult($Employee_GetMileageEntriesByDateResult)
    {
      $this->Employee_GetMileageEntriesByDateResult = $Employee_GetMileageEntriesByDateResult;
      return $this;
    }

}
