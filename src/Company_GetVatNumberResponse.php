<?php

namespace Economic;

class Company_GetVatNumberResponse
{

    /**
     * @var string $Company_GetVatNumberResult
     */
    protected $Company_GetVatNumberResult = null;

    /**
     * @param string $Company_GetVatNumberResult
     */
    public function __construct($Company_GetVatNumberResult)
    {
      $this->Company_GetVatNumberResult = $Company_GetVatNumberResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetVatNumberResult()
    {
      return $this->Company_GetVatNumberResult;
    }

    /**
     * @param string $Company_GetVatNumberResult
     * @return \Economic\Company_GetVatNumberResponse
     */
    public function setCompany_GetVatNumberResult($Company_GetVatNumberResult)
    {
      $this->Company_GetVatNumberResult = $Company_GetVatNumberResult;
      return $this;
    }

}
