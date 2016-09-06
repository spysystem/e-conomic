<?php

namespace Economic;

class ArrayOfProductPriceData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductPriceData[] $ProductPriceData
     */
    protected $ProductPriceData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPriceData[]
     */
    public function getProductPriceData()
    {
      return $this->ProductPriceData;
    }

    /**
     * @param ProductPriceData[] $ProductPriceData
     * @return \Economic\ArrayOfProductPriceData
     */
    public function setProductPriceData(array $ProductPriceData = null)
    {
      $this->ProductPriceData = $ProductPriceData;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->ProductPriceData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductPriceData
     */
    public function offsetGet($offset)
    {
      return $this->ProductPriceData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductPriceData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductPriceData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductPriceData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductPriceData Return the current element
     */
    public function current()
    {
      return current($this->ProductPriceData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductPriceData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductPriceData);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->ProductPriceData);
    }

    /**
     * Countable implementation
     *
     * @return ProductPriceData Return count of elements
     */
    public function count()
    {
      return count($this->ProductPriceData);
    }

}
