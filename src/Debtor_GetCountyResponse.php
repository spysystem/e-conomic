<?php

namespace Economic;

class Debtor_GetCountyResponse
{

    /**
     * @var string $Debtor_GetCountyResult
     */
    protected $Debtor_GetCountyResult = null;

    /**
     * @param string $Debtor_GetCountyResult
     */
    public function __construct($Debtor_GetCountyResult)
    {
      $this->Debtor_GetCountyResult = $Debtor_GetCountyResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetCountyResult()
    {
      return $this->Debtor_GetCountyResult;
    }

    /**
     * @param string $Debtor_GetCountyResult
     * @return \Economic\Debtor_GetCountyResponse
     */
    public function setDebtor_GetCountyResult($Debtor_GetCountyResult)
    {
      $this->Debtor_GetCountyResult = $Debtor_GetCountyResult;
      return $this;
    }

}
