<?php

namespace Economic;

class DocumentArchiveCategory_FindByNameResponse
{

    /**
     * @var ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_FindByNameResult
     */
    protected $DocumentArchiveCategory_FindByNameResult = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_FindByNameResult
     */
    public function __construct($DocumentArchiveCategory_FindByNameResult)
    {
      $this->DocumentArchiveCategory_FindByNameResult = $DocumentArchiveCategory_FindByNameResult;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_FindByNameResult()
    {
      return $this->DocumentArchiveCategory_FindByNameResult;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_FindByNameResult
     * @return \Economic\DocumentArchiveCategory_FindByNameResponse
     */
    public function setDocumentArchiveCategory_FindByNameResult($DocumentArchiveCategory_FindByNameResult)
    {
      $this->DocumentArchiveCategory_FindByNameResult = $DocumentArchiveCategory_FindByNameResult;
      return $this;
    }

}
