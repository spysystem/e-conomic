<?php

namespace Economic;

class Creditor_GetEmailResponse
{

    /**
     * @var string $Creditor_GetEmailResult
     */
    protected $Creditor_GetEmailResult = null;

    /**
     * @param string $Creditor_GetEmailResult
     */
    public function __construct($Creditor_GetEmailResult)
    {
      $this->Creditor_GetEmailResult = $Creditor_GetEmailResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetEmailResult()
    {
      return $this->Creditor_GetEmailResult;
    }

    /**
     * @param string $Creditor_GetEmailResult
     * @return \Economic\Creditor_GetEmailResponse
     */
    public function setCreditor_GetEmailResult($Creditor_GetEmailResult)
    {
      $this->Creditor_GetEmailResult = $Creditor_GetEmailResult;
      return $this;
    }

}
