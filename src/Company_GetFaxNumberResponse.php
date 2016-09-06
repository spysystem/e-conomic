<?php

namespace Economic;

class Company_GetFaxNumberResponse
{

    /**
     * @var string $Company_GetFaxNumberResult
     */
    protected $Company_GetFaxNumberResult = null;

    /**
     * @param string $Company_GetFaxNumberResult
     */
    public function __construct($Company_GetFaxNumberResult)
    {
      $this->Company_GetFaxNumberResult = $Company_GetFaxNumberResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetFaxNumberResult()
    {
      return $this->Company_GetFaxNumberResult;
    }

    /**
     * @param string $Company_GetFaxNumberResult
     * @return \Economic\Company_GetFaxNumberResponse
     */
    public function setCompany_GetFaxNumberResult($Company_GetFaxNumberResult)
    {
      $this->Company_GetFaxNumberResult = $Company_GetFaxNumberResult;
      return $this;
    }

}
