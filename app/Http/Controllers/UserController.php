<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseParser\DefResponse;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use App\Notifications\ForgotPasswordNotification;
use App\Notifications\NewUserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use OpenApi\Annotations\Delete;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/user/all-active",
     *   tags={"Admin","ManageUser"},
     *   summary="Get all active users",
     *   description="Will return all users not deleted",
     *   operationId="allActiveUser",
     *   @OA\Header(
     *         header="api_key",
     *         description="Api key header",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *   @OA\Parameter(
     *     name="token",
     *     required=true,
     *     in="query",
     *     description="user auth token",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="k",
     *     required=false,
     *     in="query",
     *     description="search using email, name, company name",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *   ),
     * )
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function allActiveUser(Request $request)
    {
        return $this->liteResponse(config('code.request.SUCCESS'), $this->search($request));
    }

    /**
     * Search user in database
     * @param Request $request
     * @param bool    $useTrashed
     * @return mixed
     */
    private function search(Request $request, bool $useTrashed = false)
    {
        $keyWord = $request->k;
        if (empty($keyWord))
            $users = User::with('company')->search($keyWord, null, true)->orderby('created_at', 'DESC');
        else
            $users = User::with('company')->search($keyWord);
        return $users->groupBy("id")->paginate(self::PAGINATION);
    }

    /**
     * @OA\Post(
     *     path="/api/admin/user/all-inactive",
     *   tags={"Admin","ManageUser"},
     *   summary="Get all inactive or deleted users",
     *   description="Will return all users deleted",
     *   operationId="allInactiveUser",
     *   @OA\Parameter(
     *     name="token",
     *     required=true,
     *     in="query",
     *     description="user auth token",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *   ),
     * )
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function allInactiveUser()
    {
        if (auth()->user()->isAdmin())
            return $this->liteResponse(config('code.request.SUCCESS'), User::onlyTrashed()->paginate(self::PAGINATION));
        return $this->liteResponse(config('code.request.NOT_AUTHORIZED'));
    }

    /**
     * Inert model in database and return newly created model
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return User::create($data);
    }

    /**
     * Store new user in the system in case a CEO of company or a manager of an agency
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $data = $request->only((new User())->getFillable());
        $data['passport_image'] = $this->saveMedia($request->file('passport_image'), self::COMPANY_DOCS_PATH);
        $data['image'] = $this->saveMedia($request->file('image'), self::COMPANY_DOCS_PATH);
        //if the role is not specified set ceo
        if (empty($data['role_id']))
            $data['role_id'] = Role::CEO;
        return $this->save($data);
    }

    /**
     * * @OA\Post (
     *     path="/api/admin/user/create",
     *     summary="Create user profile",
     *     operationId="adminCreateUser",
     *     tags={"Admin","ManageUser"},
     *     @OA\Parameter(
     *         name="token",
     *         in="query",
     *         required=true,
     *         description="User token",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *         required=true,
     *         description="User email",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="password",
     *         in="query",
     *         required=true,
     *         description="User password",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         required=true,
     *         description="The user last name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         required=true,
     *         description="The user first name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="phone",
     *         in="query",
     *         required=true,
     *         description="The user phone",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     description="user passport photo to upload",
     *                     property="passport_image",
     *                     type="file",
     *                     format="image",
     *                 ),
     *              @OA\Property(
     *                     description="Certificate of incorporate photo to upload",
     *                     property="image",
     *                     type="file",
     *                     format="image",
     *                 )
     *             ),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Expected response to a valid request"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error"
     *     )
     * )
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function adminCreateUser(Request $request)
    {
        if (auth()->user()->isAdmin()) {
            $result = new DefResponse($this->store($request));
            if ($result->isSuccess())
                $this->sendNewUserNotification($result->getData());
            return $result->getResponse();
        }
        return $this->liteResponse(config('code.request.NOT_AUTHORIZED'));
    }


    /**
     * * @OA\Post (
     *     path="/api/ceo/user/create",
     *     summary="Create user profile",
     *     operationId="ceoCreateUser",
     *     tags={"CEO","ManageUser"},
     *     @OA\Parameter(
     *         name="token",
     *         in="query",
     *         required=true,
     *         description="User token",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *         required=true,
     *         description="User email",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="password",
     *         in="query",
     *         required=true,
     *         description="User password",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         required=true,
     *         description="The user last name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         required=true,
     *         description="The user first name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="phone",
     *         in="query",
     *         required=true,
     *         description="The user phone",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     description="user passport photo to upload",
     *                     property="passport_image",
     *                     type="file",
     *                     format="image",
     *                 ),
     *              @OA\Property(
     *                     description="Certificate of incorporate photo to upload",
     *                     property="image",
     *                     type="file",
     *                     format="image",
     *                 )
     *             ),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Expected response to a valid request"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error"
     *     )
     * )
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function ceoCreateUser(Request $request)
    {
        if (!empty(auth()->user()->company)) {
            $result = new DefResponse($this->store($request));
            if ($result->isSuccess())
                $this->sendNewUserNotification($result->getData());
            return $result->getResponse();
        }
        return $this->liteResponse(config('code.request.NOT_AUTHORIZED'),null,"Sorry but you need to register a company");
    }

    /**
     * Send email to user
     * @param User $user
     */
    public function sendNewUserNotification(User $user)
    {
        Notification::send($user, new NewUserNotification(\request()->first_name, \request()->email, \request()->password,));
    }

    /**
     * @OA\Delete(
     *     path="/api/admin/user/delete",
     *   tags={"Admin","ManageUser"},
     *   summary="Delete user from system",
     *   description="Make user no more accesible but the recors still in data base",
     *   operationId="removeUser",
     *   @OA\Header(
     *         header="api_key",
     *         description="Api key header",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *   @OA\Parameter(
     *     name="token",
     *     required=true,
     *     in="query",
     *     description="user auth token",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="user_id",
     *     required=true,
     *     in="query",
     *     description="user id",
     *     @OA\Schema(
     *         type="integer"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *   ),
     * )
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function remove(Request $request)
    {
        if (auth()->user()->isAdmin()) {
            $user = User::find($request->user_id);
            if (empty($user))
                return $this->liteResponse(config('code.token.USER_NOT_FOUND'));
            try {
                return $this->liteResponse(config('code.request.SUCCESS'), $this->destroy($user));
            } catch (\Exception |\Throwable $exception) {
                return $this->liteResponse(config('code.request.FAILURE'), $exception->getMessage());
            }
        }
        return $this->liteResponse(config('code.request.NOT_AUTHORIZED'));
    }


    /**
     * @OA\Post(
     *     path="/api/admin/user/restore",
     *   tags={"Admin","ManageUser"},
     *   summary="Restore user in the system",
     *   description="Make user accesible",
     *   operationId="restoreUser",
     *   @OA\Header(
     *         header="api_key",
     *         description="Api key header",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *   @OA\Parameter(
     *     name="token",
     *     required=true,
     *     in="query",
     *     description="user auth token",
     *     @OA\Schema(
     *         type="string"
     *     )
     *   ),
     *   @OA\Parameter(
     *     name="user_id",
     *     required=true,
     *     in="query",
     *     description="user id",
     *     @OA\Schema(
     *         type="integer"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="successful operation",
     *     @OA\Schema(type="string"),
     *   ),
     * )
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function restoreDeletedUser(Request $request)
    {
        if (auth()->user()->isAdmin()) {
            $user = User::onlyTrashed()->where('id', $request->user_id)->first();
            if (empty($user))
                return $this->liteResponse(config('code.token.USER_NOT_FOUND'));
            try {
                return $this->liteResponse(config('code.request.SUCCESS'), $this->restore($user));
            } catch (\Exception |\Throwable $exception) {
                return $this->liteResponse(config('code.request.FAILURE'), $exception->getMessage());
            }
        }
        return $this->liteResponse(config('code.request.NOT_AUTHORIZED'));
    }

    /**
     * @OA\Put (
     *     path="/api/admin/user/update",
     *     summary="update user profile",
     *     operationId="adminUpdateUser",
     *     tags={"Admin","ManageUser"},
     *     @OA\Parameter(
     *         name="token",
     *         in="query",
     *         required=true,
     *         description="User token",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *         required=true,
     *         description="User email",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         required=true,
     *         description="The user last name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         required=true,
     *         description="The user first name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="phone",
     *         in="query",
     *         required=true,
     *         description="The user phone",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="user_id",
     *         in="query",
     *         required=true,
     *         description="The user phone",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     description="user passport photo to upload",
     *                     property="passport_image",
     *                     type="file",
     *                     format="image",
     *                 ),
     *              @OA\Property(
     *                     description="Certificate of incorporate photo to upload",
     *                     property="image",
     *                     type="file",
     *                     format="image",
     *                 )
     *             ),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Expected response to a valid request"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error"
     *     )
     * )
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function updateAdmin(Request $request)
    {
        if (auth()->user()->isAdmin()) {
            return $this->update($request, $request->user_id);
        }
        return $this->liteResponse(config('code.request.NOT_AUTHORIZED'));
    }

    /**
     * @OA\Put (
     *     path="/api/user/update",
     *     summary="update user profile",
     *     operationId="userUpdate",
     *     tags={"User"},
     *     @OA\Parameter(
     *         name="token",
     *         in="query",
     *         required=true,
     *         description="User token",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="email",
     *         in="query",
     *         required=true,
     *         description="User email",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         required=true,
     *         description="The user last name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         required=true,
     *         description="The user first name",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="phone",
     *         in="query",
     *         required=true,
     *         description="The user phone",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     description="user passport photo to upload",
     *                     property="passport_image",
     *                     type="file",
     *                     format="image",
     *                 ),
     *              @OA\Property(
     *                     description="Certificate of incorporate photo to upload",
     *                     property="image",
     *                     type="file",
     *                     format="image",
     *                 )
     *             ),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Expected response to a valid request"
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error"
     *     )
     * )
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function updateSelf(Request $request)
    {
        return $this->update($request, auth()->id());
    }

    /**
     * Update user account
     * @param Request $request
     * @param         $userId
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $userId)
    {
        $data = $request->only((new User())->getFillable());
        $user = User::find($userId);
        if (empty($user))
            return $this->liteResponse(config('code.token.USER_NOT_FOUND'));

        $validator = Validator::make($data, (new UserUpdateRequest())->rules($userId));
        if ($validator->fails())
            return $this->liteResponse(config('code.request.VALIDATION_ERROR'), $validator->errors());

        try {
            $user->update($data);
            return $this->liteResponse(config('code.request.SUCCESS'), $user->refresh());
        } catch (\Exception | \Throwable $exception) {
            return $this->liteResponse(config('code.request.FAILURE'), $exception->getMessage());
        }
    }

    /**
     * Delete user from database
     * @param User $user
     * @param bool $permanently
     * @return bool|null
     * @throws \Exception
     */
    public function destroy(User $user, bool $permanently=false)
    {
        if ($permanently)
            return  $user->forceDelete();
        return $user->delete();
    }

    /**
     * Delete user from database
     * @param User $user
     * @return User
     * @throws \Exception
     */
    public function restore(User $user)
    {
        $user->restore();
        return $user->refresh();
    }

    /**
     * Validation rule to protect insertion again wrong data
     * @param $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(&$data)
    {
        $validator = Validator::make($data, (new CreateUserRequest())->rules());
        if (!$validator->fails())
            $data['password'] = bcrypt($data['password']);
        return $validator;
    }

    /**
     * Change suer password
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(Request $request)
    {
        $data = $request->all(['email', 'password', 'password_confirmation']);

        $user = User::where('email', $data['email'])->first();
        if (empty($user))
            return $this->liteResponse(config('code.token.USER_NOT_FOUND'));
        try {
            if ($user->password == bcrypt($data['password']))
                return $this->liteResponse(config('code.request.FAILURE'), null, 'Please use another password');
            $user->update([
                'password' => bcrypt($data['password']),
            ]);
            return $this->liteResponse(config('code.request.SUCCESS'));
        } catch (\Exception $exception) {
            return $this->liteResponse(config('code.request.FAILURE'), $exception->getMessage());
        }
    }
}
