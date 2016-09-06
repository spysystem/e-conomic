<?php

namespace Economic;

class ArrayOfSubscriptionHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SubscriptionHandle[] $SubscriptionHandle
     */
    protected $SubscriptionHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriptionHandle[]
     */
    public function getSubscriptionHandle()
    {
      return $this->SubscriptionHandle;
    }

    /**
     * @param SubscriptionHandle[] $SubscriptionHandle
     * @return \Economic\ArrayOfSubscriptionHandle
     */
    public function setSubscriptionHandle(array $SubscriptionHandle = null)
    {
      $this->SubscriptionHandle = $SubscriptionHandle;
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
      return isset($this->SubscriptionHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SubscriptionHandle
     */
    public function offsetGet($offset)
    {
      return $this->SubscriptionHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SubscriptionHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SubscriptionHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SubscriptionHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SubscriptionHandle Return the current element
     */
    public function current()
    {
      return current($this->SubscriptionHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SubscriptionHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SubscriptionHandle);
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
      reset($this->SubscriptionHandle);
    }

    /**
     * Countable implementation
     *
     * @return SubscriptionHandle Return count of elements
     */
    public function count()
    {
      return count($this->SubscriptionHandle);
    }

}
