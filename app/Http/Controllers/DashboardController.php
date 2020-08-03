<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;
use Exception;
use Auth;

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

      if (Auth::check())
        return view('user.dashboard');

      return redirect()->route('user.login');

    }

    public function formLogin()
    {
      return view('user.login');
    }

    public function auth(Request $request)
    {
        $data = [
            'email'    => $request->username,
            'password' => $request->password
        ];

        try
        {
            if (env('PASSWORD_HASH'))
            {
              Auth::attempt($data);
            }
            else
            {
              $user = $this->repository->findwhere(['email' => $request->get('username')])->first();

              if (!$user)
                throw new Exception('O E-mail informado é inválido.');

              if ($user->password == $request->get('password'))
                throw new Exception('A senha informada é inválida.');

               Auth::login($user);
            }

            return redirect()->route('user.dashboard');
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

}
