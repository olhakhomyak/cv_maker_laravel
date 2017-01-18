<?php

namespace App\Http\Controllers;

use App\Entities\User;
use Illuminate\Http\Request;
use App\Repositories\MainRepository;

class MainController extends Controller
{
    private $mainRepository;

    public function __construct(MainRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->save();

        return $user;
    }

    public function show($id)
    {
        $user = $this->mainRepository->getUser($id);

        return response()->json([
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $content = json_decode($request['params']);

        $data = [
            'id' => $id,
            'name' => ($content->name),
            'email' => ($content->email),
            'phone' => ($content->phone),
            'resume' => ($content->resume)
        ];

       $this->mainRepository->updatePersonalData($data);
    }

}
