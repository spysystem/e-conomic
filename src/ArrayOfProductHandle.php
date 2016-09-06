<?php

namespace Economic;

class ArrayOfProductHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductHandle[] $ProductHandle
     */
    protected $ProductHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductHandle[]
     */
    public function getProductHandle()
    {
      return $this->ProductHandle;
    }

    /**
     * @param ProductHandle[] $ProductHandle
     * @return \Economic\ArrayOfProductHandle
     */
    public function setProductHandle(array $ProductHandle = null)
    {
      $this->ProductHandle = $ProductHandle;
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
      return isset($this->ProductHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductHandle
     */
    public function offsetGet($offset)
    {
      return $this->ProductHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductHandle Return the current element
     */
    public function current()
    {
      return current($this->ProductHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductHandle);
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
      reset($this->ProductHandle);
    }

    /**
     * Countable implementation
     *
     * @return ProductHandle Return count of elements
     */
    public function count()
    {
      return count($this->ProductHandle);
    }

}
