<?php

namespace Economic;

class Department_GetNameResponse
{

    /**
     * @var string $Department_GetNameResult
     */
    protected $Department_GetNameResult = null;

    /**
     * @param string $Department_GetNameResult
     */
    public function __construct($Department_GetNameResult)
    {
      $this->Department_GetNameResult = $Department_GetNameResult;
    }

    /**
     * @return string
     */
    public function getDepartment_GetNameResult()
    {
      return $this->Department_GetNameResult;
    }

    /**
     * @param string $Department_GetNameResult
     * @return \Economic\Department_GetNameResponse
     */
    public function setDepartment_GetNameResult($Department_GetNameResult)
    {
      $this->Department_GetNameResult = $Department_GetNameResult;
      return $this;
    }

}
