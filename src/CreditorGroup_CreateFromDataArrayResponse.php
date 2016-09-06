<?php

namespace Economic;

class CreditorGroup_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCreditorGroupHandle $CreditorGroup_CreateFromDataArrayResult
     */
    protected $CreditorGroup_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_CreateFromDataArrayResult
     */
    public function __construct($CreditorGroup_CreateFromDataArrayResult)
    {
      $this->CreditorGroup_CreateFromDataArrayResult = $CreditorGroup_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorGroupHandle
     */
    public function getCreditorGroup_CreateFromDataArrayResult()
    {
      return $this->CreditorGroup_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_CreateFromDataArrayResult
     * @return \Economic\CreditorGroup_CreateFromDataArrayResponse
     */
    public function setCreditorGroup_CreateFromDataArrayResult($CreditorGroup_CreateFromDataArrayResult)
    {
      $this->CreditorGroup_CreateFromDataArrayResult = $CreditorGroup_CreateFromDataArrayResult;
      return $this;
    }

}
