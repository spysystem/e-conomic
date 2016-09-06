<?php

namespace Economic;

class ScannedDocument_GetNoteResponse
{

    /**
     * @var string $ScannedDocument_GetNoteResult
     */
    protected $ScannedDocument_GetNoteResult = null;

    /**
     * @param string $ScannedDocument_GetNoteResult
     */
    public function __construct($ScannedDocument_GetNoteResult)
    {
      $this->ScannedDocument_GetNoteResult = $ScannedDocument_GetNoteResult;
    }

    /**
     * @return string
     */
    public function getScannedDocument_GetNoteResult()
    {
      return $this->ScannedDocument_GetNoteResult;
    }

    /**
     * @param string $ScannedDocument_GetNoteResult
     * @return \Economic\ScannedDocument_GetNoteResponse
     */
    public function setScannedDocument_GetNoteResult($ScannedDocument_GetNoteResult)
    {
      $this->ScannedDocument_GetNoteResult = $ScannedDocument_GetNoteResult;
      return $this;
    }

}
