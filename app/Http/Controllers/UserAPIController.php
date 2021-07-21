<?php
namespace App\Http\Controllers;


use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\User;
use Illuminate\Http\Request;

class UserAPIController extends Controller
{

    /**
     * @return UserResourceCollection
     */
    public function index(): UserResourceCollection {
        return new UserResourceCollection(User::paginate(100));
    }

    /**
     * @param User $user
     * @return UserResource
     */
    public function show(User $user): UserResource {
        return new UserResource($user);
    }

    /**
     * @param Request $request
     * @return UserResource
     */
    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        $user = User::create($request->all());

        return new UserResource($user);
    }

    public function update(User $user, Request $request): UserResource {

        //update our user
        $user->update($request->all());

        return new UserResource($user);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(User $user) {
        $user->delete();

        return response()->json();
    }
}
