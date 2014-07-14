<?php

use Canduter\Apiresponse\Apiresponse;

class ApiResponseTest extends PHPUnit_Framework_TestCase 
{

    public function test_success_should_set_success_property_true()
    {
        $response = ApiResponse::success();
        $this->assertTrue($response->success);
    }

    public function test_success_should_have_data_property()
    {
        $response = ApiResponse::success();
        $this->assertObjectHasAttribute('data', $response);
    }

    public function test_error_should_set_success_property_false()
    {
        $response = ApiResponse::error('Some error');
        $this->assertFalse($response->success);
    }

    public function test_error_should_have_error_property()
    {
        $response = ApiResponse::error('Some error');
        $this->assertObjectHasAttribute('error', $response);
    }

}