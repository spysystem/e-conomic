<?php

namespace Economic;

class ArrayOfTermOfPaymentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TermOfPaymentData[] $TermOfPaymentData
     */
    protected $TermOfPaymentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TermOfPaymentData[]
     */
    public function getTermOfPaymentData()
    {
      return $this->TermOfPaymentData;
    }

    /**
     * @param TermOfPaymentData[] $TermOfPaymentData
     * @return \Economic\ArrayOfTermOfPaymentData
     */
    public function setTermOfPaymentData(array $TermOfPaymentData = null)
    {
      $this->TermOfPaymentData = $TermOfPaymentData;
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
      return isset($this->TermOfPaymentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TermOfPaymentData
     */
    public function offsetGet($offset)
    {
      return $this->TermOfPaymentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TermOfPaymentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TermOfPaymentData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TermOfPaymentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TermOfPaymentData Return the current element
     */
    public function current()
    {
      return current($this->TermOfPaymentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TermOfPaymentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TermOfPaymentData);
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
      reset($this->TermOfPaymentData);
    }

    /**
     * Countable implementation
     *
     * @return TermOfPaymentData Return count of elements
     */
    public function count()
    {
      return count($this->TermOfPaymentData);
    }

}
