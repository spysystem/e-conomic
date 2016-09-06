<?php

namespace Economic;

class ArrayOfAccountHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountHandle[] $AccountHandle
     */
    protected $AccountHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountHandle[]
     */
    public function getAccountHandle()
    {
      return $this->AccountHandle;
    }

    /**
     * @param AccountHandle[] $AccountHandle
     * @return \Economic\ArrayOfAccountHandle
     */
    public function setAccountHandle(array $AccountHandle = null)
    {
      $this->AccountHandle = $AccountHandle;
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
      return isset($this->AccountHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountHandle
     */
    public function offsetGet($offset)
    {
      return $this->AccountHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountHandle Return the current element
     */
    public function current()
    {
      return current($this->AccountHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountHandle);
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
      reset($this->AccountHandle);
    }

    /**
     * Countable implementation
     *
     * @return AccountHandle Return count of elements
     */
    public function count()
    {
      return count($this->AccountHandle);
    }

}
