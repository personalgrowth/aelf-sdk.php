<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: types.proto

namespace AElf\Protobuf\Generated;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AElf.protobuf.generated.CrossChainReceiveTokenInput</code>
 */
class CrossChainReceiveTokenInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 from_chain_id = 1;</code>
     */
    protected $from_chain_id = 0;
    /**
     * Generated from protobuf field <code>int64 parent_chain_height = 2;</code>
     */
    protected $parent_chain_height = 0;
    /**
     * Generated from protobuf field <code>bytes transfer_transaction_bytes = 3;</code>
     */
    protected $transfer_transaction_bytes = '';
    /**
     * Generated from protobuf field <code>.AElf.protobuf.generated.MerklePath merkle_path = 4;</code>
     */
    protected $merkle_path = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $from_chain_id
     *     @type int|string $parent_chain_height
     *     @type string $transfer_transaction_bytes
     *     @type \AElf\Protobuf\Generated\MerklePath $merkle_path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 from_chain_id = 1;</code>
     * @return int
     */
    public function getFromChainId()
    {
        return $this->from_chain_id;
    }

    /**
     * Generated from protobuf field <code>int32 from_chain_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFromChainId($var)
    {
        GPBUtil::checkInt32($var);
        $this->from_chain_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 parent_chain_height = 2;</code>
     * @return int|string
     */
    public function getParentChainHeight()
    {
        return $this->parent_chain_height;
    }

    /**
     * Generated from protobuf field <code>int64 parent_chain_height = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentChainHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->parent_chain_height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes transfer_transaction_bytes = 3;</code>
     * @return string
     */
    public function getTransferTransactionBytes()
    {
        return $this->transfer_transaction_bytes;
    }

    /**
     * Generated from protobuf field <code>bytes transfer_transaction_bytes = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransferTransactionBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->transfer_transaction_bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AElf.protobuf.generated.MerklePath merkle_path = 4;</code>
     * @return \AElf\Protobuf\Generated\MerklePath
     */
    public function getMerklePath()
    {
        return $this->merkle_path;
    }

    /**
     * Generated from protobuf field <code>.AElf.protobuf.generated.MerklePath merkle_path = 4;</code>
     * @param \AElf\Protobuf\Generated\MerklePath $var
     * @return $this
     */
    public function setMerklePath($var)
    {
        GPBUtil::checkMessage($var, \AElf\Protobuf\Generated\MerklePath::class);
        $this->merkle_path = $var;

        return $this;
    }

}
