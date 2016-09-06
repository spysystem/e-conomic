<?php

namespace Economic;

class DocumentArchiveCategory_GetAllResponse
{

    /**
     * @var ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_GetAllResult
     */
    protected $DocumentArchiveCategory_GetAllResult = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_GetAllResult
     */
    public function __construct($DocumentArchiveCategory_GetAllResult)
    {
      $this->DocumentArchiveCategory_GetAllResult = $DocumentArchiveCategory_GetAllResult;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_GetAllResult()
    {
      return $this->DocumentArchiveCategory_GetAllResult;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_GetAllResult
     * @return \Economic\DocumentArchiveCategory_GetAllResponse
     */
    public function setDocumentArchiveCategory_GetAllResult($DocumentArchiveCategory_GetAllResult)
    {
      $this->DocumentArchiveCategory_GetAllResult = $DocumentArchiveCategory_GetAllResult;
      return $this;
    }

}
