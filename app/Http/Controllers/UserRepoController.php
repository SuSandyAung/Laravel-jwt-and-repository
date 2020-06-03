<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\User\UserRepositoryInterface;


class UserRepoController extends Controller
{

    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
       
        $this->user = $user;
    }

    public function index()
    {
       
        return response()->json($this->user->findBy('name','ssda'));
         
        // $this->post->update($data_array);
        // $this->post->delete($post_id);
        // $this->post->getById($post_id);
        // return view('templates.posts', $data);
    }

 
}
