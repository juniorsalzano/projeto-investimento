<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

class DashboardController extends Controller
{
    private $validator;
    private $repository;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    public function index ()
    {
        return 'Estamos na index.';
    }

    public function auth(Request $request)
    {
        $data = [
            'email'    => $request->get('username'),
            'password' => $request->get('password')
        ];

        try
        {
            \Auth::attempt([$data],true);
            return redirect()->route('user.dashboard');
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
