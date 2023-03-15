<?php

use Illuminate\Support\Facades\Route;
use TopsSuraj\DummyUsers\Controllers\DummyUsersController;

Route::get("users", DummyUsersController::class);
