<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GuardedController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleAdminController extends GuardedController
{
    public function index(): Factory|View|Application|RedirectResponse
    {
        return true;
    }

    public function create(): Factory|View|Application|RedirectResponse
    {
        return true;
    }

    public function store(): Factory|View|Application|RedirectResponse
    {
        return true;
    }

    public function show(): Factory|View|Application|RedirectResponse
    {
        return true;
    }

    public function edit(): Factory|View|Application|RedirectResponse
    {
        return true;
    }
    public function update(): Factory|View|Application|RedirectResponse
    {
        return true;
    }
    public function destroy(): Factory|View|Application|RedirectResponse
    {
        return true;
    }
}
