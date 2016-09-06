<?php

namespace Economic;

class TemplateCollection_GetDataArray
{

    /**
     * @var ArrayOfTemplateCollectionHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfTemplateCollectionHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfTemplateCollectionHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfTemplateCollectionHandle $entityHandles
     * @return \Economic\TemplateCollection_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
