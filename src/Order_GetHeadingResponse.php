<?php

namespace Economic;

class Order_GetHeadingResponse
{

    /**
     * @var string $Order_GetHeadingResult
     */
    protected $Order_GetHeadingResult = null;

    /**
     * @param string $Order_GetHeadingResult
     */
    public function __construct($Order_GetHeadingResult)
    {
      $this->Order_GetHeadingResult = $Order_GetHeadingResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetHeadingResult()
    {
      return $this->Order_GetHeadingResult;
    }

    /**
     * @param string $Order_GetHeadingResult
     * @return \Economic\Order_GetHeadingResponse
     */
    public function setOrder_GetHeadingResult($Order_GetHeadingResult)
    {
      $this->Order_GetHeadingResult = $Order_GetHeadingResult;
      return $this;
    }

}
