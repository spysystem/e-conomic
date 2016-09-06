<?php

namespace Economic;

class Creditor_GetCountyResponse
{

    /**
     * @var string $Creditor_GetCountyResult
     */
    protected $Creditor_GetCountyResult = null;

    /**
     * @param string $Creditor_GetCountyResult
     */
    public function __construct($Creditor_GetCountyResult)
    {
      $this->Creditor_GetCountyResult = $Creditor_GetCountyResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetCountyResult()
    {
      return $this->Creditor_GetCountyResult;
    }

    /**
     * @param string $Creditor_GetCountyResult
     * @return \Economic\Creditor_GetCountyResponse
     */
    public function setCreditor_GetCountyResult($Creditor_GetCountyResult)
    {
      $this->Creditor_GetCountyResult = $Creditor_GetCountyResult;
      return $this;
    }

}
