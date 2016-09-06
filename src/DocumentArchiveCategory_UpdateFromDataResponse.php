<?php

namespace Economic;

class DocumentArchiveCategory_UpdateFromDataResponse
{

    /**
     * @var DocumentArchiveCategoryHandle $DocumentArchiveCategory_UpdateFromDataResult
     */
    protected $DocumentArchiveCategory_UpdateFromDataResult = null;

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_UpdateFromDataResult
     */
    public function __construct($DocumentArchiveCategory_UpdateFromDataResult)
    {
      $this->DocumentArchiveCategory_UpdateFromDataResult = $DocumentArchiveCategory_UpdateFromDataResult;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_UpdateFromDataResult()
    {
      return $this->DocumentArchiveCategory_UpdateFromDataResult;
    }

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_UpdateFromDataResult
     * @return \Economic\DocumentArchiveCategory_UpdateFromDataResponse
     */
    public function setDocumentArchiveCategory_UpdateFromDataResult($DocumentArchiveCategory_UpdateFromDataResult)
    {
      $this->DocumentArchiveCategory_UpdateFromDataResult = $DocumentArchiveCategory_UpdateFromDataResult;
      return $this;
    }

}
