<?php

namespace Economic;

class Entry_GetDocumentResponse
{

    /**
     * @var ScannedDocumentHandle $Entry_GetDocumentResult
     */
    protected $Entry_GetDocumentResult = null;

    /**
     * @param ScannedDocumentHandle $Entry_GetDocumentResult
     */
    public function __construct($Entry_GetDocumentResult)
    {
      $this->Entry_GetDocumentResult = $Entry_GetDocumentResult;
    }

    /**
     * @return ScannedDocumentHandle
     */
    public function getEntry_GetDocumentResult()
    {
      return $this->Entry_GetDocumentResult;
    }

    /**
     * @param ScannedDocumentHandle $Entry_GetDocumentResult
     * @return \Economic\Entry_GetDocumentResponse
     */
    public function setEntry_GetDocumentResult($Entry_GetDocumentResult)
    {
      $this->Entry_GetDocumentResult = $Entry_GetDocumentResult;
      return $this;
    }

}
