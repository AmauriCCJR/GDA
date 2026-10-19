<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->get('solicitar-acesso', 'SolicitarAcesso::index');
$routes->get('contatos', 'Contatos::index');
$routes->get('duvidas-frequentes', 'DuvidasFrequentes::index');
$routes->get('termos-de-uso', 'TermosDeUso::index');
$routes->get('politica-de-privacidade', 'PoliticaDePrivacidade::index');
$routes->get('recuperar-senha', 'RecuperarSenha::index');
$routes->post('recuperar-senha', 'RecuperarSenha::enviar');
$routes->get('redefinir-senha', 'RedefinirSenha::index');
$routes->match(['GET', 'POST'], 'senha-alterada', 'SenhaAlterada::index');
$routes->get('loading-login', 'LoadingLogin::index');
$routes->get('loading-signout', 'LoadingSignout::index');
$routes->get('cotacao', 'Cotacao::index');

// Áreas logadas (perfil via ?perfil= até existir o login com RBAC)
$routes->get('dashboard', 'Dashboard::index');
$routes->get('movimentacoes', 'Movimentacoes::index');
$routes->get('movimentacoes/detalhes/(:num)', 'Movimentacoes::detalhes/$1');

// Admin da plataforma
$routes->get('detalhes-empresa', 'EmpresasAdminPlataforma::detalhes');
$routes->get('cadastrar-empresa', 'EmpresasAdminPlataforma::cadastrar');
