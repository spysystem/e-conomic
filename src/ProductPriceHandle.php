<?php

namespace Economic;

class ProductPriceHandle
{

    /**
     * @var string $Id1
     */
    protected $Id1 = null;

    /**
     * @var string $Id2
     */
    protected $Id2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getId1()
    {
      return $this->Id1;
    }

    /**
     * @param string $Id1
     * @return \Economic\ProductPriceHandle
     */
    public function setId1($Id1)
    {
      $this->Id1 = $Id1;
      return $this;
    }

    /**
     * @return string
     */
    public function getId2()
    {
      return $this->Id2;
    }

    /**
     * @param string $Id2
     * @return \Economic\ProductPriceHandle
     */
    public function setId2($Id2)
    {
      $this->Id2 = $Id2;
      return $this;
    }

}
