<?php

namespace Economic;

class Company_GetNameResponse
{

    /**
     * @var string $Company_GetNameResult
     */
    protected $Company_GetNameResult = null;

    /**
     * @param string $Company_GetNameResult
     */
    public function __construct($Company_GetNameResult)
    {
      $this->Company_GetNameResult = $Company_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetNameResult()
    {
      return $this->Company_GetNameResult;
    }

    /**
     * @param string $Company_GetNameResult
     * @return \Economic\Company_GetNameResponse
     */
    public function setCompany_GetNameResult($Company_GetNameResult)
    {
      $this->Company_GetNameResult = $Company_GetNameResult;
      return $this;
    }

}
