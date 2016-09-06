<?php

namespace Economic;

class Order_GetTextLine1Response
{

    /**
     * @var string $Order_GetTextLine1Result
     */
    protected $Order_GetTextLine1Result = null;

    /**
     * @param string $Order_GetTextLine1Result
     */
    public function __construct($Order_GetTextLine1Result)
    {
      $this->Order_GetTextLine1Result = $Order_GetTextLine1Result;
    }

    /**
     * @return string
     */
    public function getOrder_GetTextLine1Result()
    {
      return $this->Order_GetTextLine1Result;
    }

    /**
     * @param string $Order_GetTextLine1Result
     * @return \Economic\Order_GetTextLine1Response
     */
    public function setOrder_GetTextLine1Result($Order_GetTextLine1Result)
    {
      $this->Order_GetTextLine1Result = $Order_GetTextLine1Result;
      return $this;
    }

}
