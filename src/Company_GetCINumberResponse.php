<?php

namespace Economic;

class Company_GetCINumberResponse
{

    /**
     * @var string $Company_GetCINumberResult
     */
    protected $Company_GetCINumberResult = null;

    /**
     * @param string $Company_GetCINumberResult
     */
    public function __construct($Company_GetCINumberResult)
    {
      $this->Company_GetCINumberResult = $Company_GetCINumberResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetCINumberResult()
    {
      return $this->Company_GetCINumberResult;
    }

    /**
     * @param string $Company_GetCINumberResult
     * @return \Economic\Company_GetCINumberResponse
     */
    public function setCompany_GetCINumberResult($Company_GetCINumberResult)
    {
      $this->Company_GetCINumberResult = $Company_GetCINumberResult;
      return $this;
    }

}
