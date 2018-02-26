<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PruebaRepository;
use App\Http\Requests;

class PruebaController extends Controller
{
    // Conexión al repositorio PruebaRepository
    public function __construct(PruebaRepository $PruebaRepository)
    {
        $this->PruebaRepository = $PruebaRepository;
    }
    
    // Llamado a Pse desde PruebaRepository
    public function index()
    {
        $pse = $this->PruebaRepository->getModel(); 
        echo var_dump($pse->services->getBankList());
    }
}
