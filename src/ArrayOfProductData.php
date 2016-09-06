<?php

namespace Economic;

class ArrayOfProductData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductData[] $ProductData
     */
    protected $ProductData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductData[]
     */
    public function getProductData()
    {
      return $this->ProductData;
    }

    /**
     * @param ProductData[] $ProductData
     * @return \Economic\ArrayOfProductData
     */
    public function setProductData(array $ProductData = null)
    {
      $this->ProductData = $ProductData;
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
      return isset($this->ProductData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductData
     */
    public function offsetGet($offset)
    {
      return $this->ProductData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductData Return the current element
     */
    public function current()
    {
      return current($this->ProductData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductData);
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
      reset($this->ProductData);
    }

    /**
     * Countable implementation
     *
     * @return ProductData Return count of elements
     */
    public function count()
    {
      return count($this->ProductData);
    }

}
