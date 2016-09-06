<?php

namespace Economic;

class DocumentArchiveCategory_GetNumber
{

    /**
     * @var DocumentArchiveCategoryHandle $documentArchiveCategoryHandle
     */
    protected $documentArchiveCategoryHandle = null;

    /**
     * @param DocumentArchiveCategoryHandle $documentArchiveCategoryHandle
     */
    public function __construct($documentArchiveCategoryHandle)
    {
      $this->documentArchiveCategoryHandle = $documentArchiveCategoryHandle;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getDocumentArchiveCategoryHandle()
    {
      return $this->documentArchiveCategoryHandle;
    }

    /**
     * @param DocumentArchiveCategoryHandle $documentArchiveCategoryHandle
     * @return \Economic\DocumentArchiveCategory_GetNumber
     */
    public function setDocumentArchiveCategoryHandle($documentArchiveCategoryHandle)
    {
      $this->documentArchiveCategoryHandle = $documentArchiveCategoryHandle;
      return $this;
    }

}
