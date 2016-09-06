<?php

namespace Economic;

class DocumentArchiveCategory_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateFromDataArrayResult
     */
    protected $DocumentArchiveCategory_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateFromDataArrayResult
     */
    public function __construct($DocumentArchiveCategory_CreateFromDataArrayResult)
    {
      $this->DocumentArchiveCategory_CreateFromDataArrayResult = $DocumentArchiveCategory_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_CreateFromDataArrayResult()
    {
      return $this->DocumentArchiveCategory_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_CreateFromDataArrayResult
     * @return \Economic\DocumentArchiveCategory_CreateFromDataArrayResponse
     */
    public function setDocumentArchiveCategory_CreateFromDataArrayResult($DocumentArchiveCategory_CreateFromDataArrayResult)
    {
      $this->DocumentArchiveCategory_CreateFromDataArrayResult = $DocumentArchiveCategory_CreateFromDataArrayResult;
      return $this;
    }

}
