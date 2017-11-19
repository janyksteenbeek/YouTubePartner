<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for YouTubePartner (v1).
 *
 * <p>
 * API for YouTube partners. To use this API YouTube CMS account is required.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/youtube/partner/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_YouTubePartner extends Google_Service
{
  /** View and manage your assets and associated content on YouTube. */
  const YOUTUBEPARTNER =
      "https://www.googleapis.com/auth/youtubepartner";
  /** View content owner account details from YouTube.. */
  const YOUTUBEPARTNER_CONTENT_OWNER_READONLY =
      "https://www.googleapis.com/auth/youtubepartner-content-owner-readonly";

  public $assetLabels;
  public $assetMatchPolicy;
  public $assetRelationships;
  public $assetSearch;
  public $assetShares;
  public $assets;
  public $campaigns;
  public $claimHistory;
  public $claimSearch;
  public $claims;
  public $contentOwnerAdvertisingOptions;
  public $contentOwners;
  public $liveCuepoints;
  public $metadataHistory;
  public $orders;
  public $ownership;
  public $ownershipHistory;
  public $package;
  public $policies;
  public $publishers;
  public $referenceConflicts;
  public $references;
  public $validator;
  public $videoAdvertisingOptions;
  public $whitelists;
  

  /**
   * Constructs the internal representation of the YouTubePartner service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://www.googleapis.com/';
    $this->servicePath = 'youtube/partner/v1/';
    $this->version = 'v1';
    $this->serviceName = 'youtubePartner';

    $this->assetLabels = new Google_Service_YouTubePartner_AssetLabels_Resource(
        $this,
        $this->serviceName,
        'assetLabels',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'assetLabels',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'assetLabels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'labelPrefix' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assetMatchPolicy = new Google_Service_YouTubePartner_AssetMatchPolicy_Resource(
        $this,
        $this->serviceName,
        'assetMatchPolicy',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'assets/{assetId}/matchPolicy',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'assets/{assetId}/matchPolicy',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'assets/{assetId}/matchPolicy',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assetRelationships = new Google_Service_YouTubePartner_AssetRelationships_Resource(
        $this,
        $this->serviceName,
        'assetRelationships',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'assetRelationships/{assetRelationshipId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'assetRelationshipId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'assetRelationships',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'assetRelationships',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assetSearch = new Google_Service_YouTubePartner_AssetSearch_Resource(
        $this,
        $this->serviceName,
        'assetSearch',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'assetSearch',
              'httpMethod' => 'GET',
              'parameters' => array(
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'isrcs' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'labels' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeAnyProvidedlabel' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ownershipRestriction' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'hasConflicts' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'metadataSearchFields' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assetShares = new Google_Service_YouTubePartner_AssetShares_Resource(
        $this,
        $this->serviceName,
        'assetShares',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'assetShares',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assets = new Google_Service_YouTubePartner_Assets_Resource(
        $this,
        $this->serviceName,
        'assets',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'assets/{assetId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'fetchMatchPolicy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnership' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchMetadata' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnershipConflicts' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'insert' => array(
              'path' => 'assets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'assets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'fetchMatchPolicy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnership' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchMetadata' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnershipConflicts' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'patch' => array(
              'path' => 'assets/{assetId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'assets/{assetId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->campaigns = new Google_Service_YouTubePartner_Campaigns_Resource(
        $this,
        $this->serviceName,
        'campaigns',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'campaigns/{campaignId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'campaigns/{campaignId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'campaigns',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'campaigns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'campaigns/{campaignId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'campaigns/{campaignId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'campaignId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->claimHistory = new Google_Service_YouTubePartner_ClaimHistory_Resource(
        $this,
        $this->serviceName,
        'claimHistory',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'claimHistory/{claimId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'claimId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->claimSearch = new Google_Service_YouTubePartner_ClaimSearch_Resource(
        $this,
        $this->serviceName,
        'claimSearch',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'claimSearch',
              'httpMethod' => 'GET',
              'parameters' => array(
                'origin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'inactiveReasons' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'referenceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'contentType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'partnerUploaded' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'statusModifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'status' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'statusModifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'videoId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeThirdPartyClaims' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->claims = new Google_Service_YouTubePartner_Claims_Resource(
        $this,
        $this->serviceName,
        'claims',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'claims/{claimId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'claimId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'claims',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'isManualClaim' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'claims',
              'httpMethod' => 'GET',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'videoId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'claims/{claimId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'claimId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'claims/{claimId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'claimId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->contentOwnerAdvertisingOptions = new Google_Service_YouTubePartner_ContentOwnerAdvertisingOptions_Resource(
        $this,
        $this->serviceName,
        'contentOwnerAdvertisingOptions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'contentOwnerAdvertisingOptions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'contentOwnerAdvertisingOptions',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'contentOwnerAdvertisingOptions',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->contentOwners = new Google_Service_YouTubePartner_ContentOwners_Resource(
        $this,
        $this->serviceName,
        'contentOwners',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'contentOwners/{contentOwnerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'contentOwnerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'contentOwners',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fetchMine' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->liveCuepoints = new Google_Service_YouTubePartner_LiveCuepoints_Resource(
        $this,
        $this->serviceName,
        'liveCuepoints',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'liveCuepoints',
              'httpMethod' => 'POST',
              'parameters' => array(
                'channelId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->metadataHistory = new Google_Service_YouTubePartner_MetadataHistory_Resource(
        $this,
        $this->serviceName,
        'metadataHistory',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'metadataHistory',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->orders = new Google_Service_YouTubePartner_Orders_Resource(
        $this,
        $this->serviceName,
        'orders',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'orders/{orderId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'orders/{orderId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'orders',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'orders',
              'httpMethod' => 'GET',
              'parameters' => array(
                'status' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'contentType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'country' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'channelId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'videoId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'priority' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'productionHouse' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'orders/{orderId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'orders/{orderId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'orderId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->ownership = new Google_Service_YouTubePartner_Ownership_Resource(
        $this,
        $this->serviceName,
        'ownership',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'assets/{assetId}/ownership',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'assets/{assetId}/ownership',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'assets/{assetId}/ownership',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->ownershipHistory = new Google_Service_YouTubePartner_OwnershipHistory_Resource(
        $this,
        $this->serviceName,
        'ownershipHistory',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'ownershipHistory',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->package = new Google_Service_YouTubePartner_Package_Resource(
        $this,
        $this->serviceName,
        'package',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'package/{packageId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'packageId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'package',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->policies = new Google_Service_YouTubePartner_Policies_Resource(
        $this,
        $this->serviceName,
        'policies',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'policies/{policyId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'policyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'policies',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'policies',
              'httpMethod' => 'GET',
              'parameters' => array(
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'policies/{policyId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'policyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'policies/{policyId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'policyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->publishers = new Google_Service_YouTubePartner_Publishers_Resource(
        $this,
        $this->serviceName,
        'publishers',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'publishers/{publisherId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'publisherId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'publishers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'caeNumber' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'namePrefix' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ipiNumber' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->referenceConflicts = new Google_Service_YouTubePartner_ReferenceConflicts_Resource(
        $this,
        $this->serviceName,
        'referenceConflicts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'referenceConflicts/{referenceConflictId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceConflictId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'referenceConflicts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->references = new Google_Service_YouTubePartner_References_Resource(
        $this,
        $this->serviceName,
        'references',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'references/{referenceId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'references',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'claimId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'references',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'references/{referenceId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'releaseClaims' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'references/{referenceId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'referenceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'releaseClaims' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->validator = new Google_Service_YouTubePartner_Validator_Resource(
        $this,
        $this->serviceName,
        'validator',
        array(
          'methods' => array(
            'validate' => array(
              'path' => 'validator',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'validateAsync' => array(
              'path' => 'validatorAsync',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'validateAsyncStatus' => array(
              'path' => 'validatorAsyncStatus',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->videoAdvertisingOptions = new Google_Service_YouTubePartner_VideoAdvertisingOptions_Resource(
        $this,
        $this->serviceName,
        'videoAdvertisingOptions',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'videoAdvertisingOptions/{videoId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'videoId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getEnabledAds' => array(
              'path' => 'videoAdvertisingOptions/{videoId}/getEnabledAds',
              'httpMethod' => 'GET',
              'parameters' => array(
                'videoId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'videoAdvertisingOptions/{videoId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'videoId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'videoAdvertisingOptions/{videoId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'videoId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->whitelists = new Google_Service_YouTubePartner_Whitelists_Resource(
        $this,
        $this->serviceName,
        'whitelists',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'whitelists/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'whitelists/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'whitelists',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'whitelists',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "assetLabels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $assetLabels = $youtubePartnerService->assetLabels;
 *  </code>
 */
class Google_Service_YouTubePartner_AssetLabels_Resource extends Google_Service_Resource
{

  /**
   * Insert an asset label for an owner. (assetLabels.insert)
   *
   * @param Google_AssetLabel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetLabel
   */
  public function insert(Google_Service_YouTubePartner_AssetLabel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_AssetLabel");
  }

  /**
   * Retrieves a list of all asset labels for an owner.
   * (assetLabels.listAssetLabels)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string q The q parameter specifies the query string to use to
   * filter search results. YouTube searches for the query string in the labelName
   * field of asset labels.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string labelPrefix The labelPrefix parameter identifies the prefix
   * of asset labels to retrieve.
   * @return Google_Service_YouTubePartner_AssetLabelListResponse
   */
  public function listAssetLabels($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_AssetLabelListResponse");
  }
}

/**
 * The "assetMatchPolicy" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $assetMatchPolicy = $youtubePartnerService->assetMatchPolicy;
 *  </code>
 */
class Google_Service_YouTubePartner_AssetMatchPolicy_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the match policy assigned to the specified asset by the content
   * owner associated with the authenticated user. This information is only
   * accessible to an owner of the asset. (assetMatchPolicy.get)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving the match policy.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetMatchPolicy
   */
  public function get($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_AssetMatchPolicy");
  }

  /**
   * Updates the asset's match policy. If an asset has multiple owners, each owner
   * may set its own match policy for the asset. YouTube then computes the match
   * policy that is actually applied for the asset based on the territories where
   * each owner owns the asset. This method supports patch semantics.
   * (assetMatchPolicy.patch)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving the match policy.
   * @param Google_AssetMatchPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetMatchPolicy
   */
  public function patch($assetId, Google_Service_YouTubePartner_AssetMatchPolicy $postBody, $optParams = array())
  {
    $params = array('assetId' => $assetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_AssetMatchPolicy");
  }

  /**
   * Updates the asset's match policy. If an asset has multiple owners, each owner
   * may set its own match policy for the asset. YouTube then computes the match
   * policy that is actually applied for the asset based on the territories where
   * each owner owns the asset. (assetMatchPolicy.update)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving the match policy.
   * @param Google_AssetMatchPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetMatchPolicy
   */
  public function update($assetId, Google_Service_YouTubePartner_AssetMatchPolicy $postBody, $optParams = array())
  {
    $params = array('assetId' => $assetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_AssetMatchPolicy");
  }
}

/**
 * The "assetRelationships" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $assetRelationships = $youtubePartnerService->assetRelationships;
 *  </code>
 */
class Google_Service_YouTubePartner_AssetRelationships_Resource extends Google_Service_Resource
{

  /**
   * Deletes a relationship between two assets. (assetRelationships.delete)
   *
   * @param string $assetRelationshipId The assetRelationshipId parameter
   * specifies a value that uniquely identifies the relationship you are deleting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   */
  public function delete($assetRelationshipId, $optParams = array())
  {
    $params = array('assetRelationshipId' => $assetRelationshipId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Creates a relationship that links two assets. (assetRelationships.insert)
   *
   * @param Google_AssetRelationship $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetRelationship
   */
  public function insert(Google_Service_YouTubePartner_AssetRelationship $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_AssetRelationship");
  }

  /**
   * Retrieves a list of relationships for a given asset. The list contains
   * relationships where the specified asset is either the parent (embedding) or
   * child (embedded) asset in the relationship.
   * (assetRelationships.listAssetRelationships)
   *
   * @param string $assetId The assetId parameter specifies the asset ID of the
   * asset for which you are retrieving relationships.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetRelationshipListResponse
   */
  public function listAssetRelationships($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_AssetRelationshipListResponse");
  }
}

/**
 * The "assetSearch" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $assetSearch = $youtubePartnerService->assetSearch;
 *  </code>
 */
class Google_Service_YouTubePartner_AssetSearch_Resource extends Google_Service_Resource
{

  /**
   * Searches for assets based on asset metadata. The method can retrieve all
   * assets or only assets owned by the content owner. This method mimics the
   * functionality of the advanced search feature on the Assets page in CMS.
   * (assetSearch.listAssetSearch)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sort The sort parameter specifies how the search results
   * should be sorted. Note that results are always sorted in descending order.
   * @opt_param string isrcs A comma-separated list of up to 50 ISRCs. If you
   * specify a value for this parameter, the API server ignores any values set for
   * the following parameters: q, includeAnyProvidedLabel, hasConflicts, labels,
   * metadataSearchFields, sort, and type.
   * @opt_param string createdAfter The createdAfter parameter restricts the set
   * of returned assets to ones originally created on or after the specified
   * datetime. For example: 2015-01-29T23:00:00Z
   * @opt_param string type The type parameter specifies the types of assets that
   * you want to retrieve. The parameter value is a comma-separated list of asset
   * types.
   * @opt_param string labels The labels parameter specifies the assets with
   * certain asset labels that you want to retrieve. The parameter value is a
   * comma-separated list of asset labels.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param bool includeAnyProvidedlabel If includeAnyProvidedlabel parameter
   * is set to true, will search for assets that contain any of the provided
   * labels; else will search for assets that contain all the provided labels.
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string ownershipRestriction The ownershipRestriction parameter
   * specifies the ownership filtering option for the search. By default the
   * search is performed in the assets owned by currently authenticated user only.
   * @opt_param string createdBefore The createdBefore parameter restricts the set
   * of returned assets to ones originally created on or before the specified
   * datetime. For example: 2015-01-29T23:00:00Z
   * @opt_param bool hasConflicts The hasConflicts parameter enables you to only
   * retrieve assets that have ownership conflicts. The only valid value is true.
   * Setting the parameter value to false does not affect the results.
   * @opt_param string metadataSearchFields The metadataSearchField parameter
   * specifies which metadata fields to search by. It is a comma-separated list of
   * metadata field and value pairs connected by colon(:). For example:
   * customId:my_custom_id,artist:Dandexx
   * @opt_param string q YouTube searches within the id, type, and customId fields
   * for all assets as well as in numerous other metadata fields – such as actor,
   * album, director, isrc, and tmsId – that vary for different types of assets
   * (movies, music videos, etc.).
   * @return Google_Service_YouTubePartner_AssetSearchResponse
   */
  public function listAssetSearch($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_AssetSearchResponse");
  }
}

/**
 * The "assetShares" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $assetShares = $youtubePartnerService->assetShares;
 *  </code>
 */
class Google_Service_YouTubePartner_AssetShares_Resource extends Google_Service_Resource
{

  /**
   * This method either retrieves a list of asset shares the partner owns and that
   * map to a specified asset view ID or it retrieves a list of asset views
   * associated with a specified asset share ID owned by the partner.
   * (assetShares.listAssetShares)
   *
   * @param string $assetId The assetId parameter specifies the asset ID for which
   * you are retrieving data. The parameter can be an asset view ID or an asset
   * share ID. - If the value is an asset view ID, the API response identifies any
   * asset share ids mapped to the asset view. - If the value is an asset share
   * ID, the API response identifies any asset view ids that maps to that asset
   * share.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_AssetShareListResponse
   */
  public function listAssetShares($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_AssetShareListResponse");
  }
}

/**
 * The "assets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $assets = $youtubePartnerService->assets;
 *  </code>
 */
class Google_Service_YouTubePartner_Assets_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the metadata for the specified asset. Note that if the request
   * identifies an asset that has been merged with another asset, meaning that
   * YouTube identified the requested asset as a duplicate, then the request
   * retrieves the merged, or synthesized, asset. (assets.get)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fetchMatchPolicy The fetchMatchPolicy parameter specifies
   * the version of the asset's match policy that should be returned in the API
   * response.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string fetchOwnership The fetchOwnership parameter specifies the
   * version of the asset's ownership data that should be returned in the API
   * response. As with asset metadata, YouTube can receive asset ownership data
   * from multiple sources.
   * @opt_param string fetchMetadata The fetchMetadata parameter specifies the
   * version of the asset's metadata that should be returned in the API response.
   * In some cases, YouTube receives metadata for an asset from multiple sources,
   * such as when different partners own the asset in different territories.
   * @opt_param bool fetchOwnershipConflicts The fetchOwnershipConflicts parameter
   * allows you to retrieve information about ownership conflicts.
   * @return Google_Service_YouTubePartner_Asset
   */
  public function get($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Asset");
  }

  /**
   * Inserts an asset with the specified metadata. After inserting an asset, you
   * can set its ownership data and match policy. (assets.insert)
   *
   * @param Google_Asset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Asset
   */
  public function insert(Google_Service_YouTubePartner_Asset $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Asset");
  }

  /**
   * Retrieves a list of assets based on asset metadata. The method can retrieve
   * all assets or only assets owned by the content owner.
   *
   * Note that in cases where duplicate assets have been merged, the API response
   * only contains the synthesized asset. (It does not contain the constituent
   * assets that were merged into the synthesized asset.) (assets.listAssets)
   *
   * @param string $id The id parameter specifies a comma-separated list of
   * YouTube Asset IDs that identify the assets you want to retrieve. As noted in
   * the method description, if you try to retrieve an asset that YouTube
   * identified as a duplicate and merged with another asset, the API response
   * only returns the synthesized asset. In that case, the aliasId property in the
   * asset resource specifies a list of other asset IDs that can be used to
   * identify that asset.
   *
   * Also note that the API response does not contain duplicates. As such, if your
   * request identifies three asset IDs, and all of those have been merged into a
   * single asset, then the API response identifies one matching asset.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fetchMatchPolicy The fetchMatchPolicy parameter specifies
   * the version of the asset's match policy that should be returned in the API
   * response.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string fetchOwnership The fetchOwnership parameter specifies the
   * version of the asset's ownership data that should be returned in the API
   * response. As with asset metadata, YouTube can receive asset ownership data
   * from multiple sources.
   * @opt_param string fetchMetadata The fetchMetadata parameter specifies the
   * version of the asset's metadata that should be returned in the API response.
   * In some cases, YouTube receives metadata for an asset from multiple sources,
   * such as when different partners own the asset in different territories.
   * @opt_param bool fetchOwnershipConflicts The fetchOwnershipConflicts parameter
   * allows you to retrieve information about ownership conflicts.
   * @return Google_Service_YouTubePartner_AssetListResponse
   */
  public function listAssets($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_AssetListResponse");
  }

  /**
   * Updates the metadata for the specified asset. This method supports patch
   * semantics. (assets.patch)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_Asset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Asset
   */
  public function patch($assetId, Google_Service_YouTubePartner_Asset $postBody, $optParams = array())
  {
    $params = array('assetId' => $assetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_Asset");
  }

  /**
   * Updates the metadata for the specified asset. (assets.update)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_Asset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Asset
   */
  public function update($assetId, Google_Service_YouTubePartner_Asset $postBody, $optParams = array())
  {
    $params = array('assetId' => $assetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_Asset");
  }
}

/**
 * The "campaigns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $campaigns = $youtubePartnerService->campaigns;
 *  </code>
 */
class Google_Service_YouTubePartner_Campaigns_Resource extends Google_Service_Resource
{

  /**
   * Deletes a specified campaign for an owner. (campaigns.delete)
   *
   * @param string $campaignId The campaignId parameter specifies the YouTube
   * campaign ID of the campaign being deleted.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   */
  public function delete($campaignId, $optParams = array())
  {
    $params = array('campaignId' => $campaignId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Retrieves a particular campaign for an owner. (campaigns.get)
   *
   * @param string $campaignId The campaignId parameter specifies the YouTube
   * campaign ID of the campaign being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Campaign
   */
  public function get($campaignId, $optParams = array())
  {
    $params = array('campaignId' => $campaignId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Campaign");
  }

  /**
   * Insert a new campaign for an owner using the specified campaign data.
   * (campaigns.insert)
   *
   * @param Google_Campaign $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Campaign
   */
  public function insert(Google_Service_YouTubePartner_Campaign $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Campaign");
  }

  /**
   * Retrieves a list of campaigns for an owner. (campaigns.listCampaigns)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. For example, set this
   * parameter to the value of the nextPageToken value from the previous API
   * response to retrieve the next page of search results.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_CampaignList
   */
  public function listCampaigns($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_CampaignList");
  }

  /**
   * Update the data for a specific campaign. This method supports patch
   * semantics. (campaigns.patch)
   *
   * @param string $campaignId The campaignId parameter specifies the YouTube
   * campaign ID of the campaign being retrieved.
   * @param Google_Campaign $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Campaign
   */
  public function patch($campaignId, Google_Service_YouTubePartner_Campaign $postBody, $optParams = array())
  {
    $params = array('campaignId' => $campaignId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_Campaign");
  }

  /**
   * Update the data for a specific campaign. (campaigns.update)
   *
   * @param string $campaignId The campaignId parameter specifies the YouTube
   * campaign ID of the campaign being retrieved.
   * @param Google_Campaign $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Campaign
   */
  public function update($campaignId, Google_Service_YouTubePartner_Campaign $postBody, $optParams = array())
  {
    $params = array('campaignId' => $campaignId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_Campaign");
  }
}

/**
 * The "claimHistory" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $claimHistory = $youtubePartnerService->claimHistory;
 *  </code>
 */
class Google_Service_YouTubePartner_ClaimHistory_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the claim history for a specified claim. (claimHistory.get)
   *
   * @param string $claimId The claimId parameter specifies the YouTube claim ID
   * of the claim for which you are retrieving the claim history.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ClaimHistory
   */
  public function get($claimId, $optParams = array())
  {
    $params = array('claimId' => $claimId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_ClaimHistory");
  }
}

/**
 * The "claimSearch" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $claimSearch = $youtubePartnerService->claimSearch;
 *  </code>
 */
class Google_Service_YouTubePartner_ClaimSearch_Resource extends Google_Service_Resource
{

  /**
   * Retrieves a list of claims that match the search criteria. You can search for
   * claims that are associated with a specific asset or video or that match a
   * specified query string. (claimSearch.listClaimSearch)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string origin The origin parameter specifies the origins you want
   * to find claims for. It is a comma-separated list of origin values.
   * @opt_param string inactiveReasons The inactiveReasons parameter allows you to
   * specify what kind of inactive claims you want to find based on the reasons
   * why the claims became inactive.
   * @opt_param string createdAfter The createdAfter parameter allows you to
   * restrict the set of returned claims to ones created on or after the specified
   * date (inclusive).
   * @opt_param string referenceId The referenceId parameter specifies the YouTube
   * reference ID of the reference for which you are retrieving claims.
   * @opt_param string contentType The contentType parameter specifies the content
   * type of claims that you want to retrieve.
   * @opt_param bool partnerUploaded The partnerUploaded parameter specifies
   * whether you want to filter your search results to only partner uploaded or
   * non partner uploaded claims.
   * @opt_param string assetId The assetId parameter specifies the YouTube asset
   * ID of the asset for which you are retrieving claims.
   * @opt_param string statusModifiedAfter The statusModifiedAfter parameter
   * allows you to restrict the result set to only include claims that have had
   * their status modified on or after the specified date (inclusive). The date
   * specified must be on or after June 30, 2016 (2016-06-30). The parameter
   * value's format is YYYY-MM-DD.
   * @opt_param string status The status parameter restricts your results to only
   * claims in the specified status.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string sort The sort parameter specifies the method that will be
   * used to order resources in the API response. The default value is date.
   * However, if the status parameter value is either appealed, disputed, pending,
   * potential, or routedForReview, then results will be sorted by the time that
   * the claim review period expires.
   * @opt_param string q The q parameter specifies the query string to use to
   * filter search results. YouTube searches for the query string in the following
   * claim fields: video_title, video_keywords, user_name, isrc, iswc, grid,
   * custom_id, and in the content owner's email address.
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. For example, set this
   * parameter to the value of the nextPageToken value from the previous API
   * response to retrieve the next page of search results.
   * @opt_param string statusModifiedBefore The statusModifiedBefore parameter
   * allows you to restrict the result set to only include claims that have had
   * their status modified before the specified date (exclusive). The date
   * specified must be on or after July 1, 2016 (2016-07-01). The parameter
   * value's format is YYYY-MM-DD.
   * @opt_param string createdBefore The createdBefore parameter allows you to
   * restrict the set of returned claims to ones created before the specified date
   * (exclusive).
   * @opt_param string videoId The videoId parameter specifies comma-separated
   * list of YouTube video IDs for which you are retrieving claims.
   * @opt_param bool includeThirdPartyClaims Used along with the videoId parameter
   * this parameter determines whether or not to include third party claims in the
   * search results.
   * @return Google_Service_YouTubePartner_ClaimSearchResponse
   */
  public function listClaimSearch($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ClaimSearchResponse");
  }
}

/**
 * The "claims" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $claims = $youtubePartnerService->claims;
 *  </code>
 */
class Google_Service_YouTubePartner_Claims_Resource extends Google_Service_Resource
{

  /**
   * Retrieves a specific claim by ID. (claims.get)
   *
   * @param string $claimId The claimId parameter specifies the claim ID of the
   * claim being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Claim
   */
  public function get($claimId, $optParams = array())
  {
    $params = array('claimId' => $claimId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Claim");
  }

  /**
   * Creates a claim. The video being claimed must have been uploaded to a channel
   * associated with the same content owner as the API user sending the request.
   * You can set the claim's policy in any of the following ways: - Use the claim
   * resource's policy property to identify a saved policy by its unique ID. - Use
   * the claim resource's policy property to specify a custom set of rules.
   * (claims.insert)
   *
   * @param Google_Claim $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param bool isManualClaim restricted
   * @return Google_Service_YouTubePartner_Claim
   */
  public function insert(Google_Service_YouTubePartner_Claim $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Claim");
  }

  /**
   * Retrieves a list of claims administered by the content owner associated with
   * the currently authenticated user. Results are sorted in descending order of
   * creation time. (claims.listClaims)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string assetId Use the claimSearch.list method's assetId parameter
   * to search for claim snippets by asset ID. You can then retrieve the claim
   * resources for those claims by using this method's id parameter to specify a
   * comma-separated list of claim IDs.
   * @opt_param string videoId Use the claimSearch.list method's videoId parameter
   * to search for claim snippets by video ID. You can then retrieve the claim
   * resources for those claims by using this method's id parameter to specify a
   * comma-separated list of claim IDs.
   * @opt_param string q Use the claimSearch.list method's q parameter to search
   * for claim snippets that match a particular query string. You can then
   * retrieve the claim resources for those claims by using this method's id
   * parameter to specify a comma-separated list of claim IDs.
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. For example, set this
   * parameter to the value of the nextPageToken value from the previous API
   * response to retrieve the next page of search results.
   * @opt_param string id The id parameter specifies a list of comma-separated
   * YouTube claim IDs to retrieve.
   * @return Google_Service_YouTubePartner_ClaimListResponse
   */
  public function listClaims($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ClaimListResponse");
  }

  /**
   * Updates an existing claim by either changing its policy or its status. You
   * can update a claim's status from active to inactive to effectively release
   * the claim. This method supports patch semantics. (claims.patch)
   *
   * @param string $claimId The claimId parameter specifies the claim ID of the
   * claim being updated.
   * @param Google_Claim $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Claim
   */
  public function patch($claimId, Google_Service_YouTubePartner_Claim $postBody, $optParams = array())
  {
    $params = array('claimId' => $claimId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_Claim");
  }

  /**
   * Updates an existing claim by either changing its policy or its status. You
   * can update a claim's status from active to inactive to effectively release
   * the claim. (claims.update)
   *
   * @param string $claimId The claimId parameter specifies the claim ID of the
   * claim being updated.
   * @param Google_Claim $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Claim
   */
  public function update($claimId, Google_Service_YouTubePartner_Claim $postBody, $optParams = array())
  {
    $params = array('claimId' => $claimId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_Claim");
  }
}

/**
 * The "contentOwnerAdvertisingOptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $contentOwnerAdvertisingOptions = $youtubePartnerService->contentOwnerAdvertisingOptions;
 *  </code>
 */
class Google_Service_YouTubePartner_ContentOwnerAdvertisingOptions_Resource extends Google_Service_Resource
{

  /**
   * Retrieves advertising options for the content owner associated with the
   * authenticated user. (contentOwnerAdvertisingOptions.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ContentOwnerAdvertisingOption
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_ContentOwnerAdvertisingOption");
  }

  /**
   * Updates advertising options for the content owner associated with the
   * authenticated API user. This method supports patch semantics.
   * (contentOwnerAdvertisingOptions.patch)
   *
   * @param Google_ContentOwnerAdvertisingOption $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ContentOwnerAdvertisingOption
   */
  public function patch(Google_Service_YouTubePartner_ContentOwnerAdvertisingOption $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_ContentOwnerAdvertisingOption");
  }

  /**
   * Updates advertising options for the content owner associated with the
   * authenticated API user. (contentOwnerAdvertisingOptions.update)
   *
   * @param Google_ContentOwnerAdvertisingOption $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ContentOwnerAdvertisingOption
   */
  public function update(Google_Service_YouTubePartner_ContentOwnerAdvertisingOption $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_ContentOwnerAdvertisingOption");
  }
}

/**
 * The "contentOwners" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $contentOwners = $youtubePartnerService->contentOwners;
 *  </code>
 */
class Google_Service_YouTubePartner_ContentOwners_Resource extends Google_Service_Resource
{

  /**
   * Retrieves information about the specified content owner. (contentOwners.get)
   *
   * @param string $contentOwnerId The contentOwnerId parameter specifies a value
   * that uniquely identifies the content owner.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ContentOwner
   */
  public function get($contentOwnerId, $optParams = array())
  {
    $params = array('contentOwnerId' => $contentOwnerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_ContentOwner");
  }

  /**
   * Retrieves a list of content owners that match the request criteria.
   * (contentOwners.listContentOwners)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool fetchMine The fetchMine parameter restricts the result set to
   * content owners associated with the currently authenticated API user.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string id The id parameter specifies a comma-separated list of
   * YouTube content owner IDs to retrieve.
   * @return Google_Service_YouTubePartner_ContentOwnerListResponse
   */
  public function listContentOwners($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ContentOwnerListResponse");
  }
}

/**
 * The "liveCuepoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $liveCuepoints = $youtubePartnerService->liveCuepoints;
 *  </code>
 */
class Google_Service_YouTubePartner_LiveCuepoints_Resource extends Google_Service_Resource
{

  /**
   * Inserts a cuepoint into a live broadcast. (liveCuepoints.insert)
   *
   * @param string $channelId The channelId parameter identifies the channel that
   * owns the broadcast into which the cuepoint is being inserted.
   * @param Google_LiveCuepoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners. You can obtain the content owner ID that will serve as the parameter
   * value by calling the YouTube Content ID API's contentOwners.list method.
   * @return Google_Service_YouTubePartner_LiveCuepoint
   */
  public function insert($channelId, Google_Service_YouTubePartner_LiveCuepoint $postBody, $optParams = array())
  {
    $params = array('channelId' => $channelId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_LiveCuepoint");
  }
}

/**
 * The "metadataHistory" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $metadataHistory = $youtubePartnerService->metadataHistory;
 *  </code>
 */
class Google_Service_YouTubePartner_MetadataHistory_Resource extends Google_Service_Resource
{

  /**
   * Retrieves a list of all metadata provided for an asset, regardless of which
   * content owner provided the data. (metadataHistory.listMetadataHistory)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving a metadata history.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_MetadataHistoryListResponse
   */
  public function listMetadataHistory($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_MetadataHistoryListResponse");
  }
}

/**
 * The "orders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $orders = $youtubePartnerService->orders;
 *  </code>
 */
class Google_Service_YouTubePartner_Orders_Resource extends Google_Service_Resource
{

  /**
   * Delete an order, which moves orders to inactive state and removes any
   * associated video. (orders.delete)
   *
   * @param string $orderId Id of the order to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner ContentOwnerId that super admin acts
   * in behalf of.
   */
  public function delete($orderId, $optParams = array())
  {
    $params = array('orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Retrieve the details of an existing order. (orders.get)
   *
   * @param string $orderId The id of the order.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner ContentOnwerId that super admin acts
   * in behalf of.
   * @return Google_Service_YouTubePartner_Order
   */
  public function get($orderId, $optParams = array())
  {
    $params = array('orderId' => $orderId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Order");
  }

  /**
   * Creates a new basic order entry in the YouTube premium asset order management
   * system. You must supply at least a country and channel in the new order.
   * (orders.insert)
   *
   * @param Google_Order $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner ContentOnwerId that super admin acts
   * in behalf of.
   * @return Google_Service_YouTubePartner_Order
   */
  public function insert(Google_Service_YouTubePartner_Order $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Order");
  }

  /**
   * Return a list of orders, filtered by the parameters below, may return more
   * than a single page of results. (orders.listOrders)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string status Filter results to have this status, available
   * options are STATUS_AVAILED, STATUS_ORDERED, STATUS_RECEIVED,
   * STATUS_READY_FOR_QC, STATUS_MOC_FIX, STATUS_PARTNER_FIX, STATUS_YOUTUBE_FIX,
   * STATUS_QC_APPROVED, STATUS_INACTIVE, STATUS_INGESTION_COMPLETE,
   * STATUS_REORDERED
   * @opt_param string q Filter results to only orders that contain this string in
   * the title.
   * @opt_param string onBehalfOfContentOwner ContentOnwerId that super admin acts
   * in behalf of.
   * @opt_param string contentType Filter the results by type, possible values are
   * SHOW or MOVIE.
   * @opt_param string country Filter results by country, two letter ISO country
   * codes are used.
   * @opt_param string channelId Filter results to only a specific channel ( use
   * encrypted ID).
   * @opt_param string videoId Filter results to orders that are associated with
   * this YouTube external video id.
   * @opt_param string priority Filter results by priority. P0, P1, P2, P3 and P4
   * are the acceptable options.
   * @opt_param string pageToken The continuation token is an optional value that
   * is only used to page through large result sets.
   *
   * - To retrieve the next page of results for a request, set this parameter to
   * the value of the nextPageToken value from the previous response. - To get the
   * previous page of results, set this parameter to the value of the
   * previousPageToken value from the previous response.
   * @opt_param string productionHouse Filter results by a particular production
   * house. Specified by the name of the production house.
   * @opt_param string customId Filter result by orders that have this custom ID.
   * @return Google_Service_YouTubePartner_OrderListResponse
   */
  public function listOrders($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_OrderListResponse");
  }

  /**
   * Update the values in an existing order. This method supports patch semantics.
   * (orders.patch)
   *
   * @param string $orderId The id of the order.
   * @param Google_Order $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner ContentOwnerId that super admin acts
   * in behalf of.
   * @return Google_Service_YouTubePartner_Order
   */
  public function patch($orderId, Google_Service_YouTubePartner_Order $postBody, $optParams = array())
  {
    $params = array('orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_Order");
  }

  /**
   * Update the values in an existing order. (orders.update)
   *
   * @param string $orderId The id of the order.
   * @param Google_Order $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner ContentOwnerId that super admin acts
   * in behalf of.
   * @return Google_Service_YouTubePartner_Order
   */
  public function update($orderId, Google_Service_YouTubePartner_Order $postBody, $optParams = array())
  {
    $params = array('orderId' => $orderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_Order");
  }
}

/**
 * The "ownership" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $ownership = $youtubePartnerService->ownership;
 *  </code>
 */
class Google_Service_YouTubePartner_Ownership_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the ownership data provided for the specified asset by the content
   * owner associated with the authenticated user. (ownership.get)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * for which you are retrieving ownership data.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_RightsOwnership
   */
  public function get($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_RightsOwnership");
  }

  /**
   * Provides new ownership information for the specified asset. Note that YouTube
   * may receive ownership information from multiple sources. For example, if an
   * asset has multiple owners, each owner might send ownership data for the
   * asset. YouTube algorithmically combines the ownership data received from all
   * of those sources to generate the asset's canonical ownership data, which
   * should provide the most comprehensive and accurate representation of the
   * asset's ownership. This method supports patch semantics. (ownership.patch)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_RightsOwnership $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_RightsOwnership
   */
  public function patch($assetId, Google_Service_YouTubePartner_RightsOwnership $postBody, $optParams = array())
  {
    $params = array('assetId' => $assetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_RightsOwnership");
  }

  /**
   * Provides new ownership information for the specified asset. Note that YouTube
   * may receive ownership information from multiple sources. For example, if an
   * asset has multiple owners, each owner might send ownership data for the
   * asset. YouTube algorithmically combines the ownership data received from all
   * of those sources to generate the asset's canonical ownership data, which
   * should provide the most comprehensive and accurate representation of the
   * asset's ownership. (ownership.update)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_RightsOwnership $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_RightsOwnership
   */
  public function update($assetId, Google_Service_YouTubePartner_RightsOwnership $postBody, $optParams = array())
  {
    $params = array('assetId' => $assetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_RightsOwnership");
  }
}

/**
 * The "ownershipHistory" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $ownershipHistory = $youtubePartnerService->ownershipHistory;
 *  </code>
 */
class Google_Service_YouTubePartner_OwnershipHistory_Resource extends Google_Service_Resource
{

  /**
   * Retrieves a list of the ownership data for an asset, regardless of which
   * content owner provided the data. The list only includes the most recent
   * ownership data for each content owner. However, if the content owner has
   * submitted ownership data through multiple data sources (API, content feeds,
   * etc.), the list will contain the most recent data for each content owner and
   * data source. (ownershipHistory.listOwnershipHistory)
   *
   * @param string $assetId The assetId parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving an ownership data history.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_OwnershipHistoryListResponse
   */
  public function listOwnershipHistory($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_OwnershipHistoryListResponse");
  }
}

/**
 * The "package" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $package = $youtubePartnerService->package;
 *  </code>
 */
class Google_Service_YouTubePartner_Package_Resource extends Google_Service_Resource
{

  /**
   * Retrieves information for the specified package. (package.get)
   *
   * @param string $packageId The packageId parameter specifies the Content
   * Delivery package ID of the package being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Package
   */
  public function get($packageId, $optParams = array())
  {
    $params = array('packageId' => $packageId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Package");
  }

  /**
   * Inserts a metadata-only package. (package.insert)
   *
   * @param Google_Package $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_PackageInsertResponse
   */
  public function insert(Google_Service_YouTubePartner_Package $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_PackageInsertResponse");
  }
}

/**
 * The "policies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $policies = $youtubePartnerService->policies;
 *  </code>
 */
class Google_Service_YouTubePartner_Policies_Resource extends Google_Service_Resource
{

  /**
   * Retrieves the specified saved policy. (policies.get)
   *
   * @param string $policyId The policyId parameter specifies a value that
   * uniquely identifies the policy being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Policy
   */
  public function get($policyId, $optParams = array())
  {
    $params = array('policyId' => $policyId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Policy");
  }

  /**
   * Creates a saved policy. (policies.insert)
   *
   * @param Google_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Policy
   */
  public function insert(Google_Service_YouTubePartner_Policy $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Policy");
  }

  /**
   * Retrieves a list of the content owner's saved policies.
   * (policies.listPolicies)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sort The sort parameter specifies how the search results
   * should be sorted.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string id The id parameter specifies a comma-separated list of
   * saved policy IDs to retrieve. Only policies belonging to the currently
   * authenticated content owner will be available.
   * @return Google_Service_YouTubePartner_PolicyList
   */
  public function listPolicies($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_PolicyList");
  }

  /**
   * Updates the specified saved policy. This method supports patch semantics.
   * (policies.patch)
   *
   * @param string $policyId The policyId parameter specifies a value that
   * uniquely identifies the policy being updated.
   * @param Google_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Policy
   */
  public function patch($policyId, Google_Service_YouTubePartner_Policy $postBody, $optParams = array())
  {
    $params = array('policyId' => $policyId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_Policy");
  }

  /**
   * Updates the specified saved policy. (policies.update)
   *
   * @param string $policyId The policyId parameter specifies a value that
   * uniquely identifies the policy being updated.
   * @param Google_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Policy
   */
  public function update($policyId, Google_Service_YouTubePartner_Policy $postBody, $optParams = array())
  {
    $params = array('policyId' => $policyId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_Policy");
  }
}

/**
 * The "publishers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $publishers = $youtubePartnerService->publishers;
 *  </code>
 */
class Google_Service_YouTubePartner_Publishers_Resource extends Google_Service_Resource
{

  /**
   * Retrieves information about the specified publisher. (publishers.get)
   *
   * @param string $publisherId The publisherId parameter specifies a publisher ID
   * that uniquely identifies the publisher being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Publisher
   */
  public function get($publisherId, $optParams = array())
  {
    $params = array('publisherId' => $publisherId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Publisher");
  }

  /**
   * Retrieves a list of publishers that match the request criteria. This method
   * is analogous to a publisher search function. (publishers.listPublishers)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string caeNumber The caeNumber parameter specifies the CAE number
   * of the publisher that you want to retrieve.
   * @opt_param string maxResults The maxResults parameter specifies the maximum
   * number of results to return per page.
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string namePrefix The namePrefix parameter indicates that the API
   * should only return publishers whose name starts with this prefix.
   * @opt_param string ipiNumber The ipiNumber parameter specifies the IPI number
   * of the publisher that you want to retrieve.
   * @opt_param string id The id parameter specifies a comma-separated list of
   * YouTube publisher IDs to retrieve.
   * @return Google_Service_YouTubePartner_PublisherList
   */
  public function listPublishers($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_PublisherList");
  }
}

/**
 * The "referenceConflicts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $referenceConflicts = $youtubePartnerService->referenceConflicts;
 *  </code>
 */
class Google_Service_YouTubePartner_ReferenceConflicts_Resource extends Google_Service_Resource
{

  /**
   * Retrieves information about the specified reference conflict.
   * (referenceConflicts.get)
   *
   * @param string $referenceConflictId The referenceConflictId parameter
   * specifies the YouTube reference conflict ID of the reference conflict being
   * retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ReferenceConflict
   */
  public function get($referenceConflictId, $optParams = array())
  {
    $params = array('referenceConflictId' => $referenceConflictId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_ReferenceConflict");
  }

  /**
   * Retrieves a list of unresolved reference conflicts.
   * (referenceConflicts.listReferenceConflicts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ReferenceConflictListResponse
   */
  public function listReferenceConflicts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ReferenceConflictListResponse");
  }
}

/**
 * The "references" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $references = $youtubePartnerService->references;
 *  </code>
 */
class Google_Service_YouTubePartner_References_Resource extends Google_Service_Resource
{

  /**
   * Retrieves information about the specified reference. (references.get)
   *
   * @param string $referenceId The referenceId parameter specifies the YouTube
   * reference ID of the reference being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Reference
   */
  public function get($referenceId, $optParams = array())
  {
    $params = array('referenceId' => $referenceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Reference");
  }

  /**
   * Creates a reference in one of the following ways: - If your request is
   * uploading a reference file, YouTube creates the reference from the provided
   * content. You can provide either a video/audio file or a pre-generated
   * fingerprint. If you are providing a pre-generated fingerprint, set the
   * reference resource's fpDirect property to true in the request body. In this
   * flow, you can use either the multipart or resumable upload flows to provide
   * the reference content. - If you want to create a reference using a claimed
   * video as the reference content, use the claimId parameter to identify the
   * claim. (references.insert)
   *
   * @param Google_Reference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string claimId The claimId parameter specifies the YouTube claim
   * ID of an existing claim from which a reference should be created. (The
   * claimed video is used as the reference content.)
   * @return Google_Service_YouTubePartner_Reference
   */
  public function insert(Google_Service_YouTubePartner_Reference $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Reference");
  }

  /**
   * Retrieves a list of references by ID or the list of references for the
   * specified asset. (references.listReferences)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string assetId The assetId parameter specifies the YouTube asset
   * ID of the asset for which you are retrieving references.
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string id The id parameter specifies a comma-separated list of
   * YouTube reference IDs to retrieve.
   * @return Google_Service_YouTubePartner_ReferenceListResponse
   */
  public function listReferences($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ReferenceListResponse");
  }

  /**
   * Updates a reference. This method supports patch semantics. (references.patch)
   *
   * @param string $referenceId The referenceId parameter specifies the YouTube
   * reference ID of the reference being updated.
   * @param Google_Reference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool releaseClaims The releaseClaims parameter indicates that you
   * want to release all match claims associated with this reference. This
   * parameter only works when the claim's status is being updated to 'inactive' -
   * you can then set the parameter's value to true to release all match claims
   * produced by this reference.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Reference
   */
  public function patch($referenceId, Google_Service_YouTubePartner_Reference $postBody, $optParams = array())
  {
    $params = array('referenceId' => $referenceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_Reference");
  }

  /**
   * Updates a reference. (references.update)
   *
   * @param string $referenceId The referenceId parameter specifies the YouTube
   * reference ID of the reference being updated.
   * @param Google_Reference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool releaseClaims The releaseClaims parameter indicates that you
   * want to release all match claims associated with this reference. This
   * parameter only works when the claim's status is being updated to 'inactive' -
   * you can then set the parameter's value to true to release all match claims
   * produced by this reference.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Reference
   */
  public function update($referenceId, Google_Service_YouTubePartner_Reference $postBody, $optParams = array())
  {
    $params = array('referenceId' => $referenceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_Reference");
  }
}

/**
 * The "validator" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $validator = $youtubePartnerService->validator;
 *  </code>
 */
class Google_Service_YouTubePartner_Validator_Resource extends Google_Service_Resource
{

  /**
   * Validate a metadata file. (validator.validate)
   *
   * @param Google_ValidateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ValidateResponse
   */
  public function validate(Google_Service_YouTubePartner_ValidateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('validate', array($params), "Google_Service_YouTubePartner_ValidateResponse");
  }

  /**
   * Validate a metadata file asynchronously. (validator.validateAsync)
   *
   * @param Google_ValidateAsyncRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ValidateAsyncResponse
   */
  public function validateAsync(Google_Service_YouTubePartner_ValidateAsyncRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('validateAsync', array($params), "Google_Service_YouTubePartner_ValidateAsyncResponse");
  }

  /**
   * Get the asynchronous validation status. (validator.validateAsyncStatus)
   *
   * @param Google_ValidateStatusRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_ValidateStatusResponse
   */
  public function validateAsyncStatus(Google_Service_YouTubePartner_ValidateStatusRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('validateAsyncStatus', array($params), "Google_Service_YouTubePartner_ValidateStatusResponse");
  }
}

/**
 * The "videoAdvertisingOptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $videoAdvertisingOptions = $youtubePartnerService->videoAdvertisingOptions;
 *  </code>
 */
class Google_Service_YouTubePartner_VideoAdvertisingOptions_Resource extends Google_Service_Resource
{

  /**
   * Retrieves advertising settings for the specified video.
   * (videoAdvertisingOptions.get)
   *
   * @param string $videoId The videoId parameter specifies the YouTube video ID
   * of the video for which you are retrieving advertising settings.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_VideoAdvertisingOption
   */
  public function get($videoId, $optParams = array())
  {
    $params = array('videoId' => $videoId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_VideoAdvertisingOption");
  }

  /**
   * Retrieves details about the types of allowed ads for a specified partner- or
   * user-uploaded video. (videoAdvertisingOptions.getEnabledAds)
   *
   * @param string $videoId The videoId parameter specifies the YouTube video ID
   * of the video for which you are retrieving advertising options.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_VideoAdvertisingOptionGetEnabledAdsResponse
   */
  public function getEnabledAds($videoId, $optParams = array())
  {
    $params = array('videoId' => $videoId);
    $params = array_merge($params, $optParams);
    return $this->call('getEnabledAds', array($params), "Google_Service_YouTubePartner_VideoAdvertisingOptionGetEnabledAdsResponse");
  }

  /**
   * Updates the advertising settings for the specified video. This method
   * supports patch semantics. (videoAdvertisingOptions.patch)
   *
   * @param string $videoId The videoId parameter specifies the YouTube video ID
   * of the video for which you are updating advertising settings.
   * @param Google_VideoAdvertisingOption $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_VideoAdvertisingOption
   */
  public function patch($videoId, Google_Service_YouTubePartner_VideoAdvertisingOption $postBody, $optParams = array())
  {
    $params = array('videoId' => $videoId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_YouTubePartner_VideoAdvertisingOption");
  }

  /**
   * Updates the advertising settings for the specified video.
   * (videoAdvertisingOptions.update)
   *
   * @param string $videoId The videoId parameter specifies the YouTube video ID
   * of the video for which you are updating advertising settings.
   * @param Google_VideoAdvertisingOption $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_VideoAdvertisingOption
   */
  public function update($videoId, Google_Service_YouTubePartner_VideoAdvertisingOption $postBody, $optParams = array())
  {
    $params = array('videoId' => $videoId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_YouTubePartner_VideoAdvertisingOption");
  }
}

/**
 * The "whitelists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $whitelists = $youtubePartnerService->whitelists;
 *  </code>
 */
class Google_Service_YouTubePartner_Whitelists_Resource extends Google_Service_Resource
{

  /**
   * Removes a whitelisted channel for a content owner. (whitelists.delete)
   *
   * @param string $id The id parameter specifies the YouTube channel ID of the
   * channel being removed from whitelist.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }

  /**
   * Retrieves a specific whitelisted channel by ID. (whitelists.get)
   *
   * @param string $id The id parameter specifies the YouTube channel ID of the
   * whitelisted channel being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Whitelist
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_Whitelist");
  }

  /**
   * Whitelist a YouTube channel for your content owner. Whitelisted channels are
   * channels that are not owned or managed by you, but you would like to
   * whitelist so that no claims from your assets are placed on videos uploaded to
   * these channels. (whitelists.insert)
   *
   * @param Google_Whitelist $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @return Google_Service_YouTubePartner_Whitelist
   */
  public function insert(Google_Service_YouTubePartner_Whitelist $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_YouTubePartner_Whitelist");
  }

  /**
   * Retrieves a list of whitelisted channels for a content owner.
   * (whitelists.listWhitelists)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The pageToken parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of results.
   * @opt_param string onBehalfOfContentOwner The onBehalfOfContentOwner parameter
   * identifies the content owner that the user is acting on behalf of. This
   * parameter supports users whose accounts are associated with multiple content
   * owners.
   * @opt_param string id The id parameter specifies a comma-separated list of
   * YouTube channel IDs that identify the whitelisted channels you want to
   * retrieve.
   * @return Google_Service_YouTubePartner_WhitelistListResponse
   */
  public function listWhitelists($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_WhitelistListResponse");
  }
}




class Google_Service_YouTubePartner_AdBreak extends Google_Collection
{
  protected $collection_key = 'slot';
  protected $internal_gapi_mappings = array(
  );
  public $midrollSeconds;
  public $position;
  protected $slotType = 'Google_Service_YouTubePartner_AdSlot';
  protected $slotDataType = 'array';


  public function setMidrollSeconds($midrollSeconds)
  {
    $this->midrollSeconds = $midrollSeconds;
  }
  public function getMidrollSeconds()
  {
    return $this->midrollSeconds;
  }
  public function setPosition($position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
  public function setSlot($slot)
  {
    $this->slot = $slot;
  }
  public function getSlot()
  {
    return $this->slot;
  }
}

class Google_Service_YouTubePartner_AdSlot extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $type;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_YouTubePartner_AllowedAdvertisingOptions extends Google_Collection
{
  protected $collection_key = 'ugcAdFormats';
  protected $internal_gapi_mappings = array(
  );
  public $adsOnEmbeds;
  public $kind;
  public $licAdFormats;
  public $ugcAdFormats;


  public function setAdsOnEmbeds($adsOnEmbeds)
  {
    $this->adsOnEmbeds = $adsOnEmbeds;
  }
  public function getAdsOnEmbeds()
  {
    return $this->adsOnEmbeds;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLicAdFormats($licAdFormats)
  {
    $this->licAdFormats = $licAdFormats;
  }
  public function getLicAdFormats()
  {
    return $this->licAdFormats;
  }
  public function setUgcAdFormats($ugcAdFormats)
  {
    $this->ugcAdFormats = $ugcAdFormats;
  }
  public function getUgcAdFormats()
  {
    return $this->ugcAdFormats;
  }
}

class Google_Service_YouTubePartner_Asset extends Google_Collection
{
  protected $collection_key = 'label';
  protected $internal_gapi_mappings = array(
  );
  public $aliasId;
  public $id;
  public $kind;
  public $label;
  protected $matchPolicyType = 'Google_Service_YouTubePartner_AssetMatchPolicy';
  protected $matchPolicyDataType = '';
  protected $matchPolicyEffectiveType = 'Google_Service_YouTubePartner_AssetMatchPolicy';
  protected $matchPolicyEffectiveDataType = '';
  protected $matchPolicyMineType = 'Google_Service_YouTubePartner_AssetMatchPolicy';
  protected $matchPolicyMineDataType = '';
  protected $metadataType = 'Google_Service_YouTubePartner_Metadata';
  protected $metadataDataType = '';
  protected $metadataEffectiveType = 'Google_Service_YouTubePartner_Metadata';
  protected $metadataEffectiveDataType = '';
  protected $metadataMineType = 'Google_Service_YouTubePartner_Metadata';
  protected $metadataMineDataType = '';
  protected $ownershipType = 'Google_Service_YouTubePartner_RightsOwnership';
  protected $ownershipDataType = '';
  protected $ownershipConflictsType = 'Google_Service_YouTubePartner_OwnershipConflicts';
  protected $ownershipConflictsDataType = '';
  protected $ownershipEffectiveType = 'Google_Service_YouTubePartner_RightsOwnership';
  protected $ownershipEffectiveDataType = '';
  protected $ownershipMineType = 'Google_Service_YouTubePartner_RightsOwnership';
  protected $ownershipMineDataType = '';
  public $status;
  public $timeCreated;
  public $type;


  public function setAliasId($aliasId)
  {
    $this->aliasId = $aliasId;
  }
  public function getAliasId()
  {
    return $this->aliasId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setMatchPolicy(Google_Service_YouTubePartner_AssetMatchPolicy $matchPolicy)
  {
    $this->matchPolicy = $matchPolicy;
  }
  public function getMatchPolicy()
  {
    return $this->matchPolicy;
  }
  public function setMatchPolicyEffective(Google_Service_YouTubePartner_AssetMatchPolicy $matchPolicyEffective)
  {
    $this->matchPolicyEffective = $matchPolicyEffective;
  }
  public function getMatchPolicyEffective()
  {
    return $this->matchPolicyEffective;
  }
  public function setMatchPolicyMine(Google_Service_YouTubePartner_AssetMatchPolicy $matchPolicyMine)
  {
    $this->matchPolicyMine = $matchPolicyMine;
  }
  public function getMatchPolicyMine()
  {
    return $this->matchPolicyMine;
  }
  public function setMetadata(Google_Service_YouTubePartner_Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setMetadataEffective(Google_Service_YouTubePartner_Metadata $metadataEffective)
  {
    $this->metadataEffective = $metadataEffective;
  }
  public function getMetadataEffective()
  {
    return $this->metadataEffective;
  }
  public function setMetadataMine(Google_Service_YouTubePartner_Metadata $metadataMine)
  {
    $this->metadataMine = $metadataMine;
  }
  public function getMetadataMine()
  {
    return $this->metadataMine;
  }
  public function setOwnership(Google_Service_YouTubePartner_RightsOwnership $ownership)
  {
    $this->ownership = $ownership;
  }
  public function getOwnership()
  {
    return $this->ownership;
  }
  public function setOwnershipConflicts(Google_Service_YouTubePartner_OwnershipConflicts $ownershipConflicts)
  {
    $this->ownershipConflicts = $ownershipConflicts;
  }
  public function getOwnershipConflicts()
  {
    return $this->ownershipConflicts;
  }
  public function setOwnershipEffective(Google_Service_YouTubePartner_RightsOwnership $ownershipEffective)
  {
    $this->ownershipEffective = $ownershipEffective;
  }
  public function getOwnershipEffective()
  {
    return $this->ownershipEffective;
  }
  public function setOwnershipMine(Google_Service_YouTubePartner_RightsOwnership $ownershipMine)
  {
    $this->ownershipMine = $ownershipMine;
  }
  public function getOwnershipMine()
  {
    return $this->ownershipMine;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_YouTubePartner_AssetLabel extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $labelName;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLabelName($labelName)
  {
    $this->labelName = $labelName;
  }
  public function getLabelName()
  {
    return $this->labelName;
  }
}

class Google_Service_YouTubePartner_AssetLabelListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_AssetLabel';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_AssetListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Asset';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_AssetMatchPolicy extends Google_Collection
{
  protected $collection_key = 'rules';
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $policyId;
  protected $rulesType = 'Google_Service_YouTubePartner_PolicyRule';
  protected $rulesDataType = 'array';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPolicyId($policyId)
  {
    $this->policyId = $policyId;
  }
  public function getPolicyId()
  {
    return $this->policyId;
  }
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  public function getRules()
  {
    return $this->rules;
  }
}

class Google_Service_YouTubePartner_AssetRelationship extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $childAssetId;
  public $id;
  public $kind;
  public $parentAssetId;


  public function setChildAssetId($childAssetId)
  {
    $this->childAssetId = $childAssetId;
  }
  public function getChildAssetId()
  {
    return $this->childAssetId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setParentAssetId($parentAssetId)
  {
    $this->parentAssetId = $parentAssetId;
  }
  public function getParentAssetId()
  {
    return $this->parentAssetId;
  }
}

class Google_Service_YouTubePartner_AssetRelationshipListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_AssetRelationship';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}

class Google_Service_YouTubePartner_AssetSearchResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_AssetSnippet';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}

class Google_Service_YouTubePartner_AssetShare extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $shareId;
  public $viewId;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setShareId($shareId)
  {
    $this->shareId = $shareId;
  }
  public function getShareId()
  {
    return $this->shareId;
  }
  public function setViewId($viewId)
  {
    $this->viewId = $viewId;
  }
  public function getViewId()
  {
    return $this->viewId;
  }
}

class Google_Service_YouTubePartner_AssetShareListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_AssetShare';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}

class Google_Service_YouTubePartner_AssetSnippet extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $customId;
  public $id;
  public $isrc;
  public $iswc;
  public $kind;
  public $timeCreated;
  public $title;
  public $type;


  public function setCustomId($customId)
  {
    $this->customId = $customId;
  }
  public function getCustomId()
  {
    return $this->customId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsrc($isrc)
  {
    $this->isrc = $isrc;
  }
  public function getIsrc()
  {
    return $this->isrc;
  }
  public function setIswc($iswc)
  {
    $this->iswc = $iswc;
  }
  public function getIswc()
  {
    return $this->iswc;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_YouTubePartner_Campaign extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $campaignDataType = 'Google_Service_YouTubePartner_CampaignData';
  protected $campaignDataDataType = '';
  public $id;
  public $kind;
  public $status;
  public $timeCreated;
  public $timeLastModified;


  public function setCampaignData(Google_Service_YouTubePartner_CampaignData $campaignData)
  {
    $this->campaignData = $campaignData;
  }
  public function getCampaignData()
  {
    return $this->campaignData;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setTimeLastModified($timeLastModified)
  {
    $this->timeLastModified = $timeLastModified;
  }
  public function getTimeLastModified()
  {
    return $this->timeLastModified;
  }
}

class Google_Service_YouTubePartner_CampaignData extends Google_Collection
{
  protected $collection_key = 'promotedContent';
  protected $internal_gapi_mappings = array(
  );
  protected $campaignSourceType = 'Google_Service_YouTubePartner_CampaignSource';
  protected $campaignSourceDataType = '';
  public $expireTime;
  public $name;
  protected $promotedContentType = 'Google_Service_YouTubePartner_PromotedContent';
  protected $promotedContentDataType = 'array';
  public $startTime;


  public function setCampaignSource(Google_Service_YouTubePartner_CampaignSource $campaignSource)
  {
    $this->campaignSource = $campaignSource;
  }
  public function getCampaignSource()
  {
    return $this->campaignSource;
  }
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPromotedContent($promotedContent)
  {
    $this->promotedContent = $promotedContent;
  }
  public function getPromotedContent()
  {
    return $this->promotedContent;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Google_Service_YouTubePartner_CampaignList extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Campaign';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_CampaignSource extends Google_Collection
{
  protected $collection_key = 'sourceValue';
  protected $internal_gapi_mappings = array(
  );
  public $sourceType;
  public $sourceValue;


  public function setSourceType($sourceType)
  {
    $this->sourceType = $sourceType;
  }
  public function getSourceType()
  {
    return $this->sourceType;
  }
  public function setSourceValue($sourceValue)
  {
    $this->sourceValue = $sourceValue;
  }
  public function getSourceValue()
  {
    return $this->sourceValue;
  }
}

class Google_Service_YouTubePartner_CampaignTargetLink extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $targetId;
  public $targetType;


  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }
  public function getTargetId()
  {
    return $this->targetId;
  }
  public function setTargetType($targetType)
  {
    $this->targetType = $targetType;
  }
  public function getTargetType()
  {
    return $this->targetType;
  }
}

class Google_Service_YouTubePartner_Claim extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $appliedPolicyType = 'Google_Service_YouTubePartner_Policy';
  protected $appliedPolicyDataType = '';
  public $assetId;
  public $blockOutsideOwnership;
  public $contentType;
  public $id;
  public $isPartnerUploaded;
  public $kind;
  protected $matchInfoType = 'Google_Service_YouTubePartner_ClaimMatchInfo';
  protected $matchInfoDataType = '';
  protected $originType = 'Google_Service_YouTubePartner_ClaimOrigin';
  protected $originDataType = '';
  protected $policyType = 'Google_Service_YouTubePartner_Policy';
  protected $policyDataType = '';
  public $status;
  public $timeCreated;
  public $videoId;


  public function setAppliedPolicy(Google_Service_YouTubePartner_Policy $appliedPolicy)
  {
    $this->appliedPolicy = $appliedPolicy;
  }
  public function getAppliedPolicy()
  {
    return $this->appliedPolicy;
  }
  public function setAssetId($assetId)
  {
    $this->assetId = $assetId;
  }
  public function getAssetId()
  {
    return $this->assetId;
  }
  public function setBlockOutsideOwnership($blockOutsideOwnership)
  {
    $this->blockOutsideOwnership = $blockOutsideOwnership;
  }
  public function getBlockOutsideOwnership()
  {
    return $this->blockOutsideOwnership;
  }
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  public function getContentType()
  {
    return $this->contentType;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsPartnerUploaded($isPartnerUploaded)
  {
    $this->isPartnerUploaded = $isPartnerUploaded;
  }
  public function getIsPartnerUploaded()
  {
    return $this->isPartnerUploaded;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMatchInfo(Google_Service_YouTubePartner_ClaimMatchInfo $matchInfo)
  {
    $this->matchInfo = $matchInfo;
  }
  public function getMatchInfo()
  {
    return $this->matchInfo;
  }
  public function setOrigin(Google_Service_YouTubePartner_ClaimOrigin $origin)
  {
    $this->origin = $origin;
  }
  public function getOrigin()
  {
    return $this->origin;
  }
  public function setPolicy(Google_Service_YouTubePartner_Policy $policy)
  {
    $this->policy = $policy;
  }
  public function getPolicy()
  {
    return $this->policy;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class Google_Service_YouTubePartner_ClaimEvent extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $reason;
  protected $sourceType = 'Google_Service_YouTubePartner_ClaimEventSource';
  protected $sourceDataType = '';
  public $time;
  public $type;
  protected $typeDetailsType = 'Google_Service_YouTubePartner_ClaimEventTypeDetails';
  protected $typeDetailsDataType = '';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  public function getReason()
  {
    return $this->reason;
  }
  public function setSource(Google_Service_YouTubePartner_ClaimEventSource $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
  public function setTime($time)
  {
    $this->time = $time;
  }
  public function getTime()
  {
    return $this->time;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setTypeDetails(Google_Service_YouTubePartner_ClaimEventTypeDetails $typeDetails)
  {
    $this->typeDetails = $typeDetails;
  }
  public function getTypeDetails()
  {
    return $this->typeDetails;
  }
}

class Google_Service_YouTubePartner_ClaimEventSource extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $contentOwnerId;
  public $type;
  public $userEmail;


  public function setContentOwnerId($contentOwnerId)
  {
    $this->contentOwnerId = $contentOwnerId;
  }
  public function getContentOwnerId()
  {
    return $this->contentOwnerId;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }
  public function getUserEmail()
  {
    return $this->userEmail;
  }
}

class Google_Service_YouTubePartner_ClaimEventTypeDetails extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $appealExplanation;
  public $disputeNotes;
  public $disputeReason;
  public $updateStatus;


  public function setAppealExplanation($appealExplanation)
  {
    $this->appealExplanation = $appealExplanation;
  }
  public function getAppealExplanation()
  {
    return $this->appealExplanation;
  }
  public function setDisputeNotes($disputeNotes)
  {
    $this->disputeNotes = $disputeNotes;
  }
  public function getDisputeNotes()
  {
    return $this->disputeNotes;
  }
  public function setDisputeReason($disputeReason)
  {
    $this->disputeReason = $disputeReason;
  }
  public function getDisputeReason()
  {
    return $this->disputeReason;
  }
  public function setUpdateStatus($updateStatus)
  {
    $this->updateStatus = $updateStatus;
  }
  public function getUpdateStatus()
  {
    return $this->updateStatus;
  }
}

class Google_Service_YouTubePartner_ClaimHistory extends Google_Collection
{
  protected $collection_key = 'event';
  protected $internal_gapi_mappings = array(
  );
  protected $eventType = 'Google_Service_YouTubePartner_ClaimEvent';
  protected $eventDataType = 'array';
  public $id;
  public $kind;
  public $uploaderChannelId;


  public function setEvent($event)
  {
    $this->event = $event;
  }
  public function getEvent()
  {
    return $this->event;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUploaderChannelId($uploaderChannelId)
  {
    $this->uploaderChannelId = $uploaderChannelId;
  }
  public function getUploaderChannelId()
  {
    return $this->uploaderChannelId;
  }
}

class Google_Service_YouTubePartner_ClaimListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Claim';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';
  public $previousPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }
  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}

class Google_Service_YouTubePartner_ClaimMatchInfo extends Google_Collection
{
  protected $collection_key = 'matchSegments';
  protected $internal_gapi_mappings = array(
  );
  protected $longestMatchType = 'Google_Service_YouTubePartner_ClaimMatchInfoLongestMatch';
  protected $longestMatchDataType = '';
  protected $matchSegmentsType = 'Google_Service_YouTubePartner_MatchSegment';
  protected $matchSegmentsDataType = 'array';
  public $referenceId;
  protected $totalMatchType = 'Google_Service_YouTubePartner_ClaimMatchInfoTotalMatch';
  protected $totalMatchDataType = '';


  public function setLongestMatch(Google_Service_YouTubePartner_ClaimMatchInfoLongestMatch $longestMatch)
  {
    $this->longestMatch = $longestMatch;
  }
  public function getLongestMatch()
  {
    return $this->longestMatch;
  }
  public function setMatchSegments($matchSegments)
  {
    $this->matchSegments = $matchSegments;
  }
  public function getMatchSegments()
  {
    return $this->matchSegments;
  }
  public function setReferenceId($referenceId)
  {
    $this->referenceId = $referenceId;
  }
  public function getReferenceId()
  {
    return $this->referenceId;
  }
  public function setTotalMatch(Google_Service_YouTubePartner_ClaimMatchInfoTotalMatch $totalMatch)
  {
    $this->totalMatch = $totalMatch;
  }
  public function getTotalMatch()
  {
    return $this->totalMatch;
  }
}

class Google_Service_YouTubePartner_ClaimMatchInfoLongestMatch extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $durationSecs;
  public $referenceOffset;
  public $userVideoOffset;


  public function setDurationSecs($durationSecs)
  {
    $this->durationSecs = $durationSecs;
  }
  public function getDurationSecs()
  {
    return $this->durationSecs;
  }
  public function setReferenceOffset($referenceOffset)
  {
    $this->referenceOffset = $referenceOffset;
  }
  public function getReferenceOffset()
  {
    return $this->referenceOffset;
  }
  public function setUserVideoOffset($userVideoOffset)
  {
    $this->userVideoOffset = $userVideoOffset;
  }
  public function getUserVideoOffset()
  {
    return $this->userVideoOffset;
  }
}

class Google_Service_YouTubePartner_ClaimMatchInfoTotalMatch extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $referenceDurationSecs;
  public $userVideoDurationSecs;


  public function setReferenceDurationSecs($referenceDurationSecs)
  {
    $this->referenceDurationSecs = $referenceDurationSecs;
  }
  public function getReferenceDurationSecs()
  {
    return $this->referenceDurationSecs;
  }
  public function setUserVideoDurationSecs($userVideoDurationSecs)
  {
    $this->userVideoDurationSecs = $userVideoDurationSecs;
  }
  public function getUserVideoDurationSecs()
  {
    return $this->userVideoDurationSecs;
  }
}

class Google_Service_YouTubePartner_ClaimOrigin extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $source;


  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Google_Service_YouTubePartner_ClaimSearchResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_ClaimSnippet';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';
  public $previousPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }
  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}

class Google_Service_YouTubePartner_ClaimSnippet extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $assetId;
  public $contentType;
  public $id;
  public $isPartnerUploaded;
  public $kind;
  protected $originType = 'Google_Service_YouTubePartner_ClaimSnippetOrigin';
  protected $originDataType = '';
  public $status;
  public $thirdPartyClaim;
  public $timeCreated;
  public $timeStatusLastModified;
  public $videoId;
  public $videoTitle;
  public $videoViews;


  public function setAssetId($assetId)
  {
    $this->assetId = $assetId;
  }
  public function getAssetId()
  {
    return $this->assetId;
  }
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  public function getContentType()
  {
    return $this->contentType;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIsPartnerUploaded($isPartnerUploaded)
  {
    $this->isPartnerUploaded = $isPartnerUploaded;
  }
  public function getIsPartnerUploaded()
  {
    return $this->isPartnerUploaded;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOrigin(Google_Service_YouTubePartner_ClaimSnippetOrigin $origin)
  {
    $this->origin = $origin;
  }
  public function getOrigin()
  {
    return $this->origin;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setThirdPartyClaim($thirdPartyClaim)
  {
    $this->thirdPartyClaim = $thirdPartyClaim;
  }
  public function getThirdPartyClaim()
  {
    return $this->thirdPartyClaim;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setTimeStatusLastModified($timeStatusLastModified)
  {
    $this->timeStatusLastModified = $timeStatusLastModified;
  }
  public function getTimeStatusLastModified()
  {
    return $this->timeStatusLastModified;
  }
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  public function getVideoId()
  {
    return $this->videoId;
  }
  public function setVideoTitle($videoTitle)
  {
    $this->videoTitle = $videoTitle;
  }
  public function getVideoTitle()
  {
    return $this->videoTitle;
  }
  public function setVideoViews($videoViews)
  {
    $this->videoViews = $videoViews;
  }
  public function getVideoViews()
  {
    return $this->videoViews;
  }
}

class Google_Service_YouTubePartner_ClaimSnippetOrigin extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $source;


  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Google_Service_YouTubePartner_ClaimedVideoDefaults extends Google_Collection
{
  protected $collection_key = 'newVideoDefaults';
  protected $internal_gapi_mappings = array(
  );
  public $autoGeneratedBreaks;
  public $channelOverride;
  public $kind;
  public $newVideoDefaults;


  public function setAutoGeneratedBreaks($autoGeneratedBreaks)
  {
    $this->autoGeneratedBreaks = $autoGeneratedBreaks;
  }
  public function getAutoGeneratedBreaks()
  {
    return $this->autoGeneratedBreaks;
  }
  public function setChannelOverride($channelOverride)
  {
    $this->channelOverride = $channelOverride;
  }
  public function getChannelOverride()
  {
    return $this->channelOverride;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewVideoDefaults($newVideoDefaults)
  {
    $this->newVideoDefaults = $newVideoDefaults;
  }
  public function getNewVideoDefaults()
  {
    return $this->newVideoDefaults;
  }
}

class Google_Service_YouTubePartner_Conditions extends Google_Collection
{
  protected $collection_key = 'referencePercent';
  protected $internal_gapi_mappings = array(
  );
  public $contentMatchType;
  protected $matchDurationType = 'Google_Service_YouTubePartner_IntervalCondition';
  protected $matchDurationDataType = 'array';
  protected $matchPercentType = 'Google_Service_YouTubePartner_IntervalCondition';
  protected $matchPercentDataType = 'array';
  protected $referenceDurationType = 'Google_Service_YouTubePartner_IntervalCondition';
  protected $referenceDurationDataType = 'array';
  protected $referencePercentType = 'Google_Service_YouTubePartner_IntervalCondition';
  protected $referencePercentDataType = 'array';
  protected $requiredTerritoriesType = 'Google_Service_YouTubePartner_TerritoryCondition';
  protected $requiredTerritoriesDataType = '';


  public function setContentMatchType($contentMatchType)
  {
    $this->contentMatchType = $contentMatchType;
  }
  public function getContentMatchType()
  {
    return $this->contentMatchType;
  }
  public function setMatchDuration($matchDuration)
  {
    $this->matchDuration = $matchDuration;
  }
  public function getMatchDuration()
  {
    return $this->matchDuration;
  }
  public function setMatchPercent($matchPercent)
  {
    $this->matchPercent = $matchPercent;
  }
  public function getMatchPercent()
  {
    return $this->matchPercent;
  }
  public function setReferenceDuration($referenceDuration)
  {
    $this->referenceDuration = $referenceDuration;
  }
  public function getReferenceDuration()
  {
    return $this->referenceDuration;
  }
  public function setReferencePercent($referencePercent)
  {
    $this->referencePercent = $referencePercent;
  }
  public function getReferencePercent()
  {
    return $this->referencePercent;
  }
  public function setRequiredTerritories(Google_Service_YouTubePartner_TerritoryCondition $requiredTerritories)
  {
    $this->requiredTerritories = $requiredTerritories;
  }
  public function getRequiredTerritories()
  {
    return $this->requiredTerritories;
  }
}

class Google_Service_YouTubePartner_ConflictingOwnership extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $owner;
  public $ratio;


  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  public function getOwner()
  {
    return $this->owner;
  }
  public function setRatio($ratio)
  {
    $this->ratio = $ratio;
  }
  public function getRatio()
  {
    return $this->ratio;
  }
}

class Google_Service_YouTubePartner_ContentOwner extends Google_Collection
{
  protected $collection_key = 'primaryNotificationEmails';
  protected $internal_gapi_mappings = array(
  );
  public $conflictNotificationEmail;
  public $displayName;
  public $disputeNotificationEmails;
  public $fingerprintReportNotificationEmails;
  public $id;
  public $kind;
  public $primaryNotificationEmails;


  public function setConflictNotificationEmail($conflictNotificationEmail)
  {
    $this->conflictNotificationEmail = $conflictNotificationEmail;
  }
  public function getConflictNotificationEmail()
  {
    return $this->conflictNotificationEmail;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setDisputeNotificationEmails($disputeNotificationEmails)
  {
    $this->disputeNotificationEmails = $disputeNotificationEmails;
  }
  public function getDisputeNotificationEmails()
  {
    return $this->disputeNotificationEmails;
  }
  public function setFingerprintReportNotificationEmails($fingerprintReportNotificationEmails)
  {
    $this->fingerprintReportNotificationEmails = $fingerprintReportNotificationEmails;
  }
  public function getFingerprintReportNotificationEmails()
  {
    return $this->fingerprintReportNotificationEmails;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPrimaryNotificationEmails($primaryNotificationEmails)
  {
    $this->primaryNotificationEmails = $primaryNotificationEmails;
  }
  public function getPrimaryNotificationEmails()
  {
    return $this->primaryNotificationEmails;
  }
}

class Google_Service_YouTubePartner_ContentOwnerAdvertisingOption extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $allowedOptionsType = 'Google_Service_YouTubePartner_AllowedAdvertisingOptions';
  protected $allowedOptionsDataType = '';
  protected $claimedVideoOptionsType = 'Google_Service_YouTubePartner_ClaimedVideoDefaults';
  protected $claimedVideoOptionsDataType = '';
  public $id;
  public $kind;


  public function setAllowedOptions(Google_Service_YouTubePartner_AllowedAdvertisingOptions $allowedOptions)
  {
    $this->allowedOptions = $allowedOptions;
  }
  public function getAllowedOptions()
  {
    return $this->allowedOptions;
  }
  public function setClaimedVideoOptions(Google_Service_YouTubePartner_ClaimedVideoDefaults $claimedVideoOptions)
  {
    $this->claimedVideoOptions = $claimedVideoOptions;
  }
  public function getClaimedVideoOptions()
  {
    return $this->claimedVideoOptions;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_ContentOwnerListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_ContentOwner';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_CountriesRestriction extends Google_Collection
{
  protected $collection_key = 'territories';
  protected $internal_gapi_mappings = array(
  );
  public $adFormats;
  public $territories;


  public function setAdFormats($adFormats)
  {
    $this->adFormats = $adFormats;
  }
  public function getAdFormats()
  {
    return $this->adFormats;
  }
  public function setTerritories($territories)
  {
    $this->territories = $territories;
  }
  public function getTerritories()
  {
    return $this->territories;
  }
}

class Google_Service_YouTubePartner_CuepointSettings extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $cueType;
  public $durationSecs;
  public $offsetTimeMs;
  public $walltime;


  public function setCueType($cueType)
  {
    $this->cueType = $cueType;
  }
  public function getCueType()
  {
    return $this->cueType;
  }
  public function setDurationSecs($durationSecs)
  {
    $this->durationSecs = $durationSecs;
  }
  public function getDurationSecs()
  {
    return $this->durationSecs;
  }
  public function setOffsetTimeMs($offsetTimeMs)
  {
    $this->offsetTimeMs = $offsetTimeMs;
  }
  public function getOffsetTimeMs()
  {
    return $this->offsetTimeMs;
  }
  public function setWalltime($walltime)
  {
    $this->walltime = $walltime;
  }
  public function getWalltime()
  {
    return $this->walltime;
  }
}

class Google_Service_YouTubePartner_Date extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $day;
  public $month;
  public $year;


  public function setDay($day)
  {
    $this->day = $day;
  }
  public function getDay()
  {
    return $this->day;
  }
  public function setMonth($month)
  {
    $this->month = $month;
  }
  public function getMonth()
  {
    return $this->month;
  }
  public function setYear($year)
  {
    $this->year = $year;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class Google_Service_YouTubePartner_DateRange extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endType = 'Google_Service_YouTubePartner_Date';
  protected $endDataType = '';
  public $kind;
  protected $startType = 'Google_Service_YouTubePartner_Date';
  protected $startDataType = '';


  public function setEnd(Google_Service_YouTubePartner_Date $end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStart(Google_Service_YouTubePartner_Date $start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_YouTubePartner_ExcludedInterval extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $high;
  public $low;
  public $origin;
  public $timeCreated;


  public function setHigh($high)
  {
    $this->high = $high;
  }
  public function getHigh()
  {
    return $this->high;
  }
  public function setLow($low)
  {
    $this->low = $low;
  }
  public function getLow()
  {
    return $this->low;
  }
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  public function getOrigin()
  {
    return $this->origin;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
}

class Google_Service_YouTubePartner_IntervalCondition extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $high;
  public $low;


  public function setHigh($high)
  {
    $this->high = $high;
  }
  public function getHigh()
  {
    return $this->high;
  }
  public function setLow($low)
  {
    $this->low = $low;
  }
  public function getLow()
  {
    return $this->low;
  }
}

class Google_Service_YouTubePartner_LiveCuepoint extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $broadcastId;
  public $id;
  public $kind;
  protected $settingsType = 'Google_Service_YouTubePartner_CuepointSettings';
  protected $settingsDataType = '';


  public function setBroadcastId($broadcastId)
  {
    $this->broadcastId = $broadcastId;
  }
  public function getBroadcastId()
  {
    return $this->broadcastId;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSettings(Google_Service_YouTubePartner_CuepointSettings $settings)
  {
    $this->settings = $settings;
  }
  public function getSettings()
  {
    return $this->settings;
  }
}

class Google_Service_YouTubePartner_MatchSegment extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "referenceSegment" => "reference_segment",
        "videoSegment" => "video_segment",
  );
  public $channel;
  protected $referenceSegmentType = 'Google_Service_YouTubePartner_Segment';
  protected $referenceSegmentDataType = '';
  protected $videoSegmentType = 'Google_Service_YouTubePartner_Segment';
  protected $videoSegmentDataType = '';


  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  public function getChannel()
  {
    return $this->channel;
  }
  public function setReferenceSegment(Google_Service_YouTubePartner_Segment $referenceSegment)
  {
    $this->referenceSegment = $referenceSegment;
  }
  public function getReferenceSegment()
  {
    return $this->referenceSegment;
  }
  public function setVideoSegment(Google_Service_YouTubePartner_Segment $videoSegment)
  {
    $this->videoSegment = $videoSegment;
  }
  public function getVideoSegment()
  {
    return $this->videoSegment;
  }
}

class Google_Service_YouTubePartner_Metadata extends Google_Collection
{
  protected $collection_key = 'writer';
  protected $internal_gapi_mappings = array(
  );
  public $actor;
  public $album;
  public $artist;
  public $broadcaster;
  public $category;
  public $contentType;
  protected $copyrightDateType = 'Google_Service_YouTubePartner_Date';
  protected $copyrightDateDataType = '';
  public $customId;
  public $description;
  public $director;
  public $eidr;
  public $endYear;
  public $episodeNumber;
  public $episodesAreUntitled;
  public $genre;
  public $grid;
  public $hfa;
  public $infoUrl;
  public $isan;
  public $isrc;
  public $iswc;
  public $keyword;
  public $label;
  public $notes;
  public $originalReleaseMedium;
  public $producer;
  protected $ratingsType = 'Google_Service_YouTubePartner_Rating';
  protected $ratingsDataType = 'array';
  protected $releaseDateType = 'Google_Service_YouTubePartner_Date';
  protected $releaseDateDataType = '';
  public $seasonNumber;
  public $showCustomId;
  public $showTitle;
  public $spokenLanguage;
  public $startYear;
  public $subtitledLanguage;
  public $title;
  public $tmsId;
  public $totalEpisodesExpected;
  public $upc;
  public $writer;


  public function setActor($actor)
  {
    $this->actor = $actor;
  }
  public function getActor()
  {
    return $this->actor;
  }
  public function setAlbum($album)
  {
    $this->album = $album;
  }
  public function getAlbum()
  {
    return $this->album;
  }
  public function setArtist($artist)
  {
    $this->artist = $artist;
  }
  public function getArtist()
  {
    return $this->artist;
  }
  public function setBroadcaster($broadcaster)
  {
    $this->broadcaster = $broadcaster;
  }
  public function getBroadcaster()
  {
    return $this->broadcaster;
  }
  public function setCategory($category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  public function getContentType()
  {
    return $this->contentType;
  }
  public function setCopyrightDate(Google_Service_YouTubePartner_Date $copyrightDate)
  {
    $this->copyrightDate = $copyrightDate;
  }
  public function getCopyrightDate()
  {
    return $this->copyrightDate;
  }
  public function setCustomId($customId)
  {
    $this->customId = $customId;
  }
  public function getCustomId()
  {
    return $this->customId;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDirector($director)
  {
    $this->director = $director;
  }
  public function getDirector()
  {
    return $this->director;
  }
  public function setEidr($eidr)
  {
    $this->eidr = $eidr;
  }
  public function getEidr()
  {
    return $this->eidr;
  }
  public function setEndYear($endYear)
  {
    $this->endYear = $endYear;
  }
  public function getEndYear()
  {
    return $this->endYear;
  }
  public function setEpisodeNumber($episodeNumber)
  {
    $this->episodeNumber = $episodeNumber;
  }
  public function getEpisodeNumber()
  {
    return $this->episodeNumber;
  }
  public function setEpisodesAreUntitled($episodesAreUntitled)
  {
    $this->episodesAreUntitled = $episodesAreUntitled;
  }
  public function getEpisodesAreUntitled()
  {
    return $this->episodesAreUntitled;
  }
  public function setGenre($genre)
  {
    $this->genre = $genre;
  }
  public function getGenre()
  {
    return $this->genre;
  }
  public function setGrid($grid)
  {
    $this->grid = $grid;
  }
  public function getGrid()
  {
    return $this->grid;
  }
  public function setHfa($hfa)
  {
    $this->hfa = $hfa;
  }
  public function getHfa()
  {
    return $this->hfa;
  }
  public function setInfoUrl($infoUrl)
  {
    $this->infoUrl = $infoUrl;
  }
  public function getInfoUrl()
  {
    return $this->infoUrl;
  }
  public function setIsan($isan)
  {
    $this->isan = $isan;
  }
  public function getIsan()
  {
    return $this->isan;
  }
  public function setIsrc($isrc)
  {
    $this->isrc = $isrc;
  }
  public function getIsrc()
  {
    return $this->isrc;
  }
  public function setIswc($iswc)
  {
    $this->iswc = $iswc;
  }
  public function getIswc()
  {
    return $this->iswc;
  }
  public function setKeyword($keyword)
  {
    $this->keyword = $keyword;
  }
  public function getKeyword()
  {
    return $this->keyword;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  public function getNotes()
  {
    return $this->notes;
  }
  public function setOriginalReleaseMedium($originalReleaseMedium)
  {
    $this->originalReleaseMedium = $originalReleaseMedium;
  }
  public function getOriginalReleaseMedium()
  {
    return $this->originalReleaseMedium;
  }
  public function setProducer($producer)
  {
    $this->producer = $producer;
  }
  public function getProducer()
  {
    return $this->producer;
  }
  public function setRatings($ratings)
  {
    $this->ratings = $ratings;
  }
  public function getRatings()
  {
    return $this->ratings;
  }
  public function setReleaseDate(Google_Service_YouTubePartner_Date $releaseDate)
  {
    $this->releaseDate = $releaseDate;
  }
  public function getReleaseDate()
  {
    return $this->releaseDate;
  }
  public function setSeasonNumber($seasonNumber)
  {
    $this->seasonNumber = $seasonNumber;
  }
  public function getSeasonNumber()
  {
    return $this->seasonNumber;
  }
  public function setShowCustomId($showCustomId)
  {
    $this->showCustomId = $showCustomId;
  }
  public function getShowCustomId()
  {
    return $this->showCustomId;
  }
  public function setShowTitle($showTitle)
  {
    $this->showTitle = $showTitle;
  }
  public function getShowTitle()
  {
    return $this->showTitle;
  }
  public function setSpokenLanguage($spokenLanguage)
  {
    $this->spokenLanguage = $spokenLanguage;
  }
  public function getSpokenLanguage()
  {
    return $this->spokenLanguage;
  }
  public function setStartYear($startYear)
  {
    $this->startYear = $startYear;
  }
  public function getStartYear()
  {
    return $this->startYear;
  }
  public function setSubtitledLanguage($subtitledLanguage)
  {
    $this->subtitledLanguage = $subtitledLanguage;
  }
  public function getSubtitledLanguage()
  {
    return $this->subtitledLanguage;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
  public function setTmsId($tmsId)
  {
    $this->tmsId = $tmsId;
  }
  public function getTmsId()
  {
    return $this->tmsId;
  }
  public function setTotalEpisodesExpected($totalEpisodesExpected)
  {
    $this->totalEpisodesExpected = $totalEpisodesExpected;
  }
  public function getTotalEpisodesExpected()
  {
    return $this->totalEpisodesExpected;
  }
  public function setUpc($upc)
  {
    $this->upc = $upc;
  }
  public function getUpc()
  {
    return $this->upc;
  }
  public function setWriter($writer)
  {
    $this->writer = $writer;
  }
  public function getWriter()
  {
    return $this->writer;
  }
}

class Google_Service_YouTubePartner_MetadataHistory extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $metadataType = 'Google_Service_YouTubePartner_Metadata';
  protected $metadataDataType = '';
  protected $originationType = 'Google_Service_YouTubePartner_Origination';
  protected $originationDataType = '';
  public $timeProvided;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMetadata(Google_Service_YouTubePartner_Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setOrigination(Google_Service_YouTubePartner_Origination $origination)
  {
    $this->origination = $origination;
  }
  public function getOrigination()
  {
    return $this->origination;
  }
  public function setTimeProvided($timeProvided)
  {
    $this->timeProvided = $timeProvided;
  }
  public function getTimeProvided()
  {
    return $this->timeProvided;
  }
}

class Google_Service_YouTubePartner_MetadataHistoryListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_MetadataHistory';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_Order extends Google_Collection
{
  protected $collection_key = 'events';
  protected $internal_gapi_mappings = array(
  );
  public $availGroupId;
  public $channelId;
  public $contentType;
  public $country;
  public $customId;
  protected $dvdReleaseDateType = 'Google_Service_YouTubePartner_Date';
  protected $dvdReleaseDateDataType = '';
  protected $estDatesType = 'Google_Service_YouTubePartner_DateRange';
  protected $estDatesDataType = '';
  protected $eventsType = 'Google_Service_YouTubePartner_StateCompleted';
  protected $eventsDataType = 'array';
  public $id;
  public $kind;
  public $movie;
  protected $originalReleaseDateType = 'Google_Service_YouTubePartner_Date';
  protected $originalReleaseDateDataType = '';
  public $priority;
  public $productionHouse;
  public $purchaseOrder;
  protected $requirementsType = 'Google_Service_YouTubePartner_Requirements';
  protected $requirementsDataType = '';
  protected $showType = 'Google_Service_YouTubePartner_ShowDetails';
  protected $showDataType = '';
  public $status;
  public $videoId;
  protected $vodDatesType = 'Google_Service_YouTubePartner_DateRange';
  protected $vodDatesDataType = '';


  public function setAvailGroupId($availGroupId)
  {
    $this->availGroupId = $availGroupId;
  }
  public function getAvailGroupId()
  {
    return $this->availGroupId;
  }
  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }
  public function getChannelId()
  {
    return $this->channelId;
  }
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  public function getContentType()
  {
    return $this->contentType;
  }
  public function setCountry($country)
  {
    $this->country = $country;
  }
  public function getCountry()
  {
    return $this->country;
  }
  public function setCustomId($customId)
  {
    $this->customId = $customId;
  }
  public function getCustomId()
  {
    return $this->customId;
  }
  public function setDvdReleaseDate(Google_Service_YouTubePartner_Date $dvdReleaseDate)
  {
    $this->dvdReleaseDate = $dvdReleaseDate;
  }
  public function getDvdReleaseDate()
  {
    return $this->dvdReleaseDate;
  }
  public function setEstDates(Google_Service_YouTubePartner_DateRange $estDates)
  {
    $this->estDates = $estDates;
  }
  public function getEstDates()
  {
    return $this->estDates;
  }
  public function setEvents($events)
  {
    $this->events = $events;
  }
  public function getEvents()
  {
    return $this->events;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMovie($movie)
  {
    $this->movie = $movie;
  }
  public function getMovie()
  {
    return $this->movie;
  }
  public function setOriginalReleaseDate(Google_Service_YouTubePartner_Date $originalReleaseDate)
  {
    $this->originalReleaseDate = $originalReleaseDate;
  }
  public function getOriginalReleaseDate()
  {
    return $this->originalReleaseDate;
  }
  public function setPriority($priority)
  {
    $this->priority = $priority;
  }
  public function getPriority()
  {
    return $this->priority;
  }
  public function setProductionHouse($productionHouse)
  {
    $this->productionHouse = $productionHouse;
  }
  public function getProductionHouse()
  {
    return $this->productionHouse;
  }
  public function setPurchaseOrder($purchaseOrder)
  {
    $this->purchaseOrder = $purchaseOrder;
  }
  public function getPurchaseOrder()
  {
    return $this->purchaseOrder;
  }
  public function setRequirements(Google_Service_YouTubePartner_Requirements $requirements)
  {
    $this->requirements = $requirements;
  }
  public function getRequirements()
  {
    return $this->requirements;
  }
  public function setShow(Google_Service_YouTubePartner_ShowDetails $show)
  {
    $this->show = $show;
  }
  public function getShow()
  {
    return $this->show;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  public function getVideoId()
  {
    return $this->videoId;
  }
  public function setVodDates(Google_Service_YouTubePartner_DateRange $vodDates)
  {
    $this->vodDates = $vodDates;
  }
  public function getVodDates()
  {
    return $this->vodDates;
  }
}

class Google_Service_YouTubePartner_OrderListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Order';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';
  public $previousPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }
  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}

class Google_Service_YouTubePartner_Origination extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $owner;
  public $source;


  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  public function getOwner()
  {
    return $this->owner;
  }
  public function setSource($source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Google_Service_YouTubePartner_OwnershipConflicts extends Google_Collection
{
  protected $collection_key = 'synchronization';
  protected $internal_gapi_mappings = array(
  );
  protected $generalType = 'Google_Service_YouTubePartner_TerritoryConflicts';
  protected $generalDataType = 'array';
  public $kind;
  protected $mechanicalType = 'Google_Service_YouTubePartner_TerritoryConflicts';
  protected $mechanicalDataType = 'array';
  protected $performanceType = 'Google_Service_YouTubePartner_TerritoryConflicts';
  protected $performanceDataType = 'array';
  protected $synchronizationType = 'Google_Service_YouTubePartner_TerritoryConflicts';
  protected $synchronizationDataType = 'array';


  public function setGeneral($general)
  {
    $this->general = $general;
  }
  public function getGeneral()
  {
    return $this->general;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMechanical($mechanical)
  {
    $this->mechanical = $mechanical;
  }
  public function getMechanical()
  {
    return $this->mechanical;
  }
  public function setPerformance($performance)
  {
    $this->performance = $performance;
  }
  public function getPerformance()
  {
    return $this->performance;
  }
  public function setSynchronization($synchronization)
  {
    $this->synchronization = $synchronization;
  }
  public function getSynchronization()
  {
    return $this->synchronization;
  }
}

class Google_Service_YouTubePartner_OwnershipHistoryListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_RightsOwnershipHistory';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_Package extends Google_Collection
{
  protected $collection_key = 'customIds';
  protected $internal_gapi_mappings = array(
  );
  public $content;
  public $customIds;
  public $id;
  public $kind;
  public $locale;
  public $name;
  public $status;
  public $timeCreated;
  public $type;
  public $uploaderName;


  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
  public function setCustomIds($customIds)
  {
    $this->customIds = $customIds;
  }
  public function getCustomIds()
  {
    return $this->customIds;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setUploaderName($uploaderName)
  {
    $this->uploaderName = $uploaderName;
  }
  public function getUploaderName()
  {
    return $this->uploaderName;
  }
}

class Google_Service_YouTubePartner_PackageInsertResponse extends Google_Collection
{
  protected $collection_key = 'errors';
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_YouTubePartner_ValidateError';
  protected $errorsDataType = 'array';
  public $kind;
  protected $resourceType = 'Google_Service_YouTubePartner_Package';
  protected $resourceDataType = '';
  public $status;


  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setResource(Google_Service_YouTubePartner_Package $resource)
  {
    $this->resource = $resource;
  }
  public function getResource()
  {
    return $this->resource;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_YouTubePartner_PageInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $resultsPerPage;
  public $startIndex;
  public $totalResults;


  public function setResultsPerPage($resultsPerPage)
  {
    $this->resultsPerPage = $resultsPerPage;
  }
  public function getResultsPerPage()
  {
    return $this->resultsPerPage;
  }
  public function setStartIndex($startIndex)
  {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex()
  {
    return $this->startIndex;
  }
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults()
  {
    return $this->totalResults;
  }
}

class Google_Service_YouTubePartner_Policy extends Google_Collection
{
  protected $collection_key = 'rules';
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $rulesType = 'Google_Service_YouTubePartner_PolicyRule';
  protected $rulesDataType = 'array';
  public $timeUpdated;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  public function getRules()
  {
    return $this->rules;
  }
  public function setTimeUpdated($timeUpdated)
  {
    $this->timeUpdated = $timeUpdated;
  }
  public function getTimeUpdated()
  {
    return $this->timeUpdated;
  }
}

class Google_Service_YouTubePartner_PolicyList extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Policy';
  protected $itemsDataType = 'array';
  public $kind;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_PolicyRule extends Google_Collection
{
  protected $collection_key = 'subaction';
  protected $internal_gapi_mappings = array(
  );
  public $action;
  protected $conditionsType = 'Google_Service_YouTubePartner_Conditions';
  protected $conditionsDataType = '';
  public $subaction;


  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setConditions(Google_Service_YouTubePartner_Conditions $conditions)
  {
    $this->conditions = $conditions;
  }
  public function getConditions()
  {
    return $this->conditions;
  }
  public function setSubaction($subaction)
  {
    $this->subaction = $subaction;
  }
  public function getSubaction()
  {
    return $this->subaction;
  }
}

class Google_Service_YouTubePartner_PromotedContent extends Google_Collection
{
  protected $collection_key = 'link';
  protected $internal_gapi_mappings = array(
  );
  protected $linkType = 'Google_Service_YouTubePartner_CampaignTargetLink';
  protected $linkDataType = 'array';


  public function setLink($link)
  {
    $this->link = $link;
  }
  public function getLink()
  {
    return $this->link;
  }
}

class Google_Service_YouTubePartner_Publisher extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $caeNumber;
  public $id;
  public $ipiNumber;
  public $kind;
  public $name;


  public function setCaeNumber($caeNumber)
  {
    $this->caeNumber = $caeNumber;
  }
  public function getCaeNumber()
  {
    return $this->caeNumber;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIpiNumber($ipiNumber)
  {
    $this->ipiNumber = $ipiNumber;
  }
  public function getIpiNumber()
  {
    return $this->ipiNumber;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_YouTubePartner_PublisherList extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Publisher';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}

class Google_Service_YouTubePartner_Rating extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $rating;
  public $ratingSystem;


  public function setRating($rating)
  {
    $this->rating = $rating;
  }
  public function getRating()
  {
    return $this->rating;
  }
  public function setRatingSystem($ratingSystem)
  {
    $this->ratingSystem = $ratingSystem;
  }
  public function getRatingSystem()
  {
    return $this->ratingSystem;
  }
}

class Google_Service_YouTubePartner_Reference extends Google_Collection
{
  protected $collection_key = 'excludedIntervals';
  protected $internal_gapi_mappings = array(
  );
  public $assetId;
  public $audioswapEnabled;
  public $claimId;
  public $contentType;
  public $duplicateLeader;
  protected $excludedIntervalsType = 'Google_Service_YouTubePartner_ExcludedInterval';
  protected $excludedIntervalsDataType = 'array';
  public $fpDirect;
  public $hashCode;
  public $id;
  public $ignoreFpMatch;
  public $kind;
  public $length;
  protected $originationType = 'Google_Service_YouTubePartner_Origination';
  protected $originationDataType = '';
  public $status;
  public $statusReason;
  public $urgent;
  public $videoId;


  public function setAssetId($assetId)
  {
    $this->assetId = $assetId;
  }
  public function getAssetId()
  {
    return $this->assetId;
  }
  public function setAudioswapEnabled($audioswapEnabled)
  {
    $this->audioswapEnabled = $audioswapEnabled;
  }
  public function getAudioswapEnabled()
  {
    return $this->audioswapEnabled;
  }
  public function setClaimId($claimId)
  {
    $this->claimId = $claimId;
  }
  public function getClaimId()
  {
    return $this->claimId;
  }
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  public function getContentType()
  {
    return $this->contentType;
  }
  public function setDuplicateLeader($duplicateLeader)
  {
    $this->duplicateLeader = $duplicateLeader;
  }
  public function getDuplicateLeader()
  {
    return $this->duplicateLeader;
  }
  public function setExcludedIntervals($excludedIntervals)
  {
    $this->excludedIntervals = $excludedIntervals;
  }
  public function getExcludedIntervals()
  {
    return $this->excludedIntervals;
  }
  public function setFpDirect($fpDirect)
  {
    $this->fpDirect = $fpDirect;
  }
  public function getFpDirect()
  {
    return $this->fpDirect;
  }
  public function setHashCode($hashCode)
  {
    $this->hashCode = $hashCode;
  }
  public function getHashCode()
  {
    return $this->hashCode;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setIgnoreFpMatch($ignoreFpMatch)
  {
    $this->ignoreFpMatch = $ignoreFpMatch;
  }
  public function getIgnoreFpMatch()
  {
    return $this->ignoreFpMatch;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLength($length)
  {
    $this->length = $length;
  }
  public function getLength()
  {
    return $this->length;
  }
  public function setOrigination(Google_Service_YouTubePartner_Origination $origination)
  {
    $this->origination = $origination;
  }
  public function getOrigination()
  {
    return $this->origination;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setStatusReason($statusReason)
  {
    $this->statusReason = $statusReason;
  }
  public function getStatusReason()
  {
    return $this->statusReason;
  }
  public function setUrgent($urgent)
  {
    $this->urgent = $urgent;
  }
  public function getUrgent()
  {
    return $this->urgent;
  }
  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }
  public function getVideoId()
  {
    return $this->videoId;
  }
}

class Google_Service_YouTubePartner_ReferenceConflict extends Google_Collection
{
  protected $collection_key = 'matches';
  protected $internal_gapi_mappings = array(
  );
  public $conflictingReferenceId;
  public $expiryTime;
  public $id;
  public $kind;
  protected $matchesType = 'Google_Service_YouTubePartner_ReferenceConflictMatch';
  protected $matchesDataType = 'array';
  public $originalReferenceId;
  public $status;


  public function setConflictingReferenceId($conflictingReferenceId)
  {
    $this->conflictingReferenceId = $conflictingReferenceId;
  }
  public function getConflictingReferenceId()
  {
    return $this->conflictingReferenceId;
  }
  public function setExpiryTime($expiryTime)
  {
    $this->expiryTime = $expiryTime;
  }
  public function getExpiryTime()
  {
    return $this->expiryTime;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMatches($matches)
  {
    $this->matches = $matches;
  }
  public function getMatches()
  {
    return $this->matches;
  }
  public function setOriginalReferenceId($originalReferenceId)
  {
    $this->originalReferenceId = $originalReferenceId;
  }
  public function getOriginalReferenceId()
  {
    return $this->originalReferenceId;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_YouTubePartner_ReferenceConflictListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_ReferenceConflict';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}

class Google_Service_YouTubePartner_ReferenceConflictMatch extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "conflictingReferenceOffsetMs" => "conflicting_reference_offset_ms",
        "lengthMs" => "length_ms",
        "originalReferenceOffsetMs" => "original_reference_offset_ms",
  );
  public $conflictingReferenceOffsetMs;
  public $lengthMs;
  public $originalReferenceOffsetMs;
  public $type;


  public function setConflictingReferenceOffsetMs($conflictingReferenceOffsetMs)
  {
    $this->conflictingReferenceOffsetMs = $conflictingReferenceOffsetMs;
  }
  public function getConflictingReferenceOffsetMs()
  {
    return $this->conflictingReferenceOffsetMs;
  }
  public function setLengthMs($lengthMs)
  {
    $this->lengthMs = $lengthMs;
  }
  public function getLengthMs()
  {
    return $this->lengthMs;
  }
  public function setOriginalReferenceOffsetMs($originalReferenceOffsetMs)
  {
    $this->originalReferenceOffsetMs = $originalReferenceOffsetMs;
  }
  public function getOriginalReferenceOffsetMs()
  {
    return $this->originalReferenceOffsetMs;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_YouTubePartner_ReferenceListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Reference';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}

class Google_Service_YouTubePartner_Requirements extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $caption;
  public $hdTranscode;
  public $posterArt;
  public $spotlightArt;
  public $spotlightReview;
  public $trailer;


  public function setCaption($caption)
  {
    $this->caption = $caption;
  }
  public function getCaption()
  {
    return $this->caption;
  }
  public function setHdTranscode($hdTranscode)
  {
    $this->hdTranscode = $hdTranscode;
  }
  public function getHdTranscode()
  {
    return $this->hdTranscode;
  }
  public function setPosterArt($posterArt)
  {
    $this->posterArt = $posterArt;
  }
  public function getPosterArt()
  {
    return $this->posterArt;
  }
  public function setSpotlightArt($spotlightArt)
  {
    $this->spotlightArt = $spotlightArt;
  }
  public function getSpotlightArt()
  {
    return $this->spotlightArt;
  }
  public function setSpotlightReview($spotlightReview)
  {
    $this->spotlightReview = $spotlightReview;
  }
  public function getSpotlightReview()
  {
    return $this->spotlightReview;
  }
  public function setTrailer($trailer)
  {
    $this->trailer = $trailer;
  }
  public function getTrailer()
  {
    return $this->trailer;
  }
}

class Google_Service_YouTubePartner_RightsOwnership extends Google_Collection
{
  protected $collection_key = 'synchronization';
  protected $internal_gapi_mappings = array(
  );
  protected $generalType = 'Google_Service_YouTubePartner_TerritoryOwners';
  protected $generalDataType = 'array';
  public $kind;
  protected $mechanicalType = 'Google_Service_YouTubePartner_TerritoryOwners';
  protected $mechanicalDataType = 'array';
  protected $performanceType = 'Google_Service_YouTubePartner_TerritoryOwners';
  protected $performanceDataType = 'array';
  protected $synchronizationType = 'Google_Service_YouTubePartner_TerritoryOwners';
  protected $synchronizationDataType = 'array';


  public function setGeneral($general)
  {
    $this->general = $general;
  }
  public function getGeneral()
  {
    return $this->general;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMechanical($mechanical)
  {
    $this->mechanical = $mechanical;
  }
  public function getMechanical()
  {
    return $this->mechanical;
  }
  public function setPerformance($performance)
  {
    $this->performance = $performance;
  }
  public function getPerformance()
  {
    return $this->performance;
  }
  public function setSynchronization($synchronization)
  {
    $this->synchronization = $synchronization;
  }
  public function getSynchronization()
  {
    return $this->synchronization;
  }
}

class Google_Service_YouTubePartner_RightsOwnershipHistory extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $originationType = 'Google_Service_YouTubePartner_Origination';
  protected $originationDataType = '';
  protected $ownershipType = 'Google_Service_YouTubePartner_RightsOwnership';
  protected $ownershipDataType = '';
  public $timeProvided;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setOrigination(Google_Service_YouTubePartner_Origination $origination)
  {
    $this->origination = $origination;
  }
  public function getOrigination()
  {
    return $this->origination;
  }
  public function setOwnership(Google_Service_YouTubePartner_RightsOwnership $ownership)
  {
    $this->ownership = $ownership;
  }
  public function getOwnership()
  {
    return $this->ownership;
  }
  public function setTimeProvided($timeProvided)
  {
    $this->timeProvided = $timeProvided;
  }
  public function getTimeProvided()
  {
    return $this->timeProvided;
  }
}

class Google_Service_YouTubePartner_Segment extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $duration;
  public $kind;
  public $start;


  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  public function getDuration()
  {
    return $this->duration;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Google_Service_YouTubePartner_ShowDetails extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $episodeNumber;
  public $episodeTitle;
  public $seasonNumber;
  public $title;


  public function setEpisodeNumber($episodeNumber)
  {
    $this->episodeNumber = $episodeNumber;
  }
  public function getEpisodeNumber()
  {
    return $this->episodeNumber;
  }
  public function setEpisodeTitle($episodeTitle)
  {
    $this->episodeTitle = $episodeTitle;
  }
  public function getEpisodeTitle()
  {
    return $this->episodeTitle;
  }
  public function setSeasonNumber($seasonNumber)
  {
    $this->seasonNumber = $seasonNumber;
  }
  public function getSeasonNumber()
  {
    return $this->seasonNumber;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_YouTubePartner_StateCompleted extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $state;
  public $timeCompleted;


  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setTimeCompleted($timeCompleted)
  {
    $this->timeCompleted = $timeCompleted;
  }
  public function getTimeCompleted()
  {
    return $this->timeCompleted;
  }
}

class Google_Service_YouTubePartner_TerritoryCondition extends Google_Collection
{
  protected $collection_key = 'territories';
  protected $internal_gapi_mappings = array(
  );
  public $territories;
  public $type;


  public function setTerritories($territories)
  {
    $this->territories = $territories;
  }
  public function getTerritories()
  {
    return $this->territories;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_YouTubePartner_TerritoryConflicts extends Google_Collection
{
  protected $collection_key = 'conflictingOwnership';
  protected $internal_gapi_mappings = array(
  );
  protected $conflictingOwnershipType = 'Google_Service_YouTubePartner_ConflictingOwnership';
  protected $conflictingOwnershipDataType = 'array';
  public $territory;


  public function setConflictingOwnership($conflictingOwnership)
  {
    $this->conflictingOwnership = $conflictingOwnership;
  }
  public function getConflictingOwnership()
  {
    return $this->conflictingOwnership;
  }
  public function setTerritory($territory)
  {
    $this->territory = $territory;
  }
  public function getTerritory()
  {
    return $this->territory;
  }
}

class Google_Service_YouTubePartner_TerritoryOwners extends Google_Collection
{
  protected $collection_key = 'territories';
  protected $internal_gapi_mappings = array(
  );
  public $owner;
  public $publisher;
  public $ratio;
  public $territories;
  public $type;


  public function setOwner($owner)
  {
    $this->owner = $owner;
  }
  public function getOwner()
  {
    return $this->owner;
  }
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;
  }
  public function getPublisher()
  {
    return $this->publisher;
  }
  public function setRatio($ratio)
  {
    $this->ratio = $ratio;
  }
  public function getRatio()
  {
    return $this->ratio;
  }
  public function setTerritories($territories)
  {
    $this->territories = $territories;
  }
  public function getTerritories()
  {
    return $this->territories;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_YouTubePartner_ValidateAsyncRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $content;
  public $kind;
  public $uploaderName;


  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUploaderName($uploaderName)
  {
    $this->uploaderName = $uploaderName;
  }
  public function getUploaderName()
  {
    return $this->uploaderName;
  }
}

class Google_Service_YouTubePartner_ValidateAsyncResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $status;
  public $validationId;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setValidationId($validationId)
  {
    $this->validationId = $validationId;
  }
  public function getValidationId()
  {
    return $this->validationId;
  }
}

class Google_Service_YouTubePartner_ValidateError extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $columnName;
  public $columnNumber;
  public $lineNumber;
  public $message;
  public $messageCode;
  public $severity;


  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }
  public function getColumnName()
  {
    return $this->columnName;
  }
  public function setColumnNumber($columnNumber)
  {
    $this->columnNumber = $columnNumber;
  }
  public function getColumnNumber()
  {
    return $this->columnNumber;
  }
  public function setLineNumber($lineNumber)
  {
    $this->lineNumber = $lineNumber;
  }
  public function getLineNumber()
  {
    return $this->lineNumber;
  }
  public function setMessage($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
  public function setMessageCode($messageCode)
  {
    $this->messageCode = $messageCode;
  }
  public function getMessageCode()
  {
    return $this->messageCode;
  }
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  public function getSeverity()
  {
    return $this->severity;
  }
}

class Google_Service_YouTubePartner_ValidateRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $content;
  public $kind;
  public $locale;
  public $uploaderName;


  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setUploaderName($uploaderName)
  {
    $this->uploaderName = $uploaderName;
  }
  public function getUploaderName()
  {
    return $this->uploaderName;
  }
}

class Google_Service_YouTubePartner_ValidateResponse extends Google_Collection
{
  protected $collection_key = 'errors';
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_YouTubePartner_ValidateError';
  protected $errorsDataType = 'array';
  public $kind;
  public $status;


  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_YouTubePartner_ValidateStatusRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $locale;
  public $validationId;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  public function getLocale()
  {
    return $this->locale;
  }
  public function setValidationId($validationId)
  {
    $this->validationId = $validationId;
  }
  public function getValidationId()
  {
    return $this->validationId;
  }
}

class Google_Service_YouTubePartner_ValidateStatusResponse extends Google_Collection
{
  protected $collection_key = 'errors';
  protected $internal_gapi_mappings = array(
  );
  protected $errorsType = 'Google_Service_YouTubePartner_ValidateError';
  protected $errorsDataType = 'array';
  public $isMetadataOnly;
  public $kind;
  public $status;


  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setIsMetadataOnly($isMetadataOnly)
  {
    $this->isMetadataOnly = $isMetadataOnly;
  }
  public function getIsMetadataOnly()
  {
    return $this->isMetadataOnly;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_YouTubePartner_VideoAdvertisingOption extends Google_Collection
{
  protected $collection_key = 'breakPosition';
  protected $internal_gapi_mappings = array(
  );
  protected $adBreaksType = 'Google_Service_YouTubePartner_AdBreak';
  protected $adBreaksDataType = 'array';
  public $adFormats;
  public $autoGeneratedBreaks;
  public $breakPosition;
  public $id;
  public $kind;
  public $tpAdServerVideoId;
  public $tpTargetingUrl;
  public $tpUrlParameters;


  public function setAdBreaks($adBreaks)
  {
    $this->adBreaks = $adBreaks;
  }
  public function getAdBreaks()
  {
    return $this->adBreaks;
  }
  public function setAdFormats($adFormats)
  {
    $this->adFormats = $adFormats;
  }
  public function getAdFormats()
  {
    return $this->adFormats;
  }
  public function setAutoGeneratedBreaks($autoGeneratedBreaks)
  {
    $this->autoGeneratedBreaks = $autoGeneratedBreaks;
  }
  public function getAutoGeneratedBreaks()
  {
    return $this->autoGeneratedBreaks;
  }
  public function setBreakPosition($breakPosition)
  {
    $this->breakPosition = $breakPosition;
  }
  public function getBreakPosition()
  {
    return $this->breakPosition;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTpAdServerVideoId($tpAdServerVideoId)
  {
    $this->tpAdServerVideoId = $tpAdServerVideoId;
  }
  public function getTpAdServerVideoId()
  {
    return $this->tpAdServerVideoId;
  }
  public function setTpTargetingUrl($tpTargetingUrl)
  {
    $this->tpTargetingUrl = $tpTargetingUrl;
  }
  public function getTpTargetingUrl()
  {
    return $this->tpTargetingUrl;
  }
  public function setTpUrlParameters($tpUrlParameters)
  {
    $this->tpUrlParameters = $tpUrlParameters;
  }
  public function getTpUrlParameters()
  {
    return $this->tpUrlParameters;
  }
}

class Google_Service_YouTubePartner_VideoAdvertisingOptionGetEnabledAdsResponse extends Google_Collection
{
  protected $collection_key = 'countriesRestriction';
  protected $internal_gapi_mappings = array(
  );
  protected $adBreaksType = 'Google_Service_YouTubePartner_AdBreak';
  protected $adBreaksDataType = 'array';
  public $adsOnEmbeds;
  protected $countriesRestrictionType = 'Google_Service_YouTubePartner_CountriesRestriction';
  protected $countriesRestrictionDataType = 'array';
  public $id;
  public $kind;


  public function setAdBreaks($adBreaks)
  {
    $this->adBreaks = $adBreaks;
  }
  public function getAdBreaks()
  {
    return $this->adBreaks;
  }
  public function setAdsOnEmbeds($adsOnEmbeds)
  {
    $this->adsOnEmbeds = $adsOnEmbeds;
  }
  public function getAdsOnEmbeds()
  {
    return $this->adsOnEmbeds;
  }
  public function setCountriesRestriction($countriesRestriction)
  {
    $this->countriesRestriction = $countriesRestriction;
  }
  public function getCountriesRestriction()
  {
    return $this->countriesRestriction;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_YouTubePartner_Whitelist extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $kind;
  public $title;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_YouTubePartner_WhitelistListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Whitelist';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $pageInfoType = 'Google_Service_YouTubePartner_PageInfo';
  protected $pageInfoDataType = '';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setPageInfo(Google_Service_YouTubePartner_PageInfo $pageInfo)
  {
    $this->pageInfo = $pageInfo;
  }
  public function getPageInfo()
  {
    return $this->pageInfo;
  }
}
