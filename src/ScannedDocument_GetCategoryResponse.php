<?php

namespace Economic;

class ScannedDocument_GetCategoryResponse
{

    /**
     * @var DocumentArchiveCategoryHandle $ScannedDocument_GetCategoryResult
     */
    protected $ScannedDocument_GetCategoryResult = null;

    /**
     * @param DocumentArchiveCategoryHandle $ScannedDocument_GetCategoryResult
     */
    public function __construct($ScannedDocument_GetCategoryResult)
    {
      $this->ScannedDocument_GetCategoryResult = $ScannedDocument_GetCategoryResult;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getScannedDocument_GetCategoryResult()
    {
      return $this->ScannedDocument_GetCategoryResult;
    }

    /**
     * @param DocumentArchiveCategoryHandle $ScannedDocument_GetCategoryResult
     * @return \Economic\ScannedDocument_GetCategoryResponse
     */
    public function setScannedDocument_GetCategoryResult($ScannedDocument_GetCategoryResult)
    {
      $this->ScannedDocument_GetCategoryResult = $ScannedDocument_GetCategoryResult;
      return $this;
    }

}
