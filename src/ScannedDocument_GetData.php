<?php

namespace Economic;

class ScannedDocument_GetData
{

    /**
     * @var ScannedDocumentHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ScannedDocumentHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ScannedDocumentHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ScannedDocumentHandle $entityHandle
     * @return \Economic\ScannedDocument_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
