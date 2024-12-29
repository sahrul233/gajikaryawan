<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

route::get('/dashboard5', [DashboardController::class, 'index']);

route::get('/karyawan1', [KaryawanController::class, 'index']);
route::get('/karyawan1/tambah', [KaryawanController::class, 'tambah']);
route::post('/karyawan1/tambah', [KaryawanController::class, 'action_tambah']);
route::get('/karyawan1/{id}/edit', [KaryawanController::class, 'edit']);
route::post('/karyawan1/{id}/edit', [KaryawanController::class, 'action_edit']);
route::get('/karyawan1/{id}/hapus', [KaryawanController::class, 'hapus']);

route::get('/jabatan', [JabatanController::class, 'index']);
route::get('/jabatan/tambah', [JabatanController::class, 'tambah']);
route::post('/jabatan/tambah', [JabatanController::class, 'action_tambah']);
route::get('/jabatan/{id}/edit', [JabatanController::class, 'edit']);
route::post('/jabatan/{id}/edit', [JabatanController::class, 'action_edit']);
route::get('/jabatan/{id}/hapus', [JabatanController::class, 'hapus']);

