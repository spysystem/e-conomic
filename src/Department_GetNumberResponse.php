<?php

namespace Economic;

class Department_GetNumberResponse
{

    /**
     * @var int $Department_GetNumberResult
     */
    protected $Department_GetNumberResult = null;

    /**
     * @param int $Department_GetNumberResult
     */
    public function __construct($Department_GetNumberResult)
    {
      $this->Department_GetNumberResult = $Department_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getDepartment_GetNumberResult()
    {
      return $this->Department_GetNumberResult;
    }

    /**
     * @param int $Department_GetNumberResult
     * @return \Economic\Department_GetNumberResponse
     */
    public function setDepartment_GetNumberResult($Department_GetNumberResult)
    {
      $this->Department_GetNumberResult = $Department_GetNumberResult;
      return $this;
    }

}
