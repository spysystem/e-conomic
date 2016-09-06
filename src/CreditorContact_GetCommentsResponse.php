<?php

namespace Economic;

class CreditorContact_GetCommentsResponse
{

    /**
     * @var string $CreditorContact_GetCommentsResult
     */
    protected $CreditorContact_GetCommentsResult = null;

    /**
     * @param string $CreditorContact_GetCommentsResult
     */
    public function __construct($CreditorContact_GetCommentsResult)
    {
      $this->CreditorContact_GetCommentsResult = $CreditorContact_GetCommentsResult;
    }

    /**
     * @return string
     */
    public function getCreditorContact_GetCommentsResult()
    {
      return $this->CreditorContact_GetCommentsResult;
    }

    /**
     * @param string $CreditorContact_GetCommentsResult
     * @return \Economic\CreditorContact_GetCommentsResponse
     */
    public function setCreditorContact_GetCommentsResult($CreditorContact_GetCommentsResult)
    {
      $this->CreditorContact_GetCommentsResult = $CreditorContact_GetCommentsResult;
      return $this;
    }

}
