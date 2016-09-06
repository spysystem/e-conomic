<?php

namespace Economic;

class DocumentArchiveCategory_GetDataResponse
{

    /**
     * @var DocumentArchiveCategoryData $DocumentArchiveCategory_GetDataResult
     */
    protected $DocumentArchiveCategory_GetDataResult = null;

    /**
     * @param DocumentArchiveCategoryData $DocumentArchiveCategory_GetDataResult
     */
    public function __construct($DocumentArchiveCategory_GetDataResult)
    {
      $this->DocumentArchiveCategory_GetDataResult = $DocumentArchiveCategory_GetDataResult;
    }

    /**
     * @return DocumentArchiveCategoryData
     */
    public function getDocumentArchiveCategory_GetDataResult()
    {
      return $this->DocumentArchiveCategory_GetDataResult;
    }

    /**
     * @param DocumentArchiveCategoryData $DocumentArchiveCategory_GetDataResult
     * @return \Economic\DocumentArchiveCategory_GetDataResponse
     */
    public function setDocumentArchiveCategory_GetDataResult($DocumentArchiveCategory_GetDataResult)
    {
      $this->DocumentArchiveCategory_GetDataResult = $DocumentArchiveCategory_GetDataResult;
      return $this;
    }

}
