<?php

namespace Economic;

class ScannedDocument_GetNumberResponse
{

    /**
     * @var int $ScannedDocument_GetNumberResult
     */
    protected $ScannedDocument_GetNumberResult = null;

    /**
     * @param int $ScannedDocument_GetNumberResult
     */
    public function __construct($ScannedDocument_GetNumberResult)
    {
      $this->ScannedDocument_GetNumberResult = $ScannedDocument_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getScannedDocument_GetNumberResult()
    {
      return $this->ScannedDocument_GetNumberResult;
    }

    /**
     * @param int $ScannedDocument_GetNumberResult
     * @return \Economic\ScannedDocument_GetNumberResponse
     */
    public function setScannedDocument_GetNumberResult($ScannedDocument_GetNumberResult)
    {
      $this->ScannedDocument_GetNumberResult = $ScannedDocument_GetNumberResult;
      return $this;
    }

}
