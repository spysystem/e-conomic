<?php

namespace Economic;

class CreditorContact_GetExternalIdResponse
{

    /**
     * @var string $CreditorContact_GetExternalIdResult
     */
    protected $CreditorContact_GetExternalIdResult = null;

    /**
     * @param string $CreditorContact_GetExternalIdResult
     */
    public function __construct($CreditorContact_GetExternalIdResult)
    {
      $this->CreditorContact_GetExternalIdResult = $CreditorContact_GetExternalIdResult;
    }

    /**
     * @return string
     */
    public function getCreditorContact_GetExternalIdResult()
    {
      return $this->CreditorContact_GetExternalIdResult;
    }

    /**
     * @param string $CreditorContact_GetExternalIdResult
     * @return \Economic\CreditorContact_GetExternalIdResponse
     */
    public function setCreditorContact_GetExternalIdResult($CreditorContact_GetExternalIdResult)
    {
      $this->CreditorContact_GetExternalIdResult = $CreditorContact_GetExternalIdResult;
      return $this;
    }

}
