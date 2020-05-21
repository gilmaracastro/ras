<?php
namespace br\gov\saude\esusab\ras\cadastrodomiciliar;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
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


class InstituicaoPermanenciaThrift {
  static $_TSPEC;

  /**
   * @var string
   */
  public $nomeInstituicaoPermanencia = null;
  /**
   * @var bool
   */
  public $stOutrosProfissionaisVinculados = null;
  /**
   * @var string
   */
  public $nomeResponsavelTecnico = null;
  /**
   * @var string
   */
  public $cnsResponsavelTecnico = null;
  /**
   * @var string
   */
  public $cargoInstituicao = null;
  /**
   * @var string
   */
  public $telefoneResponsavelTecnico = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'nomeInstituicaoPermanencia',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'stOutrosProfissionaisVinculados',
          'type' => TType::BOOL,
          ),
        3 => array(
          'var' => 'nomeResponsavelTecnico',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'cnsResponsavelTecnico',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'cargoInstituicao',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'telefoneResponsavelTecnico',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['nomeInstituicaoPermanencia'])) {
        $this->nomeInstituicaoPermanencia = $vals['nomeInstituicaoPermanencia'];
      }
      if (isset($vals['stOutrosProfissionaisVinculados'])) {
        $this->stOutrosProfissionaisVinculados = $vals['stOutrosProfissionaisVinculados'];
      }
      if (isset($vals['nomeResponsavelTecnico'])) {
        $this->nomeResponsavelTecnico = $vals['nomeResponsavelTecnico'];
      }
      if (isset($vals['cnsResponsavelTecnico'])) {
        $this->cnsResponsavelTecnico = $vals['cnsResponsavelTecnico'];
      }
      if (isset($vals['cargoInstituicao'])) {
        $this->cargoInstituicao = $vals['cargoInstituicao'];
      }
      if (isset($vals['telefoneResponsavelTecnico'])) {
        $this->telefoneResponsavelTecnico = $vals['telefoneResponsavelTecnico'];
      }
    }
  }

  public function getName() {
    return 'InstituicaoPermanenciaThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->nomeInstituicaoPermanencia);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->stOutrosProfissionaisVinculados);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->nomeResponsavelTecnico);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cnsResponsavelTecnico);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cargoInstituicao);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->telefoneResponsavelTecnico);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InstituicaoPermanenciaThrift');
    if ($this->nomeInstituicaoPermanencia !== null) {
      $xfer += $output->writeFieldBegin('nomeInstituicaoPermanencia', TType::STRING, 1);
      $xfer += $output->writeString($this->nomeInstituicaoPermanencia);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stOutrosProfissionaisVinculados !== null) {
      $xfer += $output->writeFieldBegin('stOutrosProfissionaisVinculados', TType::BOOL, 2);
      $xfer += $output->writeBool($this->stOutrosProfissionaisVinculados);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->nomeResponsavelTecnico !== null) {
      $xfer += $output->writeFieldBegin('nomeResponsavelTecnico', TType::STRING, 3);
      $xfer += $output->writeString($this->nomeResponsavelTecnico);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cnsResponsavelTecnico !== null) {
      $xfer += $output->writeFieldBegin('cnsResponsavelTecnico', TType::STRING, 4);
      $xfer += $output->writeString($this->cnsResponsavelTecnico);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cargoInstituicao !== null) {
      $xfer += $output->writeFieldBegin('cargoInstituicao', TType::STRING, 5);
      $xfer += $output->writeString($this->cargoInstituicao);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->telefoneResponsavelTecnico !== null) {
      $xfer += $output->writeFieldBegin('telefoneResponsavelTecnico', TType::STRING, 6);
      $xfer += $output->writeString($this->telefoneResponsavelTecnico);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class CondicaoMoradiaThrift {
  static $_TSPEC;

  /**
   * @var int
   */
  public $abastecimentoAgua = null;
  /**
   * @var int
   */
  public $areaProducaoRural = null;
  /**
   * @var int
   */
  public $destinoLixo = null;
  /**
   * @var int
   */
  public $formaEscoamentoBanheiro = null;
  /**
   * @var int
   */
  public $localizacao = null;
  /**
   * @var int
   */
  public $materialPredominanteParedesExtDomicilio = null;
  /**
   * @var string
   */
  public $nuComodos = null;
  /**
   * @var string
   */
  public $nuMoradores = null;
  /**
   * @var int
   */
  public $situacaoMoradiaPosseTerra = null;
  /**
   * @var bool
   */
  public $stDisponibilidadeEnergiaEletrica = null;
  /**
   * @var int
   */
  public $tipoAcessoDomicilio = null;
  /**
   * @var int
   */
  public $tipoDomicilio = null;
  /**
   * @var int
   */
  public $aguaConsumoDomicilio = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'abastecimentoAgua',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'areaProducaoRural',
          'type' => TType::I64,
          ),
        3 => array(
          'var' => 'destinoLixo',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'formaEscoamentoBanheiro',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'localizacao',
          'type' => TType::I64,
          ),
        6 => array(
          'var' => 'materialPredominanteParedesExtDomicilio',
          'type' => TType::I64,
          ),
        7 => array(
          'var' => 'nuComodos',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'nuMoradores',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'situacaoMoradiaPosseTerra',
          'type' => TType::I64,
          ),
        10 => array(
          'var' => 'stDisponibilidadeEnergiaEletrica',
          'type' => TType::BOOL,
          ),
        11 => array(
          'var' => 'tipoAcessoDomicilio',
          'type' => TType::I64,
          ),
        12 => array(
          'var' => 'tipoDomicilio',
          'type' => TType::I64,
          ),
        13 => array(
          'var' => 'aguaConsumoDomicilio',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['abastecimentoAgua'])) {
        $this->abastecimentoAgua = $vals['abastecimentoAgua'];
      }
      if (isset($vals['areaProducaoRural'])) {
        $this->areaProducaoRural = $vals['areaProducaoRural'];
      }
      if (isset($vals['destinoLixo'])) {
        $this->destinoLixo = $vals['destinoLixo'];
      }
      if (isset($vals['formaEscoamentoBanheiro'])) {
        $this->formaEscoamentoBanheiro = $vals['formaEscoamentoBanheiro'];
      }
      if (isset($vals['localizacao'])) {
        $this->localizacao = $vals['localizacao'];
      }
      if (isset($vals['materialPredominanteParedesExtDomicilio'])) {
        $this->materialPredominanteParedesExtDomicilio = $vals['materialPredominanteParedesExtDomicilio'];
      }
      if (isset($vals['nuComodos'])) {
        $this->nuComodos = $vals['nuComodos'];
      }
      if (isset($vals['nuMoradores'])) {
        $this->nuMoradores = $vals['nuMoradores'];
      }
      if (isset($vals['situacaoMoradiaPosseTerra'])) {
        $this->situacaoMoradiaPosseTerra = $vals['situacaoMoradiaPosseTerra'];
      }
      if (isset($vals['stDisponibilidadeEnergiaEletrica'])) {
        $this->stDisponibilidadeEnergiaEletrica = $vals['stDisponibilidadeEnergiaEletrica'];
      }
      if (isset($vals['tipoAcessoDomicilio'])) {
        $this->tipoAcessoDomicilio = $vals['tipoAcessoDomicilio'];
      }
      if (isset($vals['tipoDomicilio'])) {
        $this->tipoDomicilio = $vals['tipoDomicilio'];
      }
      if (isset($vals['aguaConsumoDomicilio'])) {
        $this->aguaConsumoDomicilio = $vals['aguaConsumoDomicilio'];
      }
    }
  }

  public function getName() {
    return 'CondicaoMoradiaThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->abastecimentoAgua);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->areaProducaoRural);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->destinoLixo);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->formaEscoamentoBanheiro);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->localizacao);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->materialPredominanteParedesExtDomicilio);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->nuComodos);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->nuMoradores);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->situacaoMoradiaPosseTerra);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->stDisponibilidadeEnergiaEletrica);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->tipoAcessoDomicilio);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->tipoDomicilio);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->aguaConsumoDomicilio);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('CondicaoMoradiaThrift');
    if ($this->abastecimentoAgua !== null) {
      $xfer += $output->writeFieldBegin('abastecimentoAgua', TType::I64, 1);
      $xfer += $output->writeI64($this->abastecimentoAgua);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->areaProducaoRural !== null) {
      $xfer += $output->writeFieldBegin('areaProducaoRural', TType::I64, 2);
      $xfer += $output->writeI64($this->areaProducaoRural);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->destinoLixo !== null) {
      $xfer += $output->writeFieldBegin('destinoLixo', TType::I64, 3);
      $xfer += $output->writeI64($this->destinoLixo);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->formaEscoamentoBanheiro !== null) {
      $xfer += $output->writeFieldBegin('formaEscoamentoBanheiro', TType::I64, 4);
      $xfer += $output->writeI64($this->formaEscoamentoBanheiro);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->localizacao !== null) {
      $xfer += $output->writeFieldBegin('localizacao', TType::I64, 5);
      $xfer += $output->writeI64($this->localizacao);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->materialPredominanteParedesExtDomicilio !== null) {
      $xfer += $output->writeFieldBegin('materialPredominanteParedesExtDomicilio', TType::I64, 6);
      $xfer += $output->writeI64($this->materialPredominanteParedesExtDomicilio);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->nuComodos !== null) {
      $xfer += $output->writeFieldBegin('nuComodos', TType::STRING, 7);
      $xfer += $output->writeString($this->nuComodos);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->nuMoradores !== null) {
      $xfer += $output->writeFieldBegin('nuMoradores', TType::STRING, 8);
      $xfer += $output->writeString($this->nuMoradores);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->situacaoMoradiaPosseTerra !== null) {
      $xfer += $output->writeFieldBegin('situacaoMoradiaPosseTerra', TType::I64, 9);
      $xfer += $output->writeI64($this->situacaoMoradiaPosseTerra);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stDisponibilidadeEnergiaEletrica !== null) {
      $xfer += $output->writeFieldBegin('stDisponibilidadeEnergiaEletrica', TType::BOOL, 10);
      $xfer += $output->writeBool($this->stDisponibilidadeEnergiaEletrica);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tipoAcessoDomicilio !== null) {
      $xfer += $output->writeFieldBegin('tipoAcessoDomicilio', TType::I64, 11);
      $xfer += $output->writeI64($this->tipoAcessoDomicilio);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tipoDomicilio !== null) {
      $xfer += $output->writeFieldBegin('tipoDomicilio', TType::I64, 12);
      $xfer += $output->writeI64($this->tipoDomicilio);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->aguaConsumoDomicilio !== null) {
      $xfer += $output->writeFieldBegin('aguaConsumoDomicilio', TType::I64, 13);
      $xfer += $output->writeI64($this->aguaConsumoDomicilio);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class FamiliaRowThrift {
  static $_TSPEC;

  /**
   * @var int
   */
  public $dataNascimentoResponsavel = null;
  /**
   * @var string
   */
  public $numeroCnsResponsavel = null;
  /**
   * @var int
   */
  public $numeroMembrosFamilia = null;
  /**
   * @var string
   */
  public $numeroProntuario = null;
  /**
   * @var int
   */
  public $rendaFamiliar = null;
  /**
   * @var int
   */
  public $resideDesde = null;
  /**
   * @var bool
   */
  public $stMudanca = null;
  /**
   * @var string
   */
  public $cpfResponsavel = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'dataNascimentoResponsavel',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'numeroCnsResponsavel',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'numeroMembrosFamilia',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'numeroProntuario',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'rendaFamiliar',
          'type' => TType::I64,
          ),
        6 => array(
          'var' => 'resideDesde',
          'type' => TType::I64,
          ),
        7 => array(
          'var' => 'stMudanca',
          'type' => TType::BOOL,
          ),
        8 => array(
          'var' => 'cpfResponsavel',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['dataNascimentoResponsavel'])) {
        $this->dataNascimentoResponsavel = $vals['dataNascimentoResponsavel'];
      }
      if (isset($vals['numeroCnsResponsavel'])) {
        $this->numeroCnsResponsavel = $vals['numeroCnsResponsavel'];
      }
      if (isset($vals['numeroMembrosFamilia'])) {
        $this->numeroMembrosFamilia = $vals['numeroMembrosFamilia'];
      }
      if (isset($vals['numeroProntuario'])) {
        $this->numeroProntuario = $vals['numeroProntuario'];
      }
      if (isset($vals['rendaFamiliar'])) {
        $this->rendaFamiliar = $vals['rendaFamiliar'];
      }
      if (isset($vals['resideDesde'])) {
        $this->resideDesde = $vals['resideDesde'];
      }
      if (isset($vals['stMudanca'])) {
        $this->stMudanca = $vals['stMudanca'];
      }
      if (isset($vals['cpfResponsavel'])) {
        $this->cpfResponsavel = $vals['cpfResponsavel'];
      }
    }
  }

  public function getName() {
    return 'FamiliaRowThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->dataNascimentoResponsavel);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->numeroCnsResponsavel);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->numeroMembrosFamilia);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->numeroProntuario);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->rendaFamiliar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->resideDesde);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->stMudanca);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->cpfResponsavel);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('FamiliaRowThrift');
    if ($this->dataNascimentoResponsavel !== null) {
      $xfer += $output->writeFieldBegin('dataNascimentoResponsavel', TType::I64, 1);
      $xfer += $output->writeI64($this->dataNascimentoResponsavel);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->numeroCnsResponsavel !== null) {
      $xfer += $output->writeFieldBegin('numeroCnsResponsavel', TType::STRING, 2);
      $xfer += $output->writeString($this->numeroCnsResponsavel);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->numeroMembrosFamilia !== null) {
      $xfer += $output->writeFieldBegin('numeroMembrosFamilia', TType::I32, 3);
      $xfer += $output->writeI32($this->numeroMembrosFamilia);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->numeroProntuario !== null) {
      $xfer += $output->writeFieldBegin('numeroProntuario', TType::STRING, 4);
      $xfer += $output->writeString($this->numeroProntuario);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->rendaFamiliar !== null) {
      $xfer += $output->writeFieldBegin('rendaFamiliar', TType::I64, 5);
      $xfer += $output->writeI64($this->rendaFamiliar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->resideDesde !== null) {
      $xfer += $output->writeFieldBegin('resideDesde', TType::I64, 6);
      $xfer += $output->writeI64($this->resideDesde);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stMudanca !== null) {
      $xfer += $output->writeFieldBegin('stMudanca', TType::BOOL, 7);
      $xfer += $output->writeBool($this->stMudanca);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->cpfResponsavel !== null) {
      $xfer += $output->writeFieldBegin('cpfResponsavel', TType::STRING, 8);
      $xfer += $output->writeString($this->cpfResponsavel);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class CadastroDomiciliarThrift {
  static $_TSPEC;

  /**
   * @var int[]
   */
  public $animaisNoDomicilio = null;
  /**
   * @var \br\gov\saude\esusab\ras\cadastrodomiciliar\CondicaoMoradiaThrift
   */
  public $condicaoMoradia = null;
  /**
   * @var \br\gov\saude\esusab\ras\common\EnderecoLocalPermanenciaThrift
   */
  public $enderecoLocalPermanencia = null;
  /**
   * @var \br\gov\saude\esusab\ras\cadastrodomiciliar\FamiliaRowThrift[]
   */
  public $familias = null;
  /**
   * @var bool
   */
  public $fichaAtualizada = null;
  /**
   * @var string
   */
  public $quantosAnimaisNoDomicilio = null;
  /**
   * @var bool
   */
  public $stAnimaisNoDomicilio = null;
  /**
   * @var bool
   */
  public $statusTermoRecusa = null;
  /**
   * @var int
   */
  public $tpCdsOrigem = null;
  /**
   * @var string
   */
  public $uuid = null;
  /**
   * @var string
   */
  public $uuidFichaOriginadora = null;
  /**
   * @var int
   */
  public $tipoDeImovel = null;
  /**
   * @var \br\gov\saude\esusab\ras\cadastrodomiciliar\InstituicaoPermanenciaThrift
   */
  public $instituicaoPermanencia = null;
  /**
   * @var \br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift
   */
  public $headerTransport = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'animaisNoDomicilio',
          'type' => TType::LST,
          'etype' => TType::I64,
          'elem' => array(
            'type' => TType::I64,
            ),
          ),
        2 => array(
          'var' => 'condicaoMoradia',
          'type' => TType::STRUCT,
          'class' => '\br\gov\saude\esusab\ras\cadastrodomiciliar\CondicaoMoradiaThrift',
          ),
        4 => array(
          'var' => 'enderecoLocalPermanencia',
          'type' => TType::STRUCT,
          'class' => '\br\gov\saude\esusab\ras\common\EnderecoLocalPermanenciaThrift',
          ),
        5 => array(
          'var' => 'familias',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\br\gov\saude\esusab\ras\cadastrodomiciliar\FamiliaRowThrift',
            ),
          ),
        6 => array(
          'var' => 'fichaAtualizada',
          'type' => TType::BOOL,
          ),
        7 => array(
          'var' => 'quantosAnimaisNoDomicilio',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'stAnimaisNoDomicilio',
          'type' => TType::BOOL,
          ),
        9 => array(
          'var' => 'statusTermoRecusa',
          'type' => TType::BOOL,
          ),
        10 => array(
          'var' => 'tpCdsOrigem',
          'type' => TType::I32,
          ),
        11 => array(
          'var' => 'uuid',
          'type' => TType::STRING,
          ),
        12 => array(
          'var' => 'uuidFichaOriginadora',
          'type' => TType::STRING,
          ),
        13 => array(
          'var' => 'tipoDeImovel',
          'type' => TType::I64,
          ),
        14 => array(
          'var' => 'instituicaoPermanencia',
          'type' => TType::STRUCT,
          'class' => '\br\gov\saude\esusab\ras\cadastrodomiciliar\InstituicaoPermanenciaThrift',
          ),
        15 => array(
          'var' => 'headerTransport',
          'type' => TType::STRUCT,
          'class' => '\br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['animaisNoDomicilio'])) {
        $this->animaisNoDomicilio = $vals['animaisNoDomicilio'];
      }
      if (isset($vals['condicaoMoradia'])) {
        $this->condicaoMoradia = $vals['condicaoMoradia'];
      }
      if (isset($vals['enderecoLocalPermanencia'])) {
        $this->enderecoLocalPermanencia = $vals['enderecoLocalPermanencia'];
      }
      if (isset($vals['familias'])) {
        $this->familias = $vals['familias'];
      }
      if (isset($vals['fichaAtualizada'])) {
        $this->fichaAtualizada = $vals['fichaAtualizada'];
      }
      if (isset($vals['quantosAnimaisNoDomicilio'])) {
        $this->quantosAnimaisNoDomicilio = $vals['quantosAnimaisNoDomicilio'];
      }
      if (isset($vals['stAnimaisNoDomicilio'])) {
        $this->stAnimaisNoDomicilio = $vals['stAnimaisNoDomicilio'];
      }
      if (isset($vals['statusTermoRecusa'])) {
        $this->statusTermoRecusa = $vals['statusTermoRecusa'];
      }
      if (isset($vals['tpCdsOrigem'])) {
        $this->tpCdsOrigem = $vals['tpCdsOrigem'];
      }
      if (isset($vals['uuid'])) {
        $this->uuid = $vals['uuid'];
      }
      if (isset($vals['uuidFichaOriginadora'])) {
        $this->uuidFichaOriginadora = $vals['uuidFichaOriginadora'];
      }
      if (isset($vals['tipoDeImovel'])) {
        $this->tipoDeImovel = $vals['tipoDeImovel'];
      }
      if (isset($vals['instituicaoPermanencia'])) {
        $this->instituicaoPermanencia = $vals['instituicaoPermanencia'];
      }
      if (isset($vals['headerTransport'])) {
        $this->headerTransport = $vals['headerTransport'];
      }
    }
  }

  public function getName() {
    return 'CadastroDomiciliarThrift';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::LST) {
            $this->animaisNoDomicilio = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readI64($elem5);
              $this->animaisNoDomicilio []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->condicaoMoradia = new \br\gov\saude\esusab\ras\cadastrodomiciliar\CondicaoMoradiaThrift();
            $xfer += $this->condicaoMoradia->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRUCT) {
            $this->enderecoLocalPermanencia = new \br\gov\saude\esusab\ras\common\EnderecoLocalPermanenciaThrift();
            $xfer += $this->enderecoLocalPermanencia->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::LST) {
            $this->familias = array();
            $_size6 = 0;
            $_etype9 = 0;
            $xfer += $input->readListBegin($_etype9, $_size6);
            for ($_i10 = 0; $_i10 < $_size6; ++$_i10)
            {
              $elem11 = null;
              $elem11 = new \br\gov\saude\esusab\ras\cadastrodomiciliar\FamiliaRowThrift();
              $xfer += $elem11->read($input);
              $this->familias []= $elem11;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->fichaAtualizada);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->quantosAnimaisNoDomicilio);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->stAnimaisNoDomicilio);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->statusTermoRecusa);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->tpCdsOrigem);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->uuid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->uuidFichaOriginadora);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->tipoDeImovel);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::STRUCT) {
            $this->instituicaoPermanencia = new \br\gov\saude\esusab\ras\cadastrodomiciliar\InstituicaoPermanenciaThrift();
            $xfer += $this->instituicaoPermanencia->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::STRUCT) {
            $this->headerTransport = new \br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift();
            $xfer += $this->headerTransport->read($input);
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

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('CadastroDomiciliarThrift');
    if ($this->animaisNoDomicilio !== null) {
      if (!is_array($this->animaisNoDomicilio)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('animaisNoDomicilio', TType::LST, 1);
      {
        $output->writeListBegin(TType::I64, count($this->animaisNoDomicilio));
        {
          foreach ($this->animaisNoDomicilio as $iter12)
          {
            $xfer += $output->writeI64($iter12);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->condicaoMoradia !== null) {
      if (!is_object($this->condicaoMoradia)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('condicaoMoradia', TType::STRUCT, 2);
      $xfer += $this->condicaoMoradia->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enderecoLocalPermanencia !== null) {
      if (!is_object($this->enderecoLocalPermanencia)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('enderecoLocalPermanencia', TType::STRUCT, 4);
      $xfer += $this->enderecoLocalPermanencia->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->familias !== null) {
      if (!is_array($this->familias)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('familias', TType::LST, 5);
      {
        $output->writeListBegin(TType::STRUCT, count($this->familias));
        {
          foreach ($this->familias as $iter13)
          {
            $xfer += $iter13->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fichaAtualizada !== null) {
      $xfer += $output->writeFieldBegin('fichaAtualizada', TType::BOOL, 6);
      $xfer += $output->writeBool($this->fichaAtualizada);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->quantosAnimaisNoDomicilio !== null) {
      $xfer += $output->writeFieldBegin('quantosAnimaisNoDomicilio', TType::STRING, 7);
      $xfer += $output->writeString($this->quantosAnimaisNoDomicilio);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stAnimaisNoDomicilio !== null) {
      $xfer += $output->writeFieldBegin('stAnimaisNoDomicilio', TType::BOOL, 8);
      $xfer += $output->writeBool($this->stAnimaisNoDomicilio);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->statusTermoRecusa !== null) {
      $xfer += $output->writeFieldBegin('statusTermoRecusa', TType::BOOL, 9);
      $xfer += $output->writeBool($this->statusTermoRecusa);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tpCdsOrigem !== null) {
      $xfer += $output->writeFieldBegin('tpCdsOrigem', TType::I32, 10);
      $xfer += $output->writeI32($this->tpCdsOrigem);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->uuid !== null) {
      $xfer += $output->writeFieldBegin('uuid', TType::STRING, 11);
      $xfer += $output->writeString($this->uuid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->uuidFichaOriginadora !== null) {
      $xfer += $output->writeFieldBegin('uuidFichaOriginadora', TType::STRING, 12);
      $xfer += $output->writeString($this->uuidFichaOriginadora);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tipoDeImovel !== null) {
      $xfer += $output->writeFieldBegin('tipoDeImovel', TType::I64, 13);
      $xfer += $output->writeI64($this->tipoDeImovel);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->instituicaoPermanencia !== null) {
      if (!is_object($this->instituicaoPermanencia)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('instituicaoPermanencia', TType::STRUCT, 14);
      $xfer += $this->instituicaoPermanencia->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->headerTransport !== null) {
      if (!is_object($this->headerTransport)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('headerTransport', TType::STRUCT, 15);
      $xfer += $this->headerTransport->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}
