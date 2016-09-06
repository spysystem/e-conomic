<?php

namespace Economic;

class DocumentArchiveCategory_CreateFromDataResponse
{

    /**
     * @var DocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateFromDataResult
     */
    protected $DocumentArchiveCategory_CreateFromDataResult = null;

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateFromDataResult
     */
    public function __construct($DocumentArchiveCategory_CreateFromDataResult)
    {
      $this->DocumentArchiveCategory_CreateFromDataResult = $DocumentArchiveCategory_CreateFromDataResult;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_CreateFromDataResult()
    {
      return $this->DocumentArchiveCategory_CreateFromDataResult;
    }

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateFromDataResult
     * @return \Economic\DocumentArchiveCategory_CreateFromDataResponse
     */
    public function setDocumentArchiveCategory_CreateFromDataResult($DocumentArchiveCategory_CreateFromDataResult)
    {
      $this->DocumentArchiveCategory_CreateFromDataResult = $DocumentArchiveCategory_CreateFromDataResult;
      return $this;
    }

}
