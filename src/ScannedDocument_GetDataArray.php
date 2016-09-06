<?php

namespace Economic;

class ScannedDocument_GetDataArray
{

    /**
     * @var ArrayOfScannedDocumentHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfScannedDocumentHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfScannedDocumentHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfScannedDocumentHandle $entityHandles
     * @return \Economic\ScannedDocument_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
