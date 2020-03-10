<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: types.proto

namespace Aelf\Protobuf\Generated;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>aelf.protobuf.generated.TransferInput</code>
 */
class TransferInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.aelf.protobuf.generated.Address to = 1;</code>
     */
    private $to = null;
    /**
     * Generated from protobuf field <code>string symbol = 2;</code>
     */
    private $symbol = '';
    /**
     * Generated from protobuf field <code>sint64 amount = 3;</code>
     */
    private $amount = 0;
    /**
     * Generated from protobuf field <code>string memo = 4;</code>
     */
    private $memo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Aelf\Protobuf\Generated\Address $to
     *     @type string $symbol
     *     @type int|string $amount
     *     @type string $memo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.aelf.protobuf.generated.Address to = 1;</code>
     * @return \Aelf\Protobuf\Generated\Address
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>.aelf.protobuf.generated.Address to = 1;</code>
     * @param \Aelf\Protobuf\Generated\Address $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Aelf\Protobuf\Generated\Address::class);
        $this->to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkString($var, True);
        $this->symbol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sint64 amount = 3;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>sint64 amount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string memo = 4;</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Generated from protobuf field <code>string memo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->memo = $var;

        return $this;
    }

}
