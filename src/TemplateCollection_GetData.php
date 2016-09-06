<?php

namespace Economic;

class TemplateCollection_GetData
{

    /**
     * @var TemplateCollectionHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param TemplateCollectionHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param TemplateCollectionHandle $entityHandle
     * @return \Economic\TemplateCollection_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
