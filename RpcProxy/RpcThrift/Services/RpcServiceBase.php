<?php
namespace RpcThrift\Services;

/**
 * Autogenerated by Thrift Compiler (1.0.0-dev)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * @generated
 */
use Thrift\Exception\TApplicationException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

//
// 文件名: RpcServiceBase, 内部的类名都是以文件名开头, 例如: RpcServiceBase__If, RpcServiceBase__Client
//
interface RpcServiceBaseIf {
  public function ping();
}


class RpcServiceBaseClient implements \RpcThrift\Services\RpcServiceBaseIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output = null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function ping() {
    $this->send_ping();
    $this->recv_ping();
  }

  public function send_ping() {
    $args = new \RpcThrift\Services\RpcServiceBase_ping_args();

    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ping', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ping', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_ping() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\RpcThrift\Services\RpcServiceBase_ping_result', $this->input_->isStrictRead());
    } else {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \RpcThrift\Services\RpcServiceBase_ping_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    return;
  }

}


// HELPER FUNCTIONS AND STRUCTURES

class RpcServiceBase_ping_args {
  static $isValidate = false;

  static $_TSPEC = array();


  public function __construct() {
  }

  public function getName() {
    return 'RpcServiceBase_ping_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('RpcServiceBase_ping_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class RpcServiceBase_ping_result {
  static $isValidate = false;

  static $_TSPEC = array();


  public function __construct() {
  }

  public function getName() {
    return 'RpcServiceBase_ping_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('RpcServiceBase_ping_result');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


