<?php

namespace Economic;

class Company_GetAddress2Response
{

    /**
     * @var string $Company_GetAddress2Result
     */
    protected $Company_GetAddress2Result = null;

    /**
     * @param string $Company_GetAddress2Result
     */
    public function __construct($Company_GetAddress2Result)
    {
      $this->Company_GetAddress2Result = $Company_GetAddress2Result;
    }

    /**
     * @return string
     */
    public function getCompany_GetAddress2Result()
    {
      return $this->Company_GetAddress2Result;
    }

    /**
     * @param string $Company_GetAddress2Result
     * @return \Economic\Company_GetAddress2Response
     */
    public function setCompany_GetAddress2Result($Company_GetAddress2Result)
    {
      $this->Company_GetAddress2Result = $Company_GetAddress2Result;
      return $this;
    }

}
