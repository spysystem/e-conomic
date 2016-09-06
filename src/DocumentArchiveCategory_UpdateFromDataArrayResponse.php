<?php

namespace Economic;

class DocumentArchiveCategory_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_UpdateFromDataArrayResult
     */
    protected $DocumentArchiveCategory_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_UpdateFromDataArrayResult
     */
    public function __construct($DocumentArchiveCategory_UpdateFromDataArrayResult)
    {
      $this->DocumentArchiveCategory_UpdateFromDataArrayResult = $DocumentArchiveCategory_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategory_UpdateFromDataArrayResult()
    {
      return $this->DocumentArchiveCategory_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $DocumentArchiveCategory_UpdateFromDataArrayResult
     * @return \Economic\DocumentArchiveCategory_UpdateFromDataArrayResponse
     */
    public function setDocumentArchiveCategory_UpdateFromDataArrayResult($DocumentArchiveCategory_UpdateFromDataArrayResult)
    {
      $this->DocumentArchiveCategory_UpdateFromDataArrayResult = $DocumentArchiveCategory_UpdateFromDataArrayResult;
      return $this;
    }

}
