<?php

namespace Economic;

class ScannedDocument_GetPageCountResponse
{

    /**
     * @var int $ScannedDocument_GetPageCountResult
     */
    protected $ScannedDocument_GetPageCountResult = null;

    /**
     * @param int $ScannedDocument_GetPageCountResult
     */
    public function __construct($ScannedDocument_GetPageCountResult)
    {
      $this->ScannedDocument_GetPageCountResult = $ScannedDocument_GetPageCountResult;
    }

    /**
     * @return int
     */
    public function getScannedDocument_GetPageCountResult()
    {
      return $this->ScannedDocument_GetPageCountResult;
    }

    /**
     * @param int $ScannedDocument_GetPageCountResult
     * @return \Economic\ScannedDocument_GetPageCountResponse
     */
    public function setScannedDocument_GetPageCountResult($ScannedDocument_GetPageCountResult)
    {
      $this->ScannedDocument_GetPageCountResult = $ScannedDocument_GetPageCountResult;
      return $this;
    }

}
