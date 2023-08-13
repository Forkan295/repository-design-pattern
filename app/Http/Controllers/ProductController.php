<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryContract;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(public UserRepositoryContract $userRepositoryContract)
    {
    }

    public function index()
    {
        dd($this->userRepositoryContract->all(), $this->userRepositoryContract->update(1, []));
    }
}
