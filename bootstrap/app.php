<?php

use App\Http\Middleware\NoCacheHeaders;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (TokenMismatchException $e, $request) {
        return redirect('/?status=セッションが切れました。もう一度ログインしてください。');
    });

    $exceptions->render(function (NotFoundHttpException $e, $request) {
        return redirect('/?status=ページが見つかりませんでした。ログイン画面に戻ります。');
    });
    })->create();
