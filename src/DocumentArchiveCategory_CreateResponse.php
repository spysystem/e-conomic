<?php

namespace Economic;

class DocumentArchiveCategory_CreateResponse
{

    /**
     * @var DocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateResult
     */
    protected $DocumentArchiveCategory_CreateResult = null;

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateResult
     */
    public function __construct($DocumentArchiveCategory_CreateResult)
    {
      $this->DocumentArchiveCategory_CreateResult = $DocumentArchiveCategory_CreateResult;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_CreateResult()
    {
      return $this->DocumentArchiveCategory_CreateResult;
    }

    /**
     * @param DocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateResult
     * @return \Economic\DocumentArchiveCategory_CreateResponse
     */
    public function setDocumentArchiveCategory_CreateResult($DocumentArchiveCategory_CreateResult)
    {
      $this->DocumentArchiveCategory_CreateResult = $DocumentArchiveCategory_CreateResult;
      return $this;
    }

}
