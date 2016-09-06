<?php

namespace Economic;

class DistributionKey_GetDepartmentsResponse
{

    /**
     * @var ArrayOfDepartmentHandle $DistributionKey_GetDepartmentsResult
     */
    protected $DistributionKey_GetDepartmentsResult = null;

    /**
     * @param ArrayOfDepartmentHandle $DistributionKey_GetDepartmentsResult
     */
    public function __construct($DistributionKey_GetDepartmentsResult)
    {
      $this->DistributionKey_GetDepartmentsResult = $DistributionKey_GetDepartmentsResult;
    }

    /**
     * @return ArrayOfDepartmentHandle
     */
    public function getDistributionKey_GetDepartmentsResult()
    {
      return $this->DistributionKey_GetDepartmentsResult;
    }

    /**
     * @param ArrayOfDepartmentHandle $DistributionKey_GetDepartmentsResult
     * @return \Economic\DistributionKey_GetDepartmentsResponse
     */
    public function setDistributionKey_GetDepartmentsResult($DistributionKey_GetDepartmentsResult)
    {
      $this->DistributionKey_GetDepartmentsResult = $DistributionKey_GetDepartmentsResult;
      return $this;
    }

}
