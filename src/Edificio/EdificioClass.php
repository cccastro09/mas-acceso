<?php

namespace mas_aceso\Edificio;

using mas_aceso\Edificio\Reportes\ReporteCollector;
using mas_aceso\Edificio\Categorias\CategoriaCollector;
/**
 *
 */
class EdificioClass
{
    private $e_id;
    private $e_name;
    private $e_dscr;
    private $e_prcnt_accs;
    private $e_report;
    private $e_cid;

    public function __construct()
    {

    }

    public function getId()
    {
      return $this->$e_id;
    }

    public function getNombre()
    {
      return $this->$e_name;
    }

    public function getDescripcion()
    {
      return $this->$e_dscr;
    }

    public function getAccesibilidad()
    {
      return $this->$e_prcnt_accs;
    }

    public function getReporte()
    {
      return ReporteCollector::getById($this->$e_report);
    }

    public function getCategoria()
    {
      return CategoriaCollector::getById($this->$e_cid);
    }

    public function setNombre($n)
    {
      $this->$e_name = $n;
    }
    public function setDescripcion($n)
    {
      $this->$e_dscr = $n;
    }

    public function setCategoria($categoria)
    {
      $this->$e_cid = $categoria->getId();
    }
    
}
?>
