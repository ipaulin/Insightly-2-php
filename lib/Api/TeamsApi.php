<?php
/**
 * TeamsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * TeamsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TeamsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.insight.ly/v2.2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return TeamsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addTeam
     *
     * Adds a Team
     *
     * @param \Swagger\Client\Model\APITeam $api_team The Team to add (just include JSON object as request body) (required)
     * @return \Swagger\Client\Model\Team
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addTeam($api_team)
    {
        list($response) = $this->addTeamWithHttpInfo($api_team);
        return $response;
    }

    /**
     * Operation addTeamWithHttpInfo
     *
     * Adds a Team
     *
     * @param \Swagger\Client\Model\APITeam $api_team The Team to add (just include JSON object as request body) (required)
     * @return Array of \Swagger\Client\Model\Team, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addTeamWithHttpInfo($api_team)
    {
        // verify the required parameter 'api_team' is set
        if ($api_team === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_team when calling addTeam');
        }
        // parse inputs
        $resourcePath = "/Teams";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($api_team)) {
            $_tempBody = $api_team;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Team',
                '/Teams'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Team', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation addTeamMember
     *
     * Adds a Team Member
     *
     * @param int $id A Team&#39;s ID (TEAM_ID) (required)
     * @param \Swagger\Client\Model\APITeamMember $api_team_member The Team Member to add (just include JSON object as request body) (required)
     * @return \Swagger\Client\Model\TeamMember
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addTeamMember($id, $api_team_member)
    {
        list($response) = $this->addTeamMemberWithHttpInfo($id, $api_team_member);
        return $response;
    }

    /**
     * Operation addTeamMemberWithHttpInfo
     *
     * Adds a Team Member
     *
     * @param int $id A Team&#39;s ID (TEAM_ID) (required)
     * @param \Swagger\Client\Model\APITeamMember $api_team_member The Team Member to add (just include JSON object as request body) (required)
     * @return Array of \Swagger\Client\Model\TeamMember, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addTeamMemberWithHttpInfo($id, $api_team_member)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling addTeamMember');
        }
        // verify the required parameter 'api_team_member' is set
        if ($api_team_member === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_team_member when calling addTeamMember');
        }
        // parse inputs
        $resourcePath = "/Teams/{id}/TeamMembers";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($api_team_member)) {
            $_tempBody = $api_team_member;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\TeamMember',
                '/Teams/{id}/TeamMembers'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\TeamMember', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\TeamMember', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteTeam
     *
     * Deletes a Team
     *
     * @param int $id A Team&#39;s ID (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteTeam($id)
    {
        list($response) = $this->deleteTeamWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteTeamWithHttpInfo
     *
     * Deletes a Team
     *
     * @param int $id A Team&#39;s ID (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteTeamWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteTeam');
        }
        // parse inputs
        $resourcePath = "/Teams/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Teams/{id}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteTeamMember
     *
     * Deletes a Team Member
     *
     * @param int $id A Team&#39;s ID (TEAM_ID) (required)
     * @param int $permission_id A Team Members&#39;s ID (PERMISSION_ID) (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteTeamMember($id, $permission_id)
    {
        list($response) = $this->deleteTeamMemberWithHttpInfo($id, $permission_id);
        return $response;
    }

    /**
     * Operation deleteTeamMemberWithHttpInfo
     *
     * Deletes a Team Member
     *
     * @param int $id A Team&#39;s ID (TEAM_ID) (required)
     * @param int $permission_id A Team Members&#39;s ID (PERMISSION_ID) (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteTeamMemberWithHttpInfo($id, $permission_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteTeamMember');
        }
        // verify the required parameter 'permission_id' is set
        if ($permission_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $permission_id when calling deleteTeamMember');
        }
        // parse inputs
        $resourcePath = "/Teams/{id}/TeamMembers/{permissionId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($permission_id !== null) {
            $resourcePath = str_replace(
                "{" . "permissionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($permission_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/Teams/{id}/TeamMembers/{permissionId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getTeam
     *
     * Gets a Team
     *
     * @param int $id A Team&#39;s ID (required)
     * @return \Swagger\Client\Model\Team
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getTeam($id)
    {
        list($response) = $this->getTeamWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getTeamWithHttpInfo
     *
     * Gets a Team
     *
     * @param int $id A Team&#39;s ID (required)
     * @return Array of \Swagger\Client\Model\Team, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getTeamWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getTeam');
        }
        // parse inputs
        $resourcePath = "/Teams/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Team',
                '/Teams/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Team', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTeams
     *
     * Gets a list of Teams.
     *
     * @param bool $brief Optional, true if response should only contain top level properties of the team. (optional, default to false)
     * @param int $skip Optional, number of teams to skip. (optional)
     * @param int $top Optional, maximum number of teams to return in the response. (optional)
     * @param bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     * @return \Swagger\Client\Model\Team[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getTeams($brief = null, $skip = null, $top = null, $count_total = null)
    {
        list($response) = $this->getTeamsWithHttpInfo($brief, $skip, $top, $count_total);
        return $response;
    }

    /**
     * Operation getTeamsWithHttpInfo
     *
     * Gets a list of Teams.
     *
     * @param bool $brief Optional, true if response should only contain top level properties of the team. (optional, default to false)
     * @param int $skip Optional, number of teams to skip. (optional)
     * @param int $top Optional, maximum number of teams to return in the response. (optional)
     * @param bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     * @return Array of \Swagger\Client\Model\Team[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getTeamsWithHttpInfo($brief = null, $skip = null, $top = null, $count_total = null)
    {
        // parse inputs
        $resourcePath = "/Teams";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($brief !== null) {
            $queryParams['brief'] = $this->apiClient->getSerializer()->toQueryValue($brief);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($top !== null) {
            $queryParams['top'] = $this->apiClient->getSerializer()->toQueryValue($top);
        }
        // query params
        if ($count_total !== null) {
            $queryParams['count_total'] = $this->apiClient->getSerializer()->toQueryValue($count_total);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Team[]',
                '/Teams'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Team[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Team[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTeamsBySearch
     *
     * Gets a filtered list of Teams.
     *
     * @param string $team_name Optional, name of the team. (optional)
     * @param \DateTime $updated_after_utc Optional, earliest date when team was last updated. (optional)
     * @param bool $brief Optional, true if response should only contain top level properties of the team. (optional, default to false)
     * @param int $skip Optional, number of teams to skip. (optional)
     * @param int $top Optional, maximum number of teams to return in the response. (optional)
     * @param bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     * @return \Swagger\Client\Model\Team[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getTeamsBySearch($team_name = null, $updated_after_utc = null, $brief = null, $skip = null, $top = null, $count_total = null)
    {
        list($response) = $this->getTeamsBySearchWithHttpInfo($team_name, $updated_after_utc, $brief, $skip, $top, $count_total);
        return $response;
    }

    /**
     * Operation getTeamsBySearchWithHttpInfo
     *
     * Gets a filtered list of Teams.
     *
     * @param string $team_name Optional, name of the team. (optional)
     * @param \DateTime $updated_after_utc Optional, earliest date when team was last updated. (optional)
     * @param bool $brief Optional, true if response should only contain top level properties of the team. (optional, default to false)
     * @param int $skip Optional, number of teams to skip. (optional)
     * @param int $top Optional, maximum number of teams to return in the response. (optional)
     * @param bool $count_total Optional, true if total number of records should be returned in the response headers. (optional, default to false)
     * @return Array of \Swagger\Client\Model\Team[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getTeamsBySearchWithHttpInfo($team_name = null, $updated_after_utc = null, $brief = null, $skip = null, $top = null, $count_total = null)
    {
        // parse inputs
        $resourcePath = "/Teams/Search";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($team_name !== null) {
            $queryParams['team_name'] = $this->apiClient->getSerializer()->toQueryValue($team_name);
        }
        // query params
        if ($updated_after_utc !== null) {
            $queryParams['updated_after_utc'] = $this->apiClient->getSerializer()->toQueryValue($updated_after_utc);
        }
        // query params
        if ($brief !== null) {
            $queryParams['brief'] = $this->apiClient->getSerializer()->toQueryValue($brief);
        }
        // query params
        if ($skip !== null) {
            $queryParams['skip'] = $this->apiClient->getSerializer()->toQueryValue($skip);
        }
        // query params
        if ($top !== null) {
            $queryParams['top'] = $this->apiClient->getSerializer()->toQueryValue($top);
        }
        // query params
        if ($count_total !== null) {
            $queryParams['count_total'] = $this->apiClient->getSerializer()->toQueryValue($count_total);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Team[]',
                '/Teams/Search'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Team[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Team[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateTeam
     *
     * Updates a Team
     *
     * @param \Swagger\Client\Model\APITeam $api_team The Team to update (just include JSON object as request body) (required)
     * @param bool $brief Optional, true if you wish to do a partial update containing only top level properties of the Team. When true, all sub-collections are ignored. (optional, default to false)
     * @return \Swagger\Client\Model\Team
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateTeam($api_team, $brief = null)
    {
        list($response) = $this->updateTeamWithHttpInfo($api_team, $brief);
        return $response;
    }

    /**
     * Operation updateTeamWithHttpInfo
     *
     * Updates a Team
     *
     * @param \Swagger\Client\Model\APITeam $api_team The Team to update (just include JSON object as request body) (required)
     * @param bool $brief Optional, true if you wish to do a partial update containing only top level properties of the Team. When true, all sub-collections are ignored. (optional, default to false)
     * @return Array of \Swagger\Client\Model\Team, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateTeamWithHttpInfo($api_team, $brief = null)
    {
        // verify the required parameter 'api_team' is set
        if ($api_team === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_team when calling updateTeam');
        }
        // parse inputs
        $resourcePath = "/Teams";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'text/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($brief !== null) {
            $queryParams['brief'] = $this->apiClient->getSerializer()->toQueryValue($brief);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($api_team)) {
            $_tempBody = $api_team;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Team',
                '/Teams'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Team', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Team', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
