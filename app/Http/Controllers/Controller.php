<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseParser\Builder;
use \Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

/**
 * @license Apache 2.0
 */

/**
 * @OA\Info(
 *     description="Fortuna Trading",
 *     version="1.0.0",
 *     title="Fortuna Trading",
 *     termsOfService="http://swagger.io/terms/",
 *     @OA\Contact(
 *         email="apiteam@swagger.io"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * @OA\SecurityScheme(
 *   description="User token example Bearer <token-value>",
 *   securityScheme="Oauth2Password",
 *   type="oauth2",
 *   in="header",
 *   scheme="bearer",
 *   name="Authorization"
 * )
 *
 * @OA\OpenApi(
 *   security={
 *     {"x_api_key":{"type":"apiKey","name":"Authorization","in":"header"}}
 *   }
 * )
 *
 */

/**
 *
 * * @OA\Tag(
 *     name="Response code",
 *     description="
 *     'TOKEN_EXPIRED' => 1, 'BLACK_LISTED_TOKEN' => 2, 'INVALID_TOKEN' => 3, 'NO_TOKEN' => 4,
 *     'USER_NOT_FOUND' => 5,
 *     'WRONG_JSON_FORMAT' => 6,
 *     'SUCCESS' => 1000, 'FAILURE' => 1001, 'VALIDATION_ERROR' => 1002, 'EXPIRED' => 1003, 'DATA_EXIST' => 1004,
 *     'NOT_AUTHORIZED' => 1005,
 *     'ACCOUNT_NOT_VERIFY' => 1100,'WRONG_USERNAME' => 1101,'WRONG_PASSWORD' => 1102,'WRONG_CREDENTIALS' => 1103,
 *     'ACCOUNT_VERIFIED' => 1104,'NOT_EXISTS' => 1105"
 * )
 * @OA\ExternalDocumentation(
 *     description="Find out more about Swagger",
 *     url="http://swagger.io"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public const ARTICLES_IMAGE_PATH = 'articles/images';
    public const USER_PROFILE_PATH = 'users/profile';
    public const PAGINATION = 10;


    public const TRANSACTION = 'TRA';
    public const ORDER = 'ORD';


    /**
     * @OA\Get(
     *   tags={"API VERSION"},
     *   path="/api/version",
     *   @OA\Response(
     *       response="default",
     *       description="Version of the build",
     *   )
     * )
     */

    public function version()
    {
        return response()->json(["version" => "1.0"]);
    }

    /**
     * @param $file
     * @param $fileName
     * @param $directory
     * @return string
     */
    public function saveMedia($file, $directory)
    {
        if (empty($file))
            return null;
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        return $file->move($directory, $fileName)->getPathname();
    }

    /**
     * @param $base24_encode
     * @param $fileName
     * @param $directory
     * @return string
     */
    public function saveMediaB64($base64_encode, $directory)
    {
        if (empty($base64_encode))
            return null;
        $extension = explode('/', mime_content_type($base64_encode))[1];
        $fileName = $directory.'/img-'.time() . '.' . $extension;

        if(!Storage::disk('public_uploads')->put($fileName, base64_decode(explode(',', $base64_encode)[1]))) {
            return false;
        }

        return $fileName;
    }

    /**
     * Store a newly created resource in storage.
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function save(array $data)
    {
        $validator = $this->validator($data);
        if ($validator->fails())
            return $this->liteResponse(config('code.request.VALIDATION_ERROR'), $validator->errors());
        try {
            return $this->liteResponse(config('code.request.SUCCESS'), $this->create($data));
        } catch (\Exception $exception) {
            return $this->liteResponse(config('code.request.FAILURE'), $exception->getMessage());
        }
    }

    /**
     * parsing api response according the specification
     * @param      $code
     * @param null $data
     * @param null $message
     * @param null $token
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function liteResponse($code, $data = null, $message = null, $token = null)
    {
        $isJsonResponse = request()->isJson() or request()->isXmlHttpRequest() or request()->ajax();

        $builder = new Builder($code, $message);
        $builder->setData($data);
        $builder->setToken($token);
        return $isJsonResponse ? response()->json($builder->reply()) : $builder->reply();
    }
}
