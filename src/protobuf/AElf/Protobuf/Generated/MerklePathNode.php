<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: types.proto

namespace AElf\Protobuf\Generated;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AElf.protobuf.generated.MerklePathNode</code>
 */
class MerklePathNode extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AElf.protobuf.generated.Hash hash = 1;</code>
     */
    protected $hash = null;
    /**
     * Generated from protobuf field <code>bool is_left_child_node = 2;</code>
     */
    protected $is_left_child_node = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AElf\Protobuf\Generated\Hash $hash
     *     @type bool $is_left_child_node
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AElf.protobuf.generated.Hash hash = 1;</code>
     * @return \AElf\Protobuf\Generated\Hash
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>.AElf.protobuf.generated.Hash hash = 1;</code>
     * @param \AElf\Protobuf\Generated\Hash $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkMessage($var, \AElf\Protobuf\Generated\Hash::class);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_left_child_node = 2;</code>
     * @return bool
     */
    public function getIsLeftChildNode()
    {
        return $this->is_left_child_node;
    }

    /**
     * Generated from protobuf field <code>bool is_left_child_node = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLeftChildNode($var)
    {
        GPBUtil::checkBool($var);
        $this->is_left_child_node = $var;

        return $this;
    }

}
