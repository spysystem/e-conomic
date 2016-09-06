<?php

namespace Economic;

class CreditorContact_GetNameResponse
{

    /**
     * @var string $CreditorContact_GetNameResult
     */
    protected $CreditorContact_GetNameResult = null;

    /**
     * @param string $CreditorContact_GetNameResult
     */
    public function __construct($CreditorContact_GetNameResult)
    {
      $this->CreditorContact_GetNameResult = $CreditorContact_GetNameResult;
    }

    /**
     * @return string
     */
    public function getCreditorContact_GetNameResult()
    {
      return $this->CreditorContact_GetNameResult;
    }

    /**
     * @param string $CreditorContact_GetNameResult
     * @return \Economic\CreditorContact_GetNameResponse
     */
    public function setCreditorContact_GetNameResult($CreditorContact_GetNameResult)
    {
      $this->CreditorContact_GetNameResult = $CreditorContact_GetNameResult;
      return $this;
    }

}
