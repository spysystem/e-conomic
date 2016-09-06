<?php

namespace Economic;

class ArrayOfProductPriceHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductPriceHandle[] $ProductPriceHandle
     */
    protected $ProductPriceHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductPriceHandle[]
     */
    public function getProductPriceHandle()
    {
      return $this->ProductPriceHandle;
    }

    /**
     * @param ProductPriceHandle[] $ProductPriceHandle
     * @return \Economic\ArrayOfProductPriceHandle
     */
    public function setProductPriceHandle(array $ProductPriceHandle = null)
    {
      $this->ProductPriceHandle = $ProductPriceHandle;
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
      return isset($this->ProductPriceHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductPriceHandle
     */
    public function offsetGet($offset)
    {
      return $this->ProductPriceHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductPriceHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductPriceHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductPriceHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductPriceHandle Return the current element
     */
    public function current()
    {
      return current($this->ProductPriceHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductPriceHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductPriceHandle);
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
      reset($this->ProductPriceHandle);
    }

    /**
     * Countable implementation
     *
     * @return ProductPriceHandle Return count of elements
     */
    public function count()
    {
      return count($this->ProductPriceHandle);
    }

}
