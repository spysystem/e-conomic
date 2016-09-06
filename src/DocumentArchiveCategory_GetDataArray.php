<?php

namespace Economic;

class DocumentArchiveCategory_GetDataArray
{

    /**
     * @var ArrayOfDocumentArchiveCategoryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDocumentArchiveCategoryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDocumentArchiveCategoryHandle $entityHandles
     * @return \Economic\DocumentArchiveCategory_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
