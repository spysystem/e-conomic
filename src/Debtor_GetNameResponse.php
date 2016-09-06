<?php

namespace Economic;

class Debtor_GetNameResponse
{

    /**
     * @var string $Debtor_GetNameResult
     */
    protected $Debtor_GetNameResult = null;

    /**
     * @param string $Debtor_GetNameResult
     */
    public function __construct($Debtor_GetNameResult)
    {
      $this->Debtor_GetNameResult = $Debtor_GetNameResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetNameResult()
    {
      return $this->Debtor_GetNameResult;
    }

    /**
     * @param string $Debtor_GetNameResult
     * @return \Economic\Debtor_GetNameResponse
     */
    public function setDebtor_GetNameResult($Debtor_GetNameResult)
    {
      $this->Debtor_GetNameResult = $Debtor_GetNameResult;
      return $this;
    }

}
