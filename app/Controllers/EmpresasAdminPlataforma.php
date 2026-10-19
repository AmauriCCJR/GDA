<?php

namespace App\Controllers;

class EmpresasAdminPlataforma extends BaseController
{
    public function detalhes()
    {
        return view('detalhes_empresa');
    }

    public function cadastrar()
    {
        return view('cadastrar_empresa', ['editar' => (bool) $this->request->getGet('editar')]);
    }
}
