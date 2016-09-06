<?php

namespace Economic;

class CreditorGroup_FindByNameResponse
{

    /**
     * @var ArrayOfCreditorGroupHandle $CreditorGroup_FindByNameResult
     */
    protected $CreditorGroup_FindByNameResult = null;

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_FindByNameResult
     */
    public function __construct($CreditorGroup_FindByNameResult)
    {
      $this->CreditorGroup_FindByNameResult = $CreditorGroup_FindByNameResult;
    }

    /**
     * @return ArrayOfCreditorGroupHandle
     */
    public function getCreditorGroup_FindByNameResult()
    {
      return $this->CreditorGroup_FindByNameResult;
    }

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_FindByNameResult
     * @return \Economic\CreditorGroup_FindByNameResponse
     */
    public function setCreditorGroup_FindByNameResult($CreditorGroup_FindByNameResult)
    {
      $this->CreditorGroup_FindByNameResult = $CreditorGroup_FindByNameResult;
      return $this;
    }

}
