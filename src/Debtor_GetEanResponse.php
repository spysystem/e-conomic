<?php

namespace Economic;

class Debtor_GetEanResponse
{

    /**
     * @var string $Debtor_GetEanResult
     */
    protected $Debtor_GetEanResult = null;

    /**
     * @param string $Debtor_GetEanResult
     */
    public function __construct($Debtor_GetEanResult)
    {
      $this->Debtor_GetEanResult = $Debtor_GetEanResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetEanResult()
    {
      return $this->Debtor_GetEanResult;
    }

    /**
     * @param string $Debtor_GetEanResult
     * @return \Economic\Debtor_GetEanResponse
     */
    public function setDebtor_GetEanResult($Debtor_GetEanResult)
    {
      $this->Debtor_GetEanResult = $Debtor_GetEanResult;
      return $this;
    }

}
