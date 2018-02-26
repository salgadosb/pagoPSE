<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use theluguiant\PseComposer\Pse as Pse;
use App\Http\Requests;

class PruebaRepository extends BaseRepository{
    
    //Llamado a la Función Pse 
    public function getModel()
    {
         return new Pse();
    }
     
    //Lista Usuarios
    public function listaUsuarios()
    {
        return $this->getModel()::all();
        
    }
    
     public function destroy($id){
        
        $this->getModel()->findOrFail($id)->delete(); 
    }
}