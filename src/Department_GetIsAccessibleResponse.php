<?php

namespace Economic;

class Department_GetIsAccessibleResponse
{

    /**
     * @var boolean $Department_GetIsAccessibleResult
     */
    protected $Department_GetIsAccessibleResult = null;

    /**
     * @param boolean $Department_GetIsAccessibleResult
     */
    public function __construct($Department_GetIsAccessibleResult)
    {
      $this->Department_GetIsAccessibleResult = $Department_GetIsAccessibleResult;
    }

    /**
     * @return boolean
     */
    public function getDepartment_GetIsAccessibleResult()
    {
      return $this->Department_GetIsAccessibleResult;
    }

    /**
     * @param boolean $Department_GetIsAccessibleResult
     * @return \Economic\Department_GetIsAccessibleResponse
     */
    public function setDepartment_GetIsAccessibleResult($Department_GetIsAccessibleResult)
    {
      $this->Department_GetIsAccessibleResult = $Department_GetIsAccessibleResult;
      return $this;
    }

}
