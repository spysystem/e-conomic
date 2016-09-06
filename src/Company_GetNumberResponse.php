<?php

namespace Economic;

class Company_GetNumberResponse
{

    /**
     * @var string $Company_GetNumberResult
     */
    protected $Company_GetNumberResult = null;

    /**
     * @param string $Company_GetNumberResult
     */
    public function __construct($Company_GetNumberResult)
    {
      $this->Company_GetNumberResult = $Company_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetNumberResult()
    {
      return $this->Company_GetNumberResult;
    }

    /**
     * @param string $Company_GetNumberResult
     * @return \Economic\Company_GetNumberResponse
     */
    public function setCompany_GetNumberResult($Company_GetNumberResult)
    {
      $this->Company_GetNumberResult = $Company_GetNumberResult;
      return $this;
    }

}
