<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BarangController::index');
$routes->get('barang', 'BarangController::index');
$routes->get('form-masuk', 'BarangController::index_masuk');
$routes->get('form-keluar', 'BarangController::index_keluar');
$routes->get('pengambilan', 'PengajuanController::index');
$routes->get('getAllBarang', 'BarangController::getAllBarang');
$routes->get('getAllPengambilan', 'PengajuanController::getAllPengambilan');
$routes->get('getAllMasuk', 'BarangController::getAllMasuk');
$routes->get('getAllKeluar', 'BarangController::getAllKeluar');
