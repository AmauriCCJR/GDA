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
$routes->get('redefinir-senha', 'RedefinirSenha::index');
$routes->get('senha-alterada', 'SenhaAlterada::index');
$routes->get('dashboard-admin-plataforma', 'DashboardAdminPlataforma::index');
$routes->get('dashboard-admin-empresa', 'DashboardAdminEmpresa::index');
$routes->get('loading-login', 'LoadingLogin::index');
$routes->get('loading-signout', 'LoadingSignout::index');