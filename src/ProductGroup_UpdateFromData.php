<?php

namespace Economic;

class ProductGroup_UpdateFromData
{

    /**
     * @var ProductGroupData $data
     */
    protected $data = null;

    /**
     * @param ProductGroupData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return ProductGroupData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param ProductGroupData $data
     * @return \Economic\ProductGroup_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
