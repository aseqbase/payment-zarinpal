<?php
auth(\_::$User->SuperAccess);
$data = $data ?? [];
$routeHandler = function ($data) {
    return \MiMFa\Library\Revise::ToString(\_::$Joint->ZarinPal);
};
(new Router())
    ->Get(function () use ($routeHandler) {
        (\_::$Front->AdminView)($routeHandler, [
            "Image" => asset("payment/image/ZarinPal-Port.ico"),
            "Title" => "'ZarinPal Payment' Managements"
        ]);
    })
    ->Default(fn() => response($routeHandler($data)))
    ->Handle();