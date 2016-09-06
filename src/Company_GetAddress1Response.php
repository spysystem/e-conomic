<?php

namespace Economic;

class Company_GetAddress1Response
{

    /**
     * @var string $Company_GetAddress1Result
     */
    protected $Company_GetAddress1Result = null;

    /**
     * @param string $Company_GetAddress1Result
     */
    public function __construct($Company_GetAddress1Result)
    {
      $this->Company_GetAddress1Result = $Company_GetAddress1Result;
    }

    /**
     * @return string
     */
    public function getCompany_GetAddress1Result()
    {
      return $this->Company_GetAddress1Result;
    }

    /**
     * @param string $Company_GetAddress1Result
     * @return \Economic\Company_GetAddress1Response
     */
    public function setCompany_GetAddress1Result($Company_GetAddress1Result)
    {
      $this->Company_GetAddress1Result = $Company_GetAddress1Result;
      return $this;
    }

}
