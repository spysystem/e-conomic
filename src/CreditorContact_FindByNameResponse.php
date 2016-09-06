<?php

namespace Economic;

class CreditorContact_FindByNameResponse
{

    /**
     * @var ArrayOfCreditorContactHandle $CreditorContact_FindByNameResult
     */
    protected $CreditorContact_FindByNameResult = null;

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_FindByNameResult
     */
    public function __construct($CreditorContact_FindByNameResult)
    {
      $this->CreditorContact_FindByNameResult = $CreditorContact_FindByNameResult;
    }

    /**
     * @return ArrayOfCreditorContactHandle
     */
    public function getCreditorContact_FindByNameResult()
    {
      return $this->CreditorContact_FindByNameResult;
    }

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_FindByNameResult
     * @return \Economic\CreditorContact_FindByNameResponse
     */
    public function setCreditorContact_FindByNameResult($CreditorContact_FindByNameResult)
    {
      $this->CreditorContact_FindByNameResult = $CreditorContact_FindByNameResult;
      return $this;
    }

}
