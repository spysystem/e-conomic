<?php

namespace Economic;

class ArrayOfTermOfPaymentHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TermOfPaymentHandle[] $TermOfPaymentHandle
     */
    protected $TermOfPaymentHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TermOfPaymentHandle[]
     */
    public function getTermOfPaymentHandle()
    {
      return $this->TermOfPaymentHandle;
    }

    /**
     * @param TermOfPaymentHandle[] $TermOfPaymentHandle
     * @return \Economic\ArrayOfTermOfPaymentHandle
     */
    public function setTermOfPaymentHandle(array $TermOfPaymentHandle = null)
    {
      $this->TermOfPaymentHandle = $TermOfPaymentHandle;
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
      return isset($this->TermOfPaymentHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TermOfPaymentHandle
     */
    public function offsetGet($offset)
    {
      return $this->TermOfPaymentHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TermOfPaymentHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->TermOfPaymentHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->TermOfPaymentHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TermOfPaymentHandle Return the current element
     */
    public function current()
    {
      return current($this->TermOfPaymentHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TermOfPaymentHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TermOfPaymentHandle);
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
      reset($this->TermOfPaymentHandle);
    }

    /**
     * Countable implementation
     *
     * @return TermOfPaymentHandle Return count of elements
     */
    public function count()
    {
      return count($this->TermOfPaymentHandle);
    }

}
