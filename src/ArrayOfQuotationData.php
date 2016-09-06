<?php

namespace Economic;

class ArrayOfQuotationData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuotationData[] $QuotationData
     */
    protected $QuotationData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuotationData[]
     */
    public function getQuotationData()
    {
      return $this->QuotationData;
    }

    /**
     * @param QuotationData[] $QuotationData
     * @return \Economic\ArrayOfQuotationData
     */
    public function setQuotationData(array $QuotationData = null)
    {
      $this->QuotationData = $QuotationData;
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
      return isset($this->QuotationData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuotationData
     */
    public function offsetGet($offset)
    {
      return $this->QuotationData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuotationData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->QuotationData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->QuotationData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuotationData Return the current element
     */
    public function current()
    {
      return current($this->QuotationData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuotationData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuotationData);
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
      reset($this->QuotationData);
    }

    /**
     * Countable implementation
     *
     * @return QuotationData Return count of elements
     */
    public function count()
    {
      return count($this->QuotationData);
    }

}
