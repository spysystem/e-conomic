<?php

namespace Economic;

class ArrayOfSubscriberHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SubscriberHandle[] $SubscriberHandle
     */
    protected $SubscriberHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriberHandle[]
     */
    public function getSubscriberHandle()
    {
      return $this->SubscriberHandle;
    }

    /**
     * @param SubscriberHandle[] $SubscriberHandle
     * @return \Economic\ArrayOfSubscriberHandle
     */
    public function setSubscriberHandle(array $SubscriberHandle = null)
    {
      $this->SubscriberHandle = $SubscriberHandle;
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
      return isset($this->SubscriberHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SubscriberHandle
     */
    public function offsetGet($offset)
    {
      return $this->SubscriberHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SubscriberHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SubscriberHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SubscriberHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SubscriberHandle Return the current element
     */
    public function current()
    {
      return current($this->SubscriberHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SubscriberHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SubscriberHandle);
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
      reset($this->SubscriberHandle);
    }

    /**
     * Countable implementation
     *
     * @return SubscriberHandle Return count of elements
     */
    public function count()
    {
      return count($this->SubscriberHandle);
    }

}
