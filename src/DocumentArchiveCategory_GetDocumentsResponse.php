<?php

namespace Economic;

class DocumentArchiveCategory_GetDocumentsResponse
{

    /**
     * @var ArrayOfScannedDocumentHandle $DocumentArchiveCategory_GetDocumentsResult
     */
    protected $DocumentArchiveCategory_GetDocumentsResult = null;

    /**
     * @param ArrayOfScannedDocumentHandle $DocumentArchiveCategory_GetDocumentsResult
     */
    public function __construct($DocumentArchiveCategory_GetDocumentsResult)
    {
      $this->DocumentArchiveCategory_GetDocumentsResult = $DocumentArchiveCategory_GetDocumentsResult;
    }

    /**
     * @return ArrayOfScannedDocumentHandle
     */
    public function getDocumentArchiveCategory_GetDocumentsResult()
    {
      return $this->DocumentArchiveCategory_GetDocumentsResult;
    }

    /**
     * @param ArrayOfScannedDocumentHandle $DocumentArchiveCategory_GetDocumentsResult
     * @return \Economic\DocumentArchiveCategory_GetDocumentsResponse
     */
    public function setDocumentArchiveCategory_GetDocumentsResult($DocumentArchiveCategory_GetDocumentsResult)
    {
      $this->DocumentArchiveCategory_GetDocumentsResult = $DocumentArchiveCategory_GetDocumentsResult;
      return $this;
    }

}
