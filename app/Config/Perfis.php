<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Perfis de acesso e abas do painel.
 * Base para o RBAC: cada perfil lista as abas (recursos) que pode ver.
 */
class Perfis extends BaseConfig
{
    public string $padrao = 'plataforma';

    public array $perfis = [
        'plataforma' => [
            'titulo' => 'Painel Administrativo da Plataforma',
            'nome'   => 'Administrador',
            'avatar' => 'A',
            'abas'   => ['dashboard', 'processos', 'empresas', 'orcamentos'],
        ],
        'empresa' => [
            'titulo' => 'Painel Administrativo',
            'nome'   => 'Administrador Empresa Cliente',
            'avatar' => 'AC',
            'abas'   => ['dashboard', 'processos', 'clientes', 'orcamentos', 'funcionarios'],
        ],
        'funcionario' => [
            'titulo' => 'Painel Administrativo',
            'nome'   => 'Funcionário',
            'avatar' => 'F',
            'abas'   => ['dashboard', 'processos', 'clientes', 'orcamentos'],
        ],
        'cliente' => [
            'titulo' => 'Painel Administrativo',
            'nome'   => 'Cliente',
            'avatar' => 'C',
            'abas'   => ['dashboard', 'processos'],
        ],
    ];

    public array $abas = [
        'dashboard'    => ['rotulo' => 'Dashboard',    'icone' => 'fa-solid fa-table-cells-large'],
        'processos'    => ['rotulo' => 'Processos',    'icone' => 'fa-regular fa-file-lines'],
        'empresas'     => ['rotulo' => 'Empresas',     'icone' => 'fa-solid fa-building'],
        'clientes'     => ['rotulo' => 'Clientes',     'icone' => 'fa-solid fa-user-plus'],
        'orcamentos'   => ['rotulo' => 'Orçamentos',   'icone' => 'fa-solid fa-dollar-sign'],
        'funcionarios' => ['rotulo' => 'Funcionários', 'icone' => 'fa-solid fa-user-gear'],
    ];

    public function valido(?string $perfil): string
    {
        return isset($this->perfis[$perfil]) ? $perfil : $this->padrao;
    }

    /** URL do dashboard do perfil, opcionalmente já abrindo uma aba (#aba). */
    public function urlDashboard(string $perfil, ?string $aba = null): string
    {
        $url = base_url('dashboard' . ($perfil === $this->padrao ? '' : '?perfil=' . $perfil));

        return $aba && $aba !== 'dashboard' ? $url . '#' . $aba : $url;
    }
}
