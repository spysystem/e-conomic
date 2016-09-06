<?php

namespace Economic;

class ArrayOfSubscriptionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SubscriptionData[] $SubscriptionData
     */
    protected $SubscriptionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SubscriptionData[]
     */
    public function getSubscriptionData()
    {
      return $this->SubscriptionData;
    }

    /**
     * @param SubscriptionData[] $SubscriptionData
     * @return \Economic\ArrayOfSubscriptionData
     */
    public function setSubscriptionData(array $SubscriptionData = null)
    {
      $this->SubscriptionData = $SubscriptionData;
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
      return isset($this->SubscriptionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SubscriptionData
     */
    public function offsetGet($offset)
    {
      return $this->SubscriptionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SubscriptionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SubscriptionData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SubscriptionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SubscriptionData Return the current element
     */
    public function current()
    {
      return current($this->SubscriptionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SubscriptionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SubscriptionData);
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
      reset($this->SubscriptionData);
    }

    /**
     * Countable implementation
     *
     * @return SubscriptionData Return count of elements
     */
    public function count()
    {
      return count($this->SubscriptionData);
    }

}
