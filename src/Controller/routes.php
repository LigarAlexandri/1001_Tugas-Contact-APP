<?php
// WIP Still stuck :/

include_once 'Config/static.php';
include_once 'Controller/main.php';
include_once 'function/main.php';

# GET
Router::url('/', 'get', function () { return view('home'); });
Router::url('index', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('index/logout', 'get', 'AuthController::logout');
Router::url('index', 'get', 'DashboardController::index');
Router::url('index/create', 'get', 'ContactController::add');
Router::url('index/update', 'get', 'ContactController::edit');
Router::url('index/delete', 'get', 'ContactController::remove');


# POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('contacts/add', 'post', 'ContactController::saveAdd');
Router::url('contacts/edit', 'post', 'ContactController::saveEdit');

new Router();