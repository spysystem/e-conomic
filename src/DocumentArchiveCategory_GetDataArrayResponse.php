<?php

namespace Economic;

class DocumentArchiveCategory_GetDataArrayResponse
{

    /**
     * @var ArrayOfDocumentArchiveCategoryData $DocumentArchiveCategory_GetDataArrayResult
     */
    protected $DocumentArchiveCategory_GetDataArrayResult = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryData $DocumentArchiveCategory_GetDataArrayResult
     */
    public function __construct($DocumentArchiveCategory_GetDataArrayResult)
    {
      $this->DocumentArchiveCategory_GetDataArrayResult = $DocumentArchiveCategory_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryData
     */
    public function getDocumentArchiveCategory_GetDataArrayResult()
    {
      return $this->DocumentArchiveCategory_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryData $DocumentArchiveCategory_GetDataArrayResult
     * @return \Economic\DocumentArchiveCategory_GetDataArrayResponse
     */
    public function setDocumentArchiveCategory_GetDataArrayResult($DocumentArchiveCategory_GetDataArrayResult)
    {
      $this->DocumentArchiveCategory_GetDataArrayResult = $DocumentArchiveCategory_GetDataArrayResult;
      return $this;
    }

}
