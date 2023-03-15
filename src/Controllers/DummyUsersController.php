<?php

namespace TopsSuraj\DummyUsers\Controllers;
use Illuminate\Support\Facades\Http;

class DummyUsersController
{
    public function __invoke()
    {
        $response = Http::get("https://dummyjson.com/users");
        $users = $response["users"];
        \Log::info(["users" => $users]);
        return view("dummy-users::index", compact("users"));
    }
}
