<?php

namespace Economic;

class ArrayOfProductGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductGroupHandle[] $ProductGroupHandle
     */
    protected $ProductGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductGroupHandle[]
     */
    public function getProductGroupHandle()
    {
      return $this->ProductGroupHandle;
    }

    /**
     * @param ProductGroupHandle[] $ProductGroupHandle
     * @return \Economic\ArrayOfProductGroupHandle
     */
    public function setProductGroupHandle(array $ProductGroupHandle = null)
    {
      $this->ProductGroupHandle = $ProductGroupHandle;
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
      return isset($this->ProductGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->ProductGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->ProductGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductGroupHandle);
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
      reset($this->ProductGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return ProductGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->ProductGroupHandle);
    }

}
