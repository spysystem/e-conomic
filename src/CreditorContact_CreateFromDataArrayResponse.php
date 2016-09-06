<?php

namespace Economic;

class CreditorContact_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfCreditorContactHandle $CreditorContact_CreateFromDataArrayResult
     */
    protected $CreditorContact_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_CreateFromDataArrayResult
     */
    public function __construct($CreditorContact_CreateFromDataArrayResult)
    {
      $this->CreditorContact_CreateFromDataArrayResult = $CreditorContact_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorContactHandle
     */
    public function getCreditorContact_CreateFromDataArrayResult()
    {
      return $this->CreditorContact_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_CreateFromDataArrayResult
     * @return \Economic\CreditorContact_CreateFromDataArrayResponse
     */
    public function setCreditorContact_CreateFromDataArrayResult($CreditorContact_CreateFromDataArrayResult)
    {
      $this->CreditorContact_CreateFromDataArrayResult = $CreditorContact_CreateFromDataArrayResult;
      return $this;
    }

}
