<?php

namespace Economic;

class Order_GetTextLine2Response
{

    /**
     * @var string $Order_GetTextLine2Result
     */
    protected $Order_GetTextLine2Result = null;

    /**
     * @param string $Order_GetTextLine2Result
     */
    public function __construct($Order_GetTextLine2Result)
    {
      $this->Order_GetTextLine2Result = $Order_GetTextLine2Result;
    }

    /**
     * @return string
     */
    public function getOrder_GetTextLine2Result()
    {
      return $this->Order_GetTextLine2Result;
    }

    /**
     * @param string $Order_GetTextLine2Result
     * @return \Economic\Order_GetTextLine2Response
     */
    public function setOrder_GetTextLine2Result($Order_GetTextLine2Result)
    {
      $this->Order_GetTextLine2Result = $Order_GetTextLine2Result;
      return $this;
    }

}
