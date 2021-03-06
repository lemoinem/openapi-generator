<?php
/**
 * Pet
 *
 * PHP version 7.1
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */
namespace OpenAPIServer\Model;

/**
 * Pet
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class Pet
{
    
    /** @var int $id */
    private $id;
    
    /** @var \OpenAPIServer\Model\Category $category */
    private $category;
    
    /** @var string $name */
    private $name;
    
    /** @var string[] $photoUrls */
    private $photoUrls;
    
    /** @var \OpenAPIServer\Model\Tag[] $tags */
    private $tags;
    
    /** @var string $status pet status in the store*/
    private $status;
}
