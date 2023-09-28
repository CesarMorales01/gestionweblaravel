<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class GlobalVars extends Model
{
    use HasFactory;

    public $globalVars;

    function __construct()
    {
        $nombreApp="gestionpymes";

        $this->globalVars = new stdClass();
        $this->globalVars->urlRoot = "https://admin.bellohogar.online/";
        // $this->globalVars->urlRoot = "http://192.168.20.20:8000/";

         $this->globalVars->myUrl="https://admin.bellohogar.online/";
       //$this->globalVars->myUrl = "http://192.168.20.20:8000/";

       // $this->globalVars->dirImagenesCategorias = "C:/laragon\www/".$nombreApp."/public/Images/Categories/";
       $this->globalVars->dirImagenesCategorias = "/home/u629086351/domains/bellohogar.online/public_html/admin/public/Images/Categories/";

        //$this->globalVars->urlImagenesCategorias =  $this->globalVars->myUrl."Images/Categories/";
        $this->globalVars->urlImagenesCategorias = "https://admin.bellohogar.online/Images/Categories/";

       // $this->globalVars->dirImagenes = "C:\/laragon\www\/".$nombreApp."\/public\Images\/Products\/";
       $this->globalVars->dirImagenes = "/home/u629086351/domains/bellohogar.online/public_html/admin/public/Images/Products/";

       // $this->globalVars->urlImagenes =  $this->globalVars->myUrl."Images/Products/";
       $this->globalVars->urlImagenes="https://bellohogar.online/Images/Products/";
    }


    public function getGlobalVars()
    {
        return $this->globalVars;
    }
}