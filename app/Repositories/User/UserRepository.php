<?php
namespace App\Repositories\User;
use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function create(array $data)
    {
        return User::create($data);
    }

    public function getById($id)
    {
        return User::find($id);
    }

    public function findBy($key, $value)
	{
		return User::where($key, $value)->get();
	}

    public function getAll()
    {
        return User::all();
    }

    public function delete($id)
    {
        User::destroy($id);
    }

    public function update($id,array $data)
    {
       $cat = User::findOrFail($id);
       $cat->update($data);
       $cat->save();
    }

}