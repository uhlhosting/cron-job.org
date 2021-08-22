<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class NotificationEntry
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'notificationId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'jobLogId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        3 => array(
            'var' => 'jobIdentifier',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobIdentifier',
        ),
        4 => array(
            'var' => 'date',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'type',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        6 => array(
            'var' => 'dateStarted',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        7 => array(
            'var' => 'datePlanned',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        8 => array(
            'var' => 'url',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'executionStatus',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        10 => array(
            'var' => 'executionStatusText',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'httpStatus',
            'isRequired' => false,
            'type' => TType::I16,
        ),
    );

    /**
     * @var int
     */
    public $notificationId = null;
    /**
     * @var int
     */
    public $jobLogId = null;
    /**
     * @var \chronos\JobIdentifier
     */
    public $jobIdentifier = null;
    /**
     * @var int
     */
    public $date = null;
    /**
     * @var int
     */
    public $type = null;
    /**
     * @var int
     */
    public $dateStarted = null;
    /**
     * @var int
     */
    public $datePlanned = null;
    /**
     * @var string
     */
    public $url = null;
    /**
     * @var int
     */
    public $executionStatus = null;
    /**
     * @var string
     */
    public $executionStatusText = null;
    /**
     * @var int
     */
    public $httpStatus = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['notificationId'])) {
                $this->notificationId = $vals['notificationId'];
            }
            if (isset($vals['jobLogId'])) {
                $this->jobLogId = $vals['jobLogId'];
            }
            if (isset($vals['jobIdentifier'])) {
                $this->jobIdentifier = $vals['jobIdentifier'];
            }
            if (isset($vals['date'])) {
                $this->date = $vals['date'];
            }
            if (isset($vals['type'])) {
                $this->type = $vals['type'];
            }
            if (isset($vals['dateStarted'])) {
                $this->dateStarted = $vals['dateStarted'];
            }
            if (isset($vals['datePlanned'])) {
                $this->datePlanned = $vals['datePlanned'];
            }
            if (isset($vals['url'])) {
                $this->url = $vals['url'];
            }
            if (isset($vals['executionStatus'])) {
                $this->executionStatus = $vals['executionStatus'];
            }
            if (isset($vals['executionStatusText'])) {
                $this->executionStatusText = $vals['executionStatusText'];
            }
            if (isset($vals['httpStatus'])) {
                $this->httpStatus = $vals['httpStatus'];
            }
        }
    }

    public function getName()
    {
        return 'NotificationEntry';
    }


    public function read($input)
    {
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
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->notificationId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->jobLogId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->jobIdentifier = new \chronos\JobIdentifier();
                        $xfer += $this->jobIdentifier->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->date);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->dateStarted);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->datePlanned);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->url);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->executionStatus);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->executionStatusText);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::I16) {
                        $xfer += $input->readI16($this->httpStatus);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('NotificationEntry');
        if ($this->notificationId !== null) {
            $xfer += $output->writeFieldBegin('notificationId', TType::I64, 1);
            $xfer += $output->writeI64($this->notificationId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->jobLogId !== null) {
            $xfer += $output->writeFieldBegin('jobLogId', TType::I64, 2);
            $xfer += $output->writeI64($this->jobLogId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->jobIdentifier !== null) {
            if (!is_object($this->jobIdentifier)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('jobIdentifier', TType::STRUCT, 3);
            $xfer += $this->jobIdentifier->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->date !== null) {
            $xfer += $output->writeFieldBegin('date', TType::I64, 4);
            $xfer += $output->writeI64($this->date);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->type !== null) {
            $xfer += $output->writeFieldBegin('type', TType::I32, 5);
            $xfer += $output->writeI32($this->type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dateStarted !== null) {
            $xfer += $output->writeFieldBegin('dateStarted', TType::I64, 6);
            $xfer += $output->writeI64($this->dateStarted);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->datePlanned !== null) {
            $xfer += $output->writeFieldBegin('datePlanned', TType::I64, 7);
            $xfer += $output->writeI64($this->datePlanned);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->url !== null) {
            $xfer += $output->writeFieldBegin('url', TType::STRING, 8);
            $xfer += $output->writeString($this->url);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->executionStatus !== null) {
            $xfer += $output->writeFieldBegin('executionStatus', TType::I32, 9);
            $xfer += $output->writeI32($this->executionStatus);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->executionStatusText !== null) {
            $xfer += $output->writeFieldBegin('executionStatusText', TType::STRING, 10);
            $xfer += $output->writeString($this->executionStatusText);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->httpStatus !== null) {
            $xfer += $output->writeFieldBegin('httpStatus', TType::I16, 11);
            $xfer += $output->writeI16($this->httpStatus);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}