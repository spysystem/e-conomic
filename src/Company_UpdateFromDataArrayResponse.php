<?php

namespace Economic;

class Company_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCompanyHandle $Company_UpdateFromDataArrayResult
     */
    protected $Company_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCompanyHandle $Company_UpdateFromDataArrayResult
     */
    public function __construct($Company_UpdateFromDataArrayResult)
    {
      $this->Company_UpdateFromDataArrayResult = $Company_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCompanyHandle
     */
    public function getCompany_UpdateFromDataArrayResult()
    {
      return $this->Company_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCompanyHandle $Company_UpdateFromDataArrayResult
     * @return \Economic\Company_UpdateFromDataArrayResponse
     */
    public function setCompany_UpdateFromDataArrayResult($Company_UpdateFromDataArrayResult)
    {
      $this->Company_UpdateFromDataArrayResult = $Company_UpdateFromDataArrayResult;
      return $this;
    }

}
