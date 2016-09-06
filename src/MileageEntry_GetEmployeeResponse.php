<?php

namespace Economic;

class MileageEntry_GetEmployeeResponse
{

    /**
     * @var EmployeeHandle $MileageEntry_GetEmployeeResult
     */
    protected $MileageEntry_GetEmployeeResult = null;

    /**
     * @param EmployeeHandle $MileageEntry_GetEmployeeResult
     */
    public function __construct($MileageEntry_GetEmployeeResult)
    {
      $this->MileageEntry_GetEmployeeResult = $MileageEntry_GetEmployeeResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getMileageEntry_GetEmployeeResult()
    {
      return $this->MileageEntry_GetEmployeeResult;
    }

    /**
     * @param EmployeeHandle $MileageEntry_GetEmployeeResult
     * @return \Economic\MileageEntry_GetEmployeeResponse
     */
    public function setMileageEntry_GetEmployeeResult($MileageEntry_GetEmployeeResult)
    {
      $this->MileageEntry_GetEmployeeResult = $MileageEntry_GetEmployeeResult;
      return $this;
    }

}
