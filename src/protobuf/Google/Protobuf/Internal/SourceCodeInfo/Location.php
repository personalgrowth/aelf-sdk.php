<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal\SourceCodeInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.protobuf.SourceCodeInfo.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifies which part of the FileDescriptorProto was defined at this
     * location.
     * Each element is a field number or an index.  They form a path from
     * the root FileDescriptorProto to the place where the definition.  For
     * example, this path:
     *   [ 4, 3, 2, 7, 1 ]
     * refers to:
     *   file.message_type(3)  // 4, 3
     *       .field(7)         // 2, 7
     *       .name()           // 1
     * This is because FileDescriptorProto.message_type has field number 4:
     *   repeated DescriptorProto message_type = 4;
     * and DescriptorProto.field has field number 2:
     *   repeated FieldDescriptorProto field = 2;
     * and FieldDescriptorProto.name has field number 1:
     *   optional string name = 1;
     * Thus, the above path gives the location of a field name.  If we removed
     * the last element:
     *   [ 4, 3, 2, 7 ]
     * this path refers to the whole field declaration (from the beginning
     * of the label to the terminating semicolon).
     *
     * Generated from protobuf field <code>repeated int32 path = 1 [packed = true];</code>
     */
    private $path;
    private $has_path = false;
    /**
     * Always has exactly three or four elements: start line, start column,
     * end line (optional, otherwise assumed same as start line), end column.
     * These are packed into a single field for efficiency.  Note that line
     * and column numbers are zero-based -- typically you will want to add
     * 1 to each before displaying to a user.
     *
     * Generated from protobuf field <code>repeated int32 span = 2 [packed = true];</code>
     */
    private $span;
    private $has_span = false;
    /**
     * If this SourceCodeInfo represents a complete declaration, these are any
     * comments appearing before and after the declaration which appear to be
     * attached to the declaration.
     * A series of line comments appearing on consecutive lines, with no other
     * tokens appearing on those lines, will be treated as a single comment.
     * leading_detached_comments will keep paragraphs of comments that appear
     * before (but not connected to) the current element. Each paragraph,
     * separated by empty lines, will be one comment element in the repeated
     * field.
     * Only the comment content is provided; comment markers (e.g. //) are
     * stripped out.  For block comments, leading whitespace and an asterisk
     * will be stripped from the beginning of each line other than the first.
     * Newlines are included in the output.
     * Examples:
     *   optional int32 foo = 1;  // Comment attached to foo.
     *   // Comment attached to bar.
     *   optional int32 bar = 2;
     *   optional string baz = 3;
     *   // Comment attached to baz.
     *   // Another line attached to baz.
     *   // Comment attached to qux.
     *   //
     *   // Another line attached to qux.
     *   optional double qux = 4;
     *   // Detached comment for corge. This is not leading or trailing comments
     *   // to qux or corge because there are blank lines separating it from
     *   // both.
     *   // Detached comment for corge paragraph 2.
     *   optional string corge = 5;
     *   /&#42; Block comment attached
     *    * to corge.  Leading asterisks
     *    * will be removed. *&#47;
     *   /&#42; Block comment attached to
     *    * grault. *&#47;
     *   optional int32 grault = 6;
     *   // ignored detached comments.
     *
     * Generated from protobuf field <code>optional string leading_comments = 3;</code>
     */
    protected $leading_comments = '';
    private $has_leading_comments = false;
    /**
     * Generated from protobuf field <code>optional string trailing_comments = 4;</code>
     */
    protected $trailing_comments = '';
    private $has_trailing_comments = false;
    /**
     * Generated from protobuf field <code>repeated string leading_detached_comments = 6;</code>
     */
    private $leading_detached_comments;
    private $has_leading_detached_comments = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $path
     *           Identifies which part of the FileDescriptorProto was defined at this
     *           location.
     *           Each element is a field number or an index.  They form a path from
     *           the root FileDescriptorProto to the place where the definition.  For
     *           example, this path:
     *             [ 4, 3, 2, 7, 1 ]
     *           refers to:
     *             file.message_type(3)  // 4, 3
     *                 .field(7)         // 2, 7
     *                 .name()           // 1
     *           This is because FileDescriptorProto.message_type has field number 4:
     *             repeated DescriptorProto message_type = 4;
     *           and DescriptorProto.field has field number 2:
     *             repeated FieldDescriptorProto field = 2;
     *           and FieldDescriptorProto.name has field number 1:
     *             optional string name = 1;
     *           Thus, the above path gives the location of a field name.  If we removed
     *           the last element:
     *             [ 4, 3, 2, 7 ]
     *           this path refers to the whole field declaration (from the beginning
     *           of the label to the terminating semicolon).
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $span
     *           Always has exactly three or four elements: start line, start column,
     *           end line (optional, otherwise assumed same as start line), end column.
     *           These are packed into a single field for efficiency.  Note that line
     *           and column numbers are zero-based -- typically you will want to add
     *           1 to each before displaying to a user.
     *     @type string $leading_comments
     *           If this SourceCodeInfo represents a complete declaration, these are any
     *           comments appearing before and after the declaration which appear to be
     *           attached to the declaration.
     *           A series of line comments appearing on consecutive lines, with no other
     *           tokens appearing on those lines, will be treated as a single comment.
     *           leading_detached_comments will keep paragraphs of comments that appear
     *           before (but not connected to) the current element. Each paragraph,
     *           separated by empty lines, will be one comment element in the repeated
     *           field.
     *           Only the comment content is provided; comment markers (e.g. //) are
     *           stripped out.  For block comments, leading whitespace and an asterisk
     *           will be stripped from the beginning of each line other than the first.
     *           Newlines are included in the output.
     *           Examples:
     *             optional int32 foo = 1;  // Comment attached to foo.
     *             // Comment attached to bar.
     *             optional int32 bar = 2;
     *             optional string baz = 3;
     *             // Comment attached to baz.
     *             // Another line attached to baz.
     *             // Comment attached to qux.
     *             //
     *             // Another line attached to qux.
     *             optional double qux = 4;
     *             // Detached comment for corge. This is not leading or trailing comments
     *             // to qux or corge because there are blank lines separating it from
     *             // both.
     *             // Detached comment for corge paragraph 2.
     *             optional string corge = 5;
     *             /&#42; Block comment attached
     *              * to corge.  Leading asterisks
     *              * will be removed. *&#47;
     *             /&#42; Block comment attached to
     *              * grault. *&#47;
     *             optional int32 grault = 6;
     *             // ignored detached comments.
     *     @type string $trailing_comments
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $leading_detached_comments
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifies which part of the FileDescriptorProto was defined at this
     * location.
     * Each element is a field number or an index.  They form a path from
     * the root FileDescriptorProto to the place where the definition.  For
     * example, this path:
     *   [ 4, 3, 2, 7, 1 ]
     * refers to:
     *   file.message_type(3)  // 4, 3
     *       .field(7)         // 2, 7
     *       .name()           // 1
     * This is because FileDescriptorProto.message_type has field number 4:
     *   repeated DescriptorProto message_type = 4;
     * and DescriptorProto.field has field number 2:
     *   repeated FieldDescriptorProto field = 2;
     * and FieldDescriptorProto.name has field number 1:
     *   optional string name = 1;
     * Thus, the above path gives the location of a field name.  If we removed
     * the last element:
     *   [ 4, 3, 2, 7 ]
     * this path refers to the whole field declaration (from the beginning
     * of the label to the terminating semicolon).
     *
     * Generated from protobuf field <code>repeated int32 path = 1 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Identifies which part of the FileDescriptorProto was defined at this
     * location.
     * Each element is a field number or an index.  They form a path from
     * the root FileDescriptorProto to the place where the definition.  For
     * example, this path:
     *   [ 4, 3, 2, 7, 1 ]
     * refers to:
     *   file.message_type(3)  // 4, 3
     *       .field(7)         // 2, 7
     *       .name()           // 1
     * This is because FileDescriptorProto.message_type has field number 4:
     *   repeated DescriptorProto message_type = 4;
     * and DescriptorProto.field has field number 2:
     *   repeated FieldDescriptorProto field = 2;
     * and FieldDescriptorProto.name has field number 1:
     *   optional string name = 1;
     * Thus, the above path gives the location of a field name.  If we removed
     * the last element:
     *   [ 4, 3, 2, 7 ]
     * this path refers to the whole field declaration (from the beginning
     * of the label to the terminating semicolon).
     *
     * Generated from protobuf field <code>repeated int32 path = 1 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->path = $arr;
        $this->has_path = true;

        return $this;
    }

    public function hasPath()
    {
        return $this->has_path;
    }

    /**
     * Always has exactly three or four elements: start line, start column,
     * end line (optional, otherwise assumed same as start line), end column.
     * These are packed into a single field for efficiency.  Note that line
     * and column numbers are zero-based -- typically you will want to add
     * 1 to each before displaying to a user.
     *
     * Generated from protobuf field <code>repeated int32 span = 2 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpan()
    {
        return $this->span;
    }

    /**
     * Always has exactly three or four elements: start line, start column,
     * end line (optional, otherwise assumed same as start line), end column.
     * These are packed into a single field for efficiency.  Note that line
     * and column numbers are zero-based -- typically you will want to add
     * 1 to each before displaying to a user.
     *
     * Generated from protobuf field <code>repeated int32 span = 2 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpan($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->span = $arr;
        $this->has_span = true;

        return $this;
    }

    public function hasSpan()
    {
        return $this->has_span;
    }

    /**
     * If this SourceCodeInfo represents a complete declaration, these are any
     * comments appearing before and after the declaration which appear to be
     * attached to the declaration.
     * A series of line comments appearing on consecutive lines, with no other
     * tokens appearing on those lines, will be treated as a single comment.
     * leading_detached_comments will keep paragraphs of comments that appear
     * before (but not connected to) the current element. Each paragraph,
     * separated by empty lines, will be one comment element in the repeated
     * field.
     * Only the comment content is provided; comment markers (e.g. //) are
     * stripped out.  For block comments, leading whitespace and an asterisk
     * will be stripped from the beginning of each line other than the first.
     * Newlines are included in the output.
     * Examples:
     *   optional int32 foo = 1;  // Comment attached to foo.
     *   // Comment attached to bar.
     *   optional int32 bar = 2;
     *   optional string baz = 3;
     *   // Comment attached to baz.
     *   // Another line attached to baz.
     *   // Comment attached to qux.
     *   //
     *   // Another line attached to qux.
     *   optional double qux = 4;
     *   // Detached comment for corge. This is not leading or trailing comments
     *   // to qux or corge because there are blank lines separating it from
     *   // both.
     *   // Detached comment for corge paragraph 2.
     *   optional string corge = 5;
     *   /&#42; Block comment attached
     *    * to corge.  Leading asterisks
     *    * will be removed. *&#47;
     *   /&#42; Block comment attached to
     *    * grault. *&#47;
     *   optional int32 grault = 6;
     *   // ignored detached comments.
     *
     * Generated from protobuf field <code>optional string leading_comments = 3;</code>
     * @return string
     */
    public function getLeadingComments()
    {
        return $this->leading_comments;
    }

    /**
     * If this SourceCodeInfo represents a complete declaration, these are any
     * comments appearing before and after the declaration which appear to be
     * attached to the declaration.
     * A series of line comments appearing on consecutive lines, with no other
     * tokens appearing on those lines, will be treated as a single comment.
     * leading_detached_comments will keep paragraphs of comments that appear
     * before (but not connected to) the current element. Each paragraph,
     * separated by empty lines, will be one comment element in the repeated
     * field.
     * Only the comment content is provided; comment markers (e.g. //) are
     * stripped out.  For block comments, leading whitespace and an asterisk
     * will be stripped from the beginning of each line other than the first.
     * Newlines are included in the output.
     * Examples:
     *   optional int32 foo = 1;  // Comment attached to foo.
     *   // Comment attached to bar.
     *   optional int32 bar = 2;
     *   optional string baz = 3;
     *   // Comment attached to baz.
     *   // Another line attached to baz.
     *   // Comment attached to qux.
     *   //
     *   // Another line attached to qux.
     *   optional double qux = 4;
     *   // Detached comment for corge. This is not leading or trailing comments
     *   // to qux or corge because there are blank lines separating it from
     *   // both.
     *   // Detached comment for corge paragraph 2.
     *   optional string corge = 5;
     *   /&#42; Block comment attached
     *    * to corge.  Leading asterisks
     *    * will be removed. *&#47;
     *   /&#42; Block comment attached to
     *    * grault. *&#47;
     *   optional int32 grault = 6;
     *   // ignored detached comments.
     *
     * Generated from protobuf field <code>optional string leading_comments = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLeadingComments($var)
    {
        GPBUtil::checkString($var, True);
        $this->leading_comments = $var;
        $this->has_leading_comments = true;

        return $this;
    }

    public function hasLeadingComments()
    {
        return $this->has_leading_comments;
    }

    /**
     * Generated from protobuf field <code>optional string trailing_comments = 4;</code>
     * @return string
     */
    public function getTrailingComments()
    {
        return $this->trailing_comments;
    }

    /**
     * Generated from protobuf field <code>optional string trailing_comments = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTrailingComments($var)
    {
        GPBUtil::checkString($var, True);
        $this->trailing_comments = $var;
        $this->has_trailing_comments = true;

        return $this;
    }

    public function hasTrailingComments()
    {
        return $this->has_trailing_comments;
    }

    /**
     * Generated from protobuf field <code>repeated string leading_detached_comments = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLeadingDetachedComments()
    {
        return $this->leading_detached_comments;
    }

    /**
     * Generated from protobuf field <code>repeated string leading_detached_comments = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLeadingDetachedComments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->leading_detached_comments = $arr;
        $this->has_leading_detached_comments = true;

        return $this;
    }

    public function hasLeadingDetachedComments()
    {
        return $this->has_leading_detached_comments;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Location::class, \Google\Protobuf\Internal\SourceCodeInfo_Location::class);

