<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuAdminDemo\Mapper;

use QuAdmin\Model\AbstractMapper;
use QuAdmin\Model\Interfaces\WebMapperInterface;

class QuAdminDemo extends AbstractMapper implements WebMapperInterface
{

    public function getRow($array = array(),$order = null)
    {
        $this->Order($order);
        $this->where($array);
        return $this->row();
    }

    public function getAll($array = array(),$order = null)
    {
        $this->Order($order);
        $this->where($array);
        $this->toObjectEntity();
        return $this->all();
    }

    public function getAllToArray($array = array(),$order = null)
    {
        $this->Order($order);
        $this->where($array);
        $this->toArray();
        return $this->all();
    }
}
