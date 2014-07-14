<?php namespace Canduter\Apiresponse;

/**
 * Generates an standarized response format for json responses
 * @author Jaime Ramírez <jaime.ram@gmail.com>
 */
class Apiresponse
{
    public $success;
    public $data;

    public static function success(array $data = array())
    {
        $response = new static();
        $response->success = true;
        $response->data = $data;

        return $response;
    }

    /**
     * @param $error mixed Error data
     * @return JsonResponse
     */
    public static function error($error)
    {
        $response = new static();
        $response->success = false;
        $response->error = $error;

        return $response;
    }
}
