<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;

    }
    public function index(Request $request)
    {

      $users = $this->model->getUsers(search: $request->search ?? '');


        return view ('users.index', compact('users'));
    }

    public function show($id)
    {

       if (!$user =  $this->model->find($id))
             return redirect()->route('users.index');

             return view ('users.show', compact('user'));
    }

    public function create()
    {
      $users =  $this->model->get();
       // dd($users);
        return view ('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user =  $this->model->create($data);

        return redirect()->route('users.index');


    }


    public function edit($id)
    {
        if (!$user =  $this->model->find($id))
        return redirect()->route('users.index');

        return view ('users.edit', compact('user'));

    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user =  $this->model->find($id))
        return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
        $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index');

    }

    public function destroy($id)
    {

       if (!$user =  $this->model->find($id))
             return redirect()->route('users.index');

        $user->delete();

             return redirect()->route('users.index');
    }



}
