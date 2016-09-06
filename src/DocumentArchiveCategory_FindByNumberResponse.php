<?php

namespace Economic;

class DocumentArchiveCategory_FindByNumberResponse
{

    /**
     * @var DocumentArchiveCategoryHandle $DocumentArchiveCategory_FindByNumberResult
     */
    protected $DocumentArchiveCategory_FindByNumberResult = null;

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_FindByNumberResult
     */
    public function __construct($DocumentArchiveCategory_FindByNumberResult)
    {
      $this->DocumentArchiveCategory_FindByNumberResult = $DocumentArchiveCategory_FindByNumberResult;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_FindByNumberResult()
    {
      return $this->DocumentArchiveCategory_FindByNumberResult;
    }

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_FindByNumberResult
     * @return \Economic\DocumentArchiveCategory_FindByNumberResponse
     */
    public function setDocumentArchiveCategory_FindByNumberResult($DocumentArchiveCategory_FindByNumberResult)
    {
      $this->DocumentArchiveCategory_FindByNumberResult = $DocumentArchiveCategory_FindByNumberResult;
      return $this;
    }

}
