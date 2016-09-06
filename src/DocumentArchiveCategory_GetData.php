<?php

namespace Economic;

class DocumentArchiveCategory_GetData
{

    /**
     * @var DocumentArchiveCategoryHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DocumentArchiveCategoryHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DocumentArchiveCategoryHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DocumentArchiveCategoryHandle $entityHandle
     * @return \Economic\DocumentArchiveCategory_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
