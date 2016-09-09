<?php

namespace mas_acceso\edificio\comentario;

use mas_acceso\util\Collector;
use mas_acceso\edificio\comentario\ComentarioClass;

class ComentarioCollector extends Collector
{

/**
     * Instancia un Colector de comentarios
     *
     *
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Añade un nuevo comentario a la base de datos
     *
     */
    public function addComentario($comentario)
    {
        $sentencia=("INSERT INTO public.comentario(
            c_id_edificio, c_id_usuario, c_contenido)
    VALUES (".$comentario->getIdEdificio().",".$comentario->getIdUsuario().",'".$comentario->getContenido()."')");
      /*echo $sentencia;*/
        self::execQuery($sentencia);
        return true;
    }

    public function deleteComentarioByUsuario($comentario)
    {
        $sentencia=("DELETE FROM public.comentario WHERE c_id_usuario=".$comentario->getIdUsuario());
      /*echo $sentencia;*/
        self::execQuery($sentencia);
        return true;
    }

    public function readAllComentarioByEdificio($idEdificio)
    {
        $sentencia=("SELECT FROM public.comentario WHERE c_id_edificio=".$idEdificio);

        return self::readAlldemo("comentario WHERE c_id_edificio=".$idEdificio,ComentarioClass::class);

    }
    /**
     * Retorna un comentario de la base de datos segun su Id
     *
     * @return String con la informacion del registro comentario segun su ID.
     */
    public function getComentario($id)
    {
        return parent::getById($id, 'comentario', 'c_id', ComentarioClass::class);
    }

    /**
     * Retorna toda la tabla de Comentario con sus atributos
     *
     * @return String con la informacion de todos los registros de la tabla comentario.
     */
    public function readAllComentario()
    {

        return self::read('comentario', ComentarioClass::class);
    }

    /**
     * Actualiza un registro de la tabla "comentario" segun su id.
     *
     */
    public function updateComentario($id, $comentario)
    {
        try {
             self::execQuery("UPDATE comentario SET c_contenido".$comentario->getContenido()."\' WHERE c_id=".$comentario->getId());

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
/**
     * Elimina un registro de la tabla "comentario" segun su id.
     *
     */
    public function deleteComentario($id)
    {
        try {
             self::execQuery("DELETE FROM public.comentario
 WHERE c_id=".$id);

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
