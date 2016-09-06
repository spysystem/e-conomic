<?php

namespace Economic;

class Debtor_GetEmailResponse
{

    /**
     * @var string $Debtor_GetEmailResult
     */
    protected $Debtor_GetEmailResult = null;

    /**
     * @param string $Debtor_GetEmailResult
     */
    public function __construct($Debtor_GetEmailResult)
    {
      $this->Debtor_GetEmailResult = $Debtor_GetEmailResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetEmailResult()
    {
      return $this->Debtor_GetEmailResult;
    }

    /**
     * @param string $Debtor_GetEmailResult
     * @return \Economic\Debtor_GetEmailResponse
     */
    public function setDebtor_GetEmailResult($Debtor_GetEmailResult)
    {
      $this->Debtor_GetEmailResult = $Debtor_GetEmailResult;
      return $this;
    }

}
