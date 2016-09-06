<?php

namespace Economic;

class Debtor_GetPublicEntryNumberResponse
{

    /**
     * @var string $Debtor_GetPublicEntryNumberResult
     */
    protected $Debtor_GetPublicEntryNumberResult = null;

    /**
     * @param string $Debtor_GetPublicEntryNumberResult
     */
    public function __construct($Debtor_GetPublicEntryNumberResult)
    {
      $this->Debtor_GetPublicEntryNumberResult = $Debtor_GetPublicEntryNumberResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetPublicEntryNumberResult()
    {
      return $this->Debtor_GetPublicEntryNumberResult;
    }

    /**
     * @param string $Debtor_GetPublicEntryNumberResult
     * @return \Economic\Debtor_GetPublicEntryNumberResponse
     */
    public function setDebtor_GetPublicEntryNumberResult($Debtor_GetPublicEntryNumberResult)
    {
      $this->Debtor_GetPublicEntryNumberResult = $Debtor_GetPublicEntryNumberResult;
      return $this;
    }

}
