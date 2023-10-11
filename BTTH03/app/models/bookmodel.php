<?php
class book {
    private $id;
    private $tenSach;
    private $namXuatBan;
    private $idTacGia;

    public function __construct ($id, $tenSach, $namXuatBan, $idTacGia){
        $this->id = $id;
        $this->tenSach = $tenSach;
        $this->namXuatBan = $namXuatBan;
        $this->idTacGia = $idTacGia;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id): self{
        $this->id = $id;
        return $this;
    }

    public function getNam(){
        return $this->namXuatBan;
    }
    public function getIdTacGia(){
        return $this->idTacGia;
    }
    public function setNam($namXuatBan): self{
        $this->namXuatBan = $namXuatBan;
        return $this;
    }
    public function getTenSach(){
        return $this->tenSach;
    }
    public function setTenSach($tenSach): self{
        $this->tenSach = $tenSach;
        return $this;
    }
}