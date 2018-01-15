<?php

namespace ResponseMapperTests;

use ResponseMapper\Mapper;
use PHPUnit\Framework\TestCase;
use ResponseMapperTests\Fixtures\Models\LinkedInModels\Organizations;

class ResponseMapperTest extends TestCase
{
    public function testResponseMapping()
    {
        $response = json_decode(file_get_contents(__DIR__ . '/Fixtures/RetrieveOrganization.json'), true);
        $responseClass = new Organizations();
        $mapper = new Mapper();
        $mappedObject = $mapper->map($response, $responseClass);

        $this->assertInstanceOf(Organizations::class, $mappedObject);
    }
}