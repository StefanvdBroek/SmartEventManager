<?php
namespace Opifer\SmartEventManager\Account\Model;

use Opifer\SmartEventManager\Request\Model\BaseRequest;

/**
 * Represents the data that can be passed by a request to the LogOn action of the AccountClient.
 */
class LogOnRequest extends BaseRequest
{
    
    /**
     * The code string identifying the type of client.
     * 
     * @var string 
     */
    public $ClientCode;
    
    /**
     * The version string identifying the version of the client.
     * 
     * @var string 
     */
    public $ClientVersion;
    
    /**
     * The password for authenticating the user logging on.
     * 
     * @var string 
     */
    public $Password;
    
    /**
     * The name of the user logging on.
     * 
     * @var string 
     */
    public $UserName;
    
}