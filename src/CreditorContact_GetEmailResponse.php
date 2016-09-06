<?php

namespace Economic;

class CreditorContact_GetEmailResponse
{

    /**
     * @var string $CreditorContact_GetEmailResult
     */
    protected $CreditorContact_GetEmailResult = null;

    /**
     * @param string $CreditorContact_GetEmailResult
     */
    public function __construct($CreditorContact_GetEmailResult)
    {
      $this->CreditorContact_GetEmailResult = $CreditorContact_GetEmailResult;
    }

    /**
     * @return string
     */
    public function getCreditorContact_GetEmailResult()
    {
      return $this->CreditorContact_GetEmailResult;
    }

    /**
     * @param string $CreditorContact_GetEmailResult
     * @return \Economic\CreditorContact_GetEmailResponse
     */
    public function setCreditorContact_GetEmailResult($CreditorContact_GetEmailResult)
    {
      $this->CreditorContact_GetEmailResult = $CreditorContact_GetEmailResult;
      return $this;
    }

}
