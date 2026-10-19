<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Movimentacoes extends BaseController
{
    public function index()
    {
        $perfil = $this->perfil();

        return view('movimentacoes', [
            'perfil'        => $perfil,
            'termos'        => $this->termos($perfil),
            'movimentacoes' => $this->mock($perfil),
        ]);
    }

    public function detalhes(int $id)
    {
        $perfil = $this->perfil();
        $movimentacao = $this->mock($perfil)[$id - 1] ?? null;

        if ($movimentacao === null) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view('detalhe_movimentacao', [
            'perfil'       => $perfil,
            'termos'       => $this->termos($perfil),
            'movimentacao' => $movimentacao,
        ]);
    }

    private function perfil(): string
    {
        return config('Perfis')->valido($this->request->getGet('perfil'));
    }

    /** Admin da plataforma vê "Movimentações"; os demais perfis veem "Notificações". */
    private function termos(string $perfil): array
    {
        return $perfil === 'plataforma'
            ? ['singular' => 'Movimentação', 'plural' => 'Movimentações']
            : ['singular' => 'Notificação', 'plural' => 'Notificações'];
    }

    /** Dados mockados até existir o Model de movimentações: 24 itens, os 4 primeiros não lidos. */
    private function mock(string $perfil): array
    {
        $termo    = $this->termos($perfil)['singular'];
        $empresas = ['AgroPay', 'Gesad Ltda', 'Cargill', 'ComexAgro', 'InfraEx', 'Syngenta'];
        $eventos  = [
            'O processo de importação da empresa %s foi concluído com sucesso. Todos os documentos necessários foram validados e aprovados pelo setor responsável. O processo está encerrado e disponível para consulta no histórico da empresa.',
            'Um novo documento foi anexado ao processo da empresa %s e aguarda a validação do setor responsável.',
            'O processo de exportação da empresa %s mudou para o status "Em andamento".',
            'O orçamento enviado para a empresa %s foi aprovado e já pode ser convertido em processo.',
        ];

        $lista = [];
        for ($i = 1; $i <= 24; $i++) {
            $empresa  = $empresas[($i - 1) % count($empresas)];
            $momento  = strtotime('2026-04-11 14:32') - ($i - 1) * 3600 * 5;
            $lista[] = [
                'id'        => $i,
                'titulo'    => 'Nova ' . $termo,
                'resumo'    => 'Esta é uma notificação de exemplo',
                'empresa'   => $empresa,
                'descricao' => sprintf($eventos[($i - 1) % count($eventos)], $empresa),
                'processo'  => str_pad((string) (44 + $i), 3, '0', STR_PAD_LEFT),
                'data'      => date('d/m/Y', $momento) . ' às ' . date('H:i', $momento),
                'tempo'     => $i <= 4 ? 'Agora mesmo' : ($i <= 10 ? 'Há ' . ($i * 5) . ' min' : 'Há ' . intdiv($i, 4) . ' dias'),
                'lida'      => $i > 4,
            ];
        }

        return $lista;
    }
}
