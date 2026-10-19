<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Enquanto não há login real, o perfil vem de ?perfil=. Com o RBAC, virá da sessão.
        $config = config('Perfis');
        $perfil = $config->valido($this->request->getGet('perfil'));
        $abas   = $config->perfis[$perfil]['abas'];

        return view('dashboard', [
            'perfil'   => $perfil,
            'abas'     => $abas,
            'empresas' => in_array('empresas', $abas, true) ? $this->empresas() : [],
        ] + $this->painel($perfil));
    }

    /** Dados mockados da aba Empresas; ?nova=1 simula a empresa recém-cadastrada. */
    private function empresas(): array
    {
        $empresas = [
            ['nome' => 'AgroPay', 'processos' => 4, 'ativa' => true],
            ['nome' => 'Cargill', 'processos' => 3, 'ativa' => true],
            ['nome' => 'Samsung', 'processos' => 0, 'ativa' => false],
            ['nome' => 'Fatec',   'processos' => 0, 'ativa' => false],
        ];

        if ($this->request->getGet('nova')) {
            array_unshift($empresas, ['nome' => 'Gesad', 'processos' => 0, 'ativa' => true]);
        }

        return $empresas;
    }

    /**
     * Widgets e dados (mockados) que cada nível de acesso enxerga.
     * 'linhas' define quais widgets aparecem e em que ordem.
     */
    private function painel(string $perfil): array
    {
        $recentes = [
            ['Syngenta', 'Exportação', 'andamento'],
            ['AgroPay', 'Importação', 'concluido'],
            ['Cargill', $perfil === 'cliente' ? 'Importação' : 'Exportação', 'cancelado'],
        ];

        $semana = ['Seg' => 8, 'Ter' => 10, 'Qua' => 5, 'Qui' => 12, 'Sex' => 7, 'Sab' => 3, 'Dom' => 1];

        $empresaCliente = [
            'indicadores' => [
                ['fa-solid fa-dollar-sign', 'Orçamentos Realizados', 17],
                ['fa-solid fa-gear', 'Processos Ativos', 132],
                ['fa-solid fa-user-group', 'Usuários Ativos', 33],
            ],
            'linhas'   => [['cotacoes', 'ranking', 'status'], ['semana', 'recentes']],
            'ranking'  => ['titulo' => 'Top clientes (por processos)', 'itens' => ['Gesad' => 23, 'ComexAgro' => 17, 'InfraEx' => 13]],
            'status'   => ['Concluído' => 33, 'Em andamento' => 17, 'Cancelado' => 2],
            'semana'   => $semana,
            'recentes' => $recentes,
            'recentesPreenchidos' => false,
        ];

        return match ($perfil) {
            'plataforma' => [
                'indicadores' => [
                    ['fa-solid fa-building', 'Empresas Ativas', 241],
                    ['fa-solid fa-gear', 'Processos Ativos', 132],
                    ['fa-solid fa-user-group', 'Usuários Ativos', 542],
                ],
                'linhas'   => [['cotacoes', 'ranking', 'status'], ['semana', 'recentes']],
                'ranking'  => ['titulo' => 'Top Empresas', 'itens' => ['Gesad' => 72, 'ComexAgro' => 32, 'InfraEx' => 21]],
                'status'   => ['Concluído' => 56, 'Em andamento' => 28, 'Cancelado' => 2],
                'semana'   => $semana,
                'recentes' => $recentes,
                'recentesPreenchidos' => false,
            ],
            'empresa', 'funcionario' => $empresaCliente,
            'cliente' => [
                'indicadores' => [],
                'linhas'   => [['cotacoes', 'recentes', 'status']],
                'ranking'  => null,
                'status'   => ['Concluído' => 56, 'Em andamento' => 28, 'Cancelado' => 2],
                'semana'   => [],
                'recentes' => $recentes,
                'recentesPreenchidos' => true,
            ],
        };
    }
}
