<?php


namespace App\Http\Controllers\ResponseParser;


class DefResponse
{
    private $data;

    /**
     * DefResponse constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Check if the response is a success
     * @return mixed
     */
    public function isSuccess()
    {
        return $this->data['status'];
    }

    public function getMessage()
    {
        return $this->data['message'];
    }

    /**
     * Get data
     * @return mixed
     */
    public function getData()
    {
            return $this->data['data'];
    }

    public function getResponse()
    {
        return response()->json($this->data);
    }
}
