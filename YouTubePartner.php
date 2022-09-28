<?php
/*
 * Copyright 2014 Google Inc.
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
 * The YouTube Content ID API allows the management of YouTube assets along with
 * their associated content, references, ownership, rights and policies.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://devsite.googleplex.com/youtube/partner/docs/v1/" target="_blank">Documentation</a>
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
  public $contentOwners;
  public $liveCuepoints;
  public $metadataHistory;
  public $ownership;
  public $ownershipHistory;
  public $package;
  public $policies;
  public $referenceConflicts;
  public $references;
  public $spreadsheetTemplate;
  public $uploader;
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
    $this->servicePath = '';
    $this->batchPath = 'batch/youtubePartner/v1';
    $this->version = 'v1';
    $this->serviceName = 'youtubePartner';

    $this->assetLabels = new Google_Service_YouTubePartner_AssetLabels_Resource(
        $this,
        $this->serviceName,
        'assetLabels',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'youtube/partner/v1/assetLabels',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/assetLabels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'labelPrefix' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
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
              'path' => 'youtube/partner/v1/assets/{assetId}/matchPolicy',
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
              'path' => 'youtube/partner/v1/assets/{assetId}/matchPolicy',
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
              'path' => 'youtube/partner/v1/assets/{assetId}/matchPolicy',
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
              'path' => 'youtube/partner/v1/assetRelationships/{assetRelationshipId}',
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
              'path' => 'youtube/partner/v1/assetRelationships',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/assetRelationships',
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
                'pageToken' => array(
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
              'path' => 'youtube/partner/v1/assetSearch',
              'httpMethod' => 'GET',
              'parameters' => array(
                'createdAfter' => array(
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
                'includeAnyProvidedlabel' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'isrcs' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'labels' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'metadataSearchFields' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ownershipRestriction' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
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
              'path' => 'youtube/partner/v1/assetShares',
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
                'pageToken' => array(
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
              'path' => 'youtube/partner/v1/assets/{assetId}',
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
                'fetchMetadata' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnership' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnershipConflicts' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'youtube/partner/v1/assets',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/assets',
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
                'fetchMetadata' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnership' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fetchOwnershipConflicts' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'youtube/partner/v1/assets/{assetId}',
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
              'path' => 'youtube/partner/v1/assets/{assetId}',
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
              'path' => 'youtube/partner/v1/campaigns/{campaignId}',
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
              'path' => 'youtube/partner/v1/campaigns/{campaignId}',
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
              'path' => 'youtube/partner/v1/campaigns',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/campaigns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'youtube/partner/v1/campaigns/{campaignId}',
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
              'path' => 'youtube/partner/v1/campaigns/{campaignId}',
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
              'path' => 'youtube/partner/v1/claimHistory/{claimId}',
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
              'path' => 'youtube/partner/v1/claimSearch',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'contentType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'inactiveReasons' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeThirdPartyClaims' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'origin' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'partnerUploaded' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'referenceId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'status' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'statusModifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'statusModifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'videoId' => array(
                  'location' => 'query',
                  'type' => 'string',
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
              'path' => 'youtube/partner/v1/claims/{claimId}',
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
              'path' => 'youtube/partner/v1/claims',
              'httpMethod' => 'POST',
              'parameters' => array(
                'isManualClaim' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/claims',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'videoId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'youtube/partner/v1/claims/{claimId}',
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
              'path' => 'youtube/partner/v1/claims/{claimId}',
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
    $this->contentOwners = new Google_Service_YouTubePartner_ContentOwners_Resource(
        $this,
        $this->serviceName,
        'contentOwners',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'youtube/partner/v1/contentOwners/{contentOwnerId}',
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
              'path' => 'youtube/partner/v1/contentOwners',
              'httpMethod' => 'GET',
              'parameters' => array(
                'fetchMine' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'id' => array(
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
    $this->liveCuepoints = new Google_Service_YouTubePartner_LiveCuepoints_Resource(
        $this,
        $this->serviceName,
        'liveCuepoints',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'youtube/partner/v1/liveCuepoints',
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
              'path' => 'youtube/partner/v1/metadataHistory',
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
    $this->ownership = new Google_Service_YouTubePartner_Ownership_Resource(
        $this,
        $this->serviceName,
        'ownership',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'youtube/partner/v1/assets/{assetId}/ownership',
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
              'path' => 'youtube/partner/v1/assets/{assetId}/ownership',
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
              'path' => 'youtube/partner/v1/assets/{assetId}/ownership',
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
              'path' => 'youtube/partner/v1/ownershipHistory',
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
              'path' => 'youtube/partner/v1/package/{packageId}',
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
              'path' => 'youtube/partner/v1/package',
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
              'path' => 'youtube/partner/v1/policies/{policyId}',
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
              'path' => 'youtube/partner/v1/policies',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/policies',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
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
              ),
            ),'patch' => array(
              'path' => 'youtube/partner/v1/policies/{policyId}',
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
              'path' => 'youtube/partner/v1/policies/{policyId}',
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
    $this->referenceConflicts = new Google_Service_YouTubePartner_ReferenceConflicts_Resource(
        $this,
        $this->serviceName,
        'referenceConflicts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'youtube/partner/v1/referenceConflicts/{referenceConflictId}',
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
              'path' => 'youtube/partner/v1/referenceConflicts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
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
              'path' => 'youtube/partner/v1/references/{referenceId}',
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
              'path' => 'youtube/partner/v1/references',
              'httpMethod' => 'POST',
              'parameters' => array(
                'claimId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/references',
              'httpMethod' => 'GET',
              'parameters' => array(
                'assetId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'youtube/partner/v1/references/{referenceId}',
              'httpMethod' => 'PATCH',
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
                'releaseClaims' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'youtube/partner/v1/references/{referenceId}',
              'httpMethod' => 'PUT',
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
                'releaseClaims' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->spreadsheetTemplate = new Google_Service_YouTubePartner_SpreadsheetTemplate_Resource(
        $this,
        $this->serviceName,
        'spreadsheetTemplate',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'youtube/partner/v1/spreadsheetTemplate',
              'httpMethod' => 'GET',
              'parameters' => array(
                'locale' => array(
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
    $this->uploader = new Google_Service_YouTubePartner_Uploader_Resource(
        $this,
        $this->serviceName,
        'uploader',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'youtube/partner/v1/uploader',
              'httpMethod' => 'GET',
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
    $this->validator = new Google_Service_YouTubePartner_Validator_Resource(
        $this,
        $this->serviceName,
        'validator',
        array(
          'methods' => array(
            'validate' => array(
              'path' => 'youtube/partner/v1/validator',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'validateAsync' => array(
              'path' => 'youtube/partner/v1/validatorAsync',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'validateAsyncStatus' => array(
              'path' => 'youtube/partner/v1/validatorAsyncStatus',
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
              'path' => 'youtube/partner/v1/videoAdvertisingOptions/{videoId}',
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
              'path' => 'youtube/partner/v1/videoAdvertisingOptions/{videoId}/getEnabledAds',
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
              'path' => 'youtube/partner/v1/videoAdvertisingOptions/{videoId}',
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
              'path' => 'youtube/partner/v1/videoAdvertisingOptions/{videoId}',
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
              'path' => 'youtube/partner/v1/whitelists/{id}',
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
              'path' => 'youtube/partner/v1/whitelists/{id}',
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
              'path' => 'youtube/partner/v1/whitelists',
              'httpMethod' => 'POST',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'youtube/partner/v1/whitelists',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string labelPrefix The *labelPrefix* parameter identifies the
   * prefix of asset labels to retrieve.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string q The *q* parameter specifies the query string to use to
   * filter search results. YouTube searches for the query string in the
   * *labelName* field of asset labels.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving the match policy.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_AssetMatchPolicy
   */
  public function get($assetId, $optParams = array())
  {
    $params = array('assetId' => $assetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_YouTubePartner_AssetMatchPolicy");
  }

  /**
   * Patches the asset's match policy. If an asset has multiple owners, each owner
   * may set its own match policy for the asset. YouTube then computes the match
   * policy that is actually applied for the asset based on the territories where
   * each owner owns the asset. (assetMatchPolicy.patch)
   *
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving the match policy.
   * @param Google_AssetMatchPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving the match policy.
   * @param Google_AssetMatchPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetRelationshipId The *assetRelationshipId* parameter
   * specifies a value that uniquely identifies the relationship you are deleting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_YoutubePartnerEmpty
   */
  public function delete($assetRelationshipId, $optParams = array())
  {
    $params = array('assetRelationshipId' => $assetRelationshipId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_YouTubePartner_YoutubePartnerEmpty");
  }

  /**
   * Creates a relationship that links two assets. (assetRelationships.insert)
   *
   * @param Google_AssetRelationship $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetId The *assetId* parameter specifies the asset ID of the
   * asset for which you are retrieving relationships.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
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
   * @opt_param string createdAfter The *createdAfter* parameter restricts the set
   * of returned assets to ones originally created on or after the specified
   * datetime. For example: 2015-01-29T23:00:00Z
   * @opt_param string createdBefore The *createdBefore* parameter restricts the
   * set of returned assets to ones originally created on or before the specified
   * datetime. For example: 2015-01-29T23:00:00Z
   * @opt_param bool hasConflicts The *hasConflicts* parameter enables you to only
   * retrieve assets that have ownership conflicts. The only valid value is true.
   * Setting the parameter value to false does not affect the results.
   * @opt_param bool includeAnyProvidedlabel If *includeAnyProvidedlabel*
   * parameter is set to true, will search for assets that contain any of the
   * provided labels; else will search for assets that contain all the provided
   * labels.
   * @opt_param string isrcs A comma-separated list of up to 50 ISRCs. If you
   * specify a value for this parameter, the API server ignores any values set for
   * the following parameters: q, includeAnyProvidedLabel, hasConflicts, labels,
   * metadataSearchFields, sort, and type.
   * @opt_param string labels The *labels* parameter specifies the assets with
   * certain asset labels that you want to retrieve. The parameter value is a
   * comma-separated list of asset labels.
   * @opt_param string metadataSearchFields The *metadataSearchField* parameter
   * specifies which metadata fields to search by. It is a comma-separated list of
   * metadata field and value pairs connected by colon(:). For example:
   * customId:my_custom_id,artist:Dandexx
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string ownershipRestriction The *ownershipRestriction* parameter
   * specifies the ownership filtering option for the search. By default the
   * search is performed in the assets owned by currently authenticated user only.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @opt_param string q YouTube searches within the *id*, *type*, and *customId*
   * fields for all assets as well as in numerous other metadata fields – such as
   * *actor*, *album*, *director*, *isrc*, and *tmsId* – that vary for different
   * types of assets (movies, music videos, etc.).
   * @opt_param string sort The *sort* parameter specifies how the search results
   * should be sorted. Note that results are always sorted in descending order.
   * @opt_param string type The *type* parameter specifies the types of assets
   * that you want to retrieve. The parameter value is a comma-separated list of
   * asset types.
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
   * map to a specified asset view ID *or* it retrieves a list of asset views
   * associated with a specified asset share ID owned by the partner.
   * (assetShares.listAssetShares)
   *
   * @param string $assetId The *assetId* parameter specifies the asset ID for
   * which you are retrieving data. The parameter can be an asset view ID or an
   * asset share ID. - If the value is an asset view ID, the API response
   * identifies any asset share ids mapped to the asset view. - If the value is an
   * asset share ID, the API response identifies any asset view ids that maps to
   * that asset share.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fetchMatchPolicy The *fetchMatchPolicy* parameter specifies
   * the version of the asset's match policy that should be returned in the API
   * response.
   * @opt_param string fetchMetadata The *fetchMetadata* parameter specifies the
   * version of the asset's metadata that should be returned in the API response.
   * In some cases, YouTube receives metadata for an asset from multiple sources,
   * such as when different partners own the asset in different territories.
   * @opt_param string fetchOwnership The *fetchOwnership* parameter specifies the
   * version of the asset's ownership data that should be returned in the API
   * response. As with asset metadata, YouTube can receive asset ownership data
   * from multiple sources.
   * @opt_param bool fetchOwnershipConflicts The *fetchOwnershipConflicts*
   * parameter allows you to retrieve information about ownership conflicts.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * all assets or only assets owned by the content owner. Note that in cases
   * where duplicate assets have been merged, the API response only contains the
   * synthesized asset. (It does not contain the constituent assets that were
   * merged into the synthesized asset.) (assets.listAssets)
   *
   * @param string $id The *id* parameter specifies a comma-separated list of
   * YouTube Asset IDs that identify the assets you want to retrieve. As noted in
   * the method description, if you try to retrieve an asset that YouTube
   * identified as a duplicate and merged with another asset, the API response
   * only returns the synthesized asset. In that case, the aliasId property in the
   * asset resource specifies a list of other asset IDs that can be used to
   * identify that asset. Also note that the API response does not contain
   * duplicates. As such, if your request identifies three asset IDs, and all of
   * those have been merged into a single asset, then the API response identifies
   * one matching asset.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fetchMatchPolicy The *fetchMatchPolicy* parameter specifies
   * the version of the asset's match policy that should be returned in the API
   * response.
   * @opt_param string fetchMetadata The *fetchMetadata* parameter specifies the
   * version of the asset's metadata that should be returned in the API response.
   * In some cases, YouTube receives metadata for an asset from multiple sources,
   * such as when different partners own the asset in different territories.
   * @opt_param string fetchOwnership The *fetchOwnership* parameter specifies the
   * version of the asset's ownership data that should be returned in the API
   * response. As with asset metadata, YouTube can receive asset ownership data
   * from multiple sources.
   * @opt_param bool fetchOwnershipConflicts The *fetchOwnershipConflicts*
   * parameter allows you to retrieve information about ownership conflicts.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_AssetListResponse
   */
  public function listAssets($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_AssetListResponse");
  }

  /**
   * Patches the metadata for the specified asset. (assets.patch)
   *
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset being patched.
   * @param Google_Asset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_Asset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $campaignId The *campaignId* parameter specifies the YouTube
   * campaign ID of the campaign being deleted.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_YoutubePartnerEmpty
   */
  public function delete($campaignId, $optParams = array())
  {
    $params = array('campaignId' => $campaignId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_YouTubePartner_YoutubePartnerEmpty");
  }

  /**
   * Retrieves a particular campaign for an owner. (campaigns.get)
   *
   * @param string $campaignId The *campaignId* parameter specifies the YouTube
   * campaign ID of the campaign being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. For example, set this
   * parameter to the value of the nextPageToken value from the previous API
   * response to retrieve the next page of search results.
   * @return Google_Service_YouTubePartner_CampaignList
   */
  public function listCampaigns($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_CampaignList");
  }

  /**
   * Patch the data for a specific campaign. (campaigns.patch)
   *
   * @param string $campaignId The *campaignId* parameter specifies the YouTube
   * campaign ID of the campaign being retrieved.
   * @param Google_Campaign $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $campaignId The *campaignId* parameter specifies the YouTube
   * campaign ID of the campaign being retrieved.
   * @param Google_Campaign $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $claimId The *claimId* parameter specifies the YouTube claim ID
   * of the claim for which you are retrieving the claim history.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string assetId The *assetId* parameter specifies the YouTube asset
   * ID of the asset for which you are retrieving claims.
   * @opt_param string contentType The *contentType* parameter specifies the
   * content type of claims that you want to retrieve.
   * @opt_param string createdAfter The *createdAfter* parameter allows you to
   * restrict the set of returned claims to ones created on or after the specified
   * date (inclusive).
   * @opt_param string createdBefore The *createdBefore* parameter allows you to
   * restrict the set of returned claims to ones created before the specified date
   * (exclusive).
   * @opt_param string inactiveReasons The *inactiveReasons* parameter allows you
   * to specify what kind of inactive claims you want to find based on the reasons
   * why the claims became inactive.
   * @opt_param bool includeThirdPartyClaims Used along with the *videoId*
   * parameter this parameter determines whether or not to include third party
   * claims in the search results.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string origin The *origin* parameter specifies the origins you
   * want to find claims for. It is a comma-separated list of origin values.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. For example, set this
   * parameter to the value of the nextPageToken value from the previous API
   * response to retrieve the next page of search results.
   * @opt_param bool partnerUploaded The *partnerUploaded* parameter specifies
   * whether you want to filter your search results to only partner uploaded or
   * non partner uploaded claims.
   * @opt_param string q The *q* parameter specifies the query string to use to
   * filter search results. YouTube searches for the query string in the following
   * claim fields: *video_title*, *video_keywords*, *user_name*, *isrc*, *iswc*,
   * *grid*, *custom_id*, and in the content owner's email address.
   * @opt_param string referenceId The *referenceId* parameter specifies the
   * YouTube reference ID of the reference for which you are retrieving claims.
   * @opt_param string sort The *sort* parameter specifies the method that will be
   * used to order resources in the API response. The default value is date.
   * However, if the status parameter value is either appealed, disputed, pending,
   * potential, or routedForReview, then results will be sorted by the time that
   * the claim review period expires.
   * @opt_param string status The *status* parameter restricts your results to
   * only claims in the specified status.
   * @opt_param string statusModifiedAfter The *statusModifiedAfter* parameter
   * allows you to restrict the result set to only include claims that have had
   * their status modified on or after the specified date (inclusive). The date
   * specified must be on or after June 30, 2016 (2016-06-30). The parameter
   * value's format is YYYY-MM-DD.
   * @opt_param string statusModifiedBefore The *statusModifiedBefore* parameter
   * allows you to restrict the result set to only include claims that have had
   * their status modified before the specified date (exclusive). The date
   * specified must be on or after July 1, 2016 (2016-07-01). The parameter
   * value's format is YYYY-MM-DD.
   * @opt_param string videoId The *videoId* parameter specifies comma-separated
   * list of YouTube video IDs for which you are retrieving claims.
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
   * @param string $claimId The *claimId* parameter specifies the claim ID of the
   * claim being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param bool isManualClaim restricted
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string assetId Use the claimSearch.list method's assetId parameter
   * to search for claim snippets by asset ID. You can then retrieve the claim
   * resources for those claims by using this method's *id* parameter to specify a
   * comma-separated list of claim IDs.
   * @opt_param string id The *id* parameter specifies a list of comma-separated
   * YouTube claim IDs to retrieve.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. For example, set this
   * parameter to the value of the nextPageToken value from the previous API
   * response to retrieve the next page of search results.
   * @opt_param string q Use the claimSearch.list method's q parameter to search
   * for claim snippets that match a particular query string. You can then
   * retrieve the claim resources for those claims by using this method's *id*
   * parameter to specify a comma-separated list of claim IDs.
   * @opt_param string videoId Use the claimSearch.list method's videoId parameter
   * to search for claim snippets by video ID. You can then retrieve the claim
   * resources for those claims by using this method's *id* parameter to specify a
   * comma-separated list of claim IDs.
   * @return Google_Service_YouTubePartner_ClaimListResponse
   */
  public function listClaims($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ClaimListResponse");
  }

  /**
   * Patches an existing claim by either changing its policy or its status. You
   * can update a claim's status from active to inactive to effectively release
   * the claim. (claims.patch)
   *
   * @param string $claimId The *claimId* parameter specifies the claim ID of the
   * claim being updated.
   * @param Google_Claim $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $claimId The *claimId* parameter specifies the claim ID of the
   * claim being updated.
   * @param Google_Claim $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $contentOwnerId The *contentOwnerId* parameter specifies a
   * value that uniquely identifies the content owner.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param bool fetchMine The *fetchMine* parameter restricts the result set
   * to content owners associated with the currently authenticated API user.
   * @opt_param string id The *id* parameter specifies a comma-separated list of
   * YouTube content owner IDs to retrieve.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $channelId The *channelId* parameter identifies the channel
   * that owns the broadcast into which the cuepoint is being inserted.
   * @param Google_LiveCuepoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners. You can obtain the content owner ID that will serve as the
   * parameter value by calling the YouTube Content ID API's contentOwners.list
   * method.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving a metadata history.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * for which you are retrieving ownership data.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * asset's ownership. (ownership.patch)
   *
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_RightsOwnership $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset being updated.
   * @param Google_RightsOwnership $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $assetId The *assetId* parameter specifies the YouTube asset ID
   * of the asset for which you are retrieving an ownership data history.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $packageId The *packageId* parameter specifies the Content
   * Delivery package ID of the package being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $policyId The *policyId* parameter specifies a value that
   * uniquely identifies the policy being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string id The *id* parameter specifies a comma-separated list of
   * saved policy IDs to retrieve. Only policies belonging to the currently
   * authenticated content owner will be available.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string sort The *sort* parameter specifies how the search results
   * should be sorted.
   * @return Google_Service_YouTubePartner_PolicyList
   */
  public function listPolicies($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_PolicyList");
  }

  /**
   * Patches the specified saved policy. (policies.patch)
   *
   * @param string $policyId The *policyId* parameter specifies a value that
   * uniquely identifies the policy being updated.
   * @param Google_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $policyId The *policyId* parameter specifies a value that
   * uniquely identifies the policy being updated.
   * @param Google_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $referenceConflictId The *referenceConflictId* parameter
   * specifies the YouTube reference conflict ID of the reference conflict being
   * retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
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
   * @param string $referenceId The *referenceId* parameter specifies the YouTube
   * reference ID of the reference being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * claim.  (references.insert)
   *
   * @param Google_Reference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string claimId The *claimId* parameter specifies the YouTube claim
   * ID of an existing claim from which a reference should be created. (The
   * claimed video is used as the reference content.)
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string assetId The *assetId* parameter specifies the YouTube asset
   * ID of the asset for which you are retrieving references.
   * @opt_param string id The *id* parameter specifies a comma-separated list of
   * YouTube reference IDs to retrieve.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of search results.
   * @return Google_Service_YouTubePartner_ReferenceListResponse
   */
  public function listReferences($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_ReferenceListResponse");
  }

  /**
   * Patches a reference. (references.patch)
   *
   * @param string $referenceId The *referenceId* parameter specifies the YouTube
   * reference ID of the reference being updated.
   * @param Google_Reference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param bool releaseClaims The *releaseClaims* parameter indicates that
   * you want to release all match claims associated with this reference. This
   * parameter only works when the claim's status is being updated to 'inactive' -
   * you can then set the parameter's value to true to release all match claims
   * produced by this reference.
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
   * @param string $referenceId The *referenceId* parameter specifies the YouTube
   * reference ID of the reference being updated.
   * @param Google_Reference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param bool releaseClaims The *releaseClaims* parameter indicates that
   * you want to release all match claims associated with this reference. This
   * parameter only works when the claim's status is being updated to 'inactive' -
   * you can then set the parameter's value to true to release all match claims
   * produced by this reference.
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
 * The "spreadsheetTemplate" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $spreadsheetTemplate = $youtubePartnerService->spreadsheetTemplate;
 *  </code>
 */
class Google_Service_YouTubePartner_SpreadsheetTemplate_Resource extends Google_Service_Resource
{

  /**
   * Retrieves a list of spreadsheet templates for a content owner.
   * (spreadsheetTemplate.listSpreadsheetTemplate)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale The *locale* parameter identifies the desired
   * language for templates in the API response. The value is a string that
   * contains a BCP-47 language code. The default value is en.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_SpreadsheetTemplateListResponse
   */
  public function listSpreadsheetTemplate($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_SpreadsheetTemplateListResponse");
  }
}

/**
 * The "uploader" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubePartnerService = new Google_Service_YouTubePartner(...);
 *   $uploader = $youtubePartnerService->uploader;
 *  </code>
 */
class Google_Service_YouTubePartner_Uploader_Resource extends Google_Service_Resource
{

  /**
   * Retrieves a list of uploaders for a content owner. (uploader.listUploader)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_UploaderListResponse
   */
  public function listUploader($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_UploaderListResponse");
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $videoId The *videoId* parameter specifies the YouTube video ID
   * of the video for which you are retrieving advertising settings.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $videoId The *videoId* parameter specifies the YouTube video ID
   * of the video for which you are retrieving advertising options.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_VideoAdvertisingOptionGetEnabledAdsResponse
   */
  public function getEnabledAds($videoId, $optParams = array())
  {
    $params = array('videoId' => $videoId);
    $params = array_merge($params, $optParams);
    return $this->call('getEnabledAds', array($params), "Google_Service_YouTubePartner_VideoAdvertisingOptionGetEnabledAdsResponse");
  }

  /**
   * Patches the advertising settings for the specified video.
   * (videoAdvertisingOptions.patch)
   *
   * @param string $videoId The *videoId* parameter specifies the YouTube video ID
   * of the video for which you are updating advertising settings.
   * @param Google_VideoAdvertisingOption $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $videoId The *videoId* parameter specifies the YouTube video ID
   * of the video for which you are updating advertising settings.
   * @param Google_VideoAdvertisingOption $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @param string $id The *id* parameter specifies the YouTube channel ID of the
   * channel being removed from whitelist.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @return Google_Service_YouTubePartner_YoutubePartnerEmpty
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_YouTubePartner_YoutubePartnerEmpty");
  }

  /**
   * Retrieves a specific whitelisted channel by ID. (whitelists.get)
   *
   * @param string $id The *id* parameter specifies the YouTube channel ID of the
   * whitelisted channel being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
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
   * @opt_param string id The *id* parameter specifies a comma-separated list of
   * YouTube channel IDs that identify the whitelisted channels you want to
   * retrieve.
   * @opt_param string onBehalfOfContentOwner The *onBehalfOfContentOwner*
   * parameter identifies the content owner that the user is acting on behalf of.
   * This parameter supports users whose accounts are associated with multiple
   * content owners.
   * @opt_param string pageToken The *pageToken* parameter specifies a token that
   * identifies a particular page of results to return. Set this parameter to the
   * value of the nextPageToken value from the previous API response to retrieve
   * the next page of results.
   * @return Google_Service_YouTubePartner_WhitelistListResponse
   */
  public function listWhitelists($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_YouTubePartner_WhitelistListResponse");
  }
}




class Google_Service_YouTubePartner_AdBreak extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $midrollSeconds;
  public $position;


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

class Google_Service_YouTubePartner_AssetSnippet extends Google_Collection
{
  protected $collection_key = 'iswcs';
  protected $internal_gapi_mappings = array(
  );
  public $customId;
  public $id;
  public $isrc;
  public $isrcs;
  public $iswc;
  public $iswcs;
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
  public function setIsrcs($isrcs)
  {
    $this->isrcs = $isrcs;
  }
  public function getIsrcs()
  {
    return $this->isrcs;
  }
  public function setIswc($iswc)
  {
    $this->iswc = $iswc;
  }
  public function getIswc()
  {
    return $this->iswc;
  }
  public function setIswcs($iswcs)
  {
    $this->iswcs = $iswcs;
  }
  public function getIswcs()
  {
    return $this->iswcs;
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

class Google_Service_YouTubePartner_Blobstore2Info extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $blobGeneration;
  public $blobId;
  public $downloadReadHandle;
  public $readToken;
  public $uploadMetadataContainer;


  public function setBlobGeneration($blobGeneration)
  {
    $this->blobGeneration = $blobGeneration;
  }
  public function getBlobGeneration()
  {
    return $this->blobGeneration;
  }
  public function setBlobId($blobId)
  {
    $this->blobId = $blobId;
  }
  public function getBlobId()
  {
    return $this->blobId;
  }
  public function setDownloadReadHandle($downloadReadHandle)
  {
    $this->downloadReadHandle = $downloadReadHandle;
  }
  public function getDownloadReadHandle()
  {
    return $this->downloadReadHandle;
  }
  public function setReadToken($readToken)
  {
    $this->readToken = $readToken;
  }
  public function getReadToken()
  {
    return $this->readToken;
  }
  public function setUploadMetadataContainer($uploadMetadataContainer)
  {
    $this->uploadMetadataContainer = $uploadMetadataContainer;
  }
  public function getUploadMetadataContainer()
  {
    return $this->uploadMetadataContainer;
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
  protected $matchInfoType = 'Google_Service_YouTubePartner_MatchInfo';
  protected $matchInfoDataType = '';
  protected $originType = 'Google_Service_YouTubePartner_Origin';
  protected $originDataType = '';
  protected $policyType = 'Google_Service_YouTubePartner_Policy';
  protected $policyDataType = '';
  public $status;
  protected $studioInfoType = 'Google_Service_YouTubePartner_StudioInfo';
  protected $studioInfoDataType = '';
  public $timeCreated;
  public $ugcType;
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
  public function setMatchInfo(Google_Service_YouTubePartner_MatchInfo $matchInfo)
  {
    $this->matchInfo = $matchInfo;
  }
  public function getMatchInfo()
  {
    return $this->matchInfo;
  }
  public function setOrigin(Google_Service_YouTubePartner_Origin $origin)
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
  public function setStudioInfo(Google_Service_YouTubePartner_StudioInfo $studioInfo)
  {
    $this->studioInfo = $studioInfo;
  }
  public function getStudioInfo()
  {
    return $this->studioInfo;
  }
  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }
  public function getTimeCreated()
  {
    return $this->timeCreated;
  }
  public function setUgcType($ugcType)
  {
    $this->ugcType = $ugcType;
  }
  public function getUgcType()
  {
    return $this->ugcType;
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
  protected $sourceType = 'Google_Service_YouTubePartner_Source';
  protected $sourceDataType = '';
  public $time;
  public $type;
  protected $typeDetailsType = 'Google_Service_YouTubePartner_TypeDetails';
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
  public function setSource(Google_Service_YouTubePartner_Source $source)
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
  public function setTypeDetails(Google_Service_YouTubePartner_TypeDetails $typeDetails)
  {
    $this->typeDetails = $typeDetails;
  }
  public function getTypeDetails()
  {
    return $this->typeDetails;
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
  protected $originType = 'Google_Service_YouTubePartner_YoutubePartnerApiProtoFrontendV1Origin';
  protected $originDataType = '';
  public $status;
  protected $studioInfoType = 'Google_Service_YouTubePartner_StudioInfo';
  protected $studioInfoDataType = '';
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
  public function setOrigin(Google_Service_YouTubePartner_YoutubePartnerApiProtoFrontendV1Origin $origin)
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
  public function setStudioInfo(Google_Service_YouTubePartner_StudioInfo $studioInfo)
  {
    $this->studioInfo = $studioInfo;
  }
  public function getStudioInfo()
  {
    return $this->studioInfo;
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

class Google_Service_YouTubePartner_CompositeMedia extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $blobRef;
  protected $blobstore2InfoType = 'Google_Service_YouTubePartner_Blobstore2Info';
  protected $blobstore2InfoDataType = '';
  public $cosmoBinaryReference;
  public $crc32cHash;
  public $inline;
  public $length;
  public $md5Hash;
  protected $objectIdType = 'Google_Service_YouTubePartner_ObjectId';
  protected $objectIdDataType = '';
  public $path;
  public $referenceType;
  public $sha1Hash;


  public function setBlobRef($blobRef)
  {
    $this->blobRef = $blobRef;
  }
  public function getBlobRef()
  {
    return $this->blobRef;
  }
  public function setBlobstore2Info(Google_Service_YouTubePartner_Blobstore2Info $blobstore2Info)
  {
    $this->blobstore2Info = $blobstore2Info;
  }
  public function getBlobstore2Info()
  {
    return $this->blobstore2Info;
  }
  public function setCosmoBinaryReference($cosmoBinaryReference)
  {
    $this->cosmoBinaryReference = $cosmoBinaryReference;
  }
  public function getCosmoBinaryReference()
  {
    return $this->cosmoBinaryReference;
  }
  public function setCrc32cHash($crc32cHash)
  {
    $this->crc32cHash = $crc32cHash;
  }
  public function getCrc32cHash()
  {
    return $this->crc32cHash;
  }
  public function setInline($inline)
  {
    $this->inline = $inline;
  }
  public function getInline()
  {
    return $this->inline;
  }
  public function setLength($length)
  {
    $this->length = $length;
  }
  public function getLength()
  {
    return $this->length;
  }
  public function setMd5Hash($md5Hash)
  {
    $this->md5Hash = $md5Hash;
  }
  public function getMd5Hash()
  {
    return $this->md5Hash;
  }
  public function setObjectId(Google_Service_YouTubePartner_ObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  public function getObjectId()
  {
    return $this->objectId;
  }
  public function setPath($path)
  {
    $this->path = $path;
  }
  public function getPath()
  {
    return $this->path;
  }
  public function setReferenceType($referenceType)
  {
    $this->referenceType = $referenceType;
  }
  public function getReferenceType()
  {
    return $this->referenceType;
  }
  public function setSha1Hash($sha1Hash)
  {
    $this->sha1Hash = $sha1Hash;
  }
  public function getSha1Hash()
  {
    return $this->sha1Hash;
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

class Google_Service_YouTubePartner_ContentTypeInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bestGuess;
  public $fromBytes;
  public $fromFileName;
  public $fromHeader;
  public $fromUrlPath;


  public function setBestGuess($bestGuess)
  {
    $this->bestGuess = $bestGuess;
  }
  public function getBestGuess()
  {
    return $this->bestGuess;
  }
  public function setFromBytes($fromBytes)
  {
    $this->fromBytes = $fromBytes;
  }
  public function getFromBytes()
  {
    return $this->fromBytes;
  }
  public function setFromFileName($fromFileName)
  {
    $this->fromFileName = $fromFileName;
  }
  public function getFromFileName()
  {
    return $this->fromFileName;
  }
  public function setFromHeader($fromHeader)
  {
    $this->fromHeader = $fromHeader;
  }
  public function getFromHeader()
  {
    return $this->fromHeader;
  }
  public function setFromUrlPath($fromUrlPath)
  {
    $this->fromUrlPath = $fromUrlPath;
  }
  public function getFromUrlPath()
  {
    return $this->fromUrlPath;
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

class Google_Service_YouTubePartner_DiffChecksumsResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $checksumsLocationType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $checksumsLocationDataType = '';
  public $chunkSizeBytes;
  protected $objectLocationType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $objectLocationDataType = '';
  public $objectSizeBytes;
  public $objectVersion;


  public function setChecksumsLocation(Google_Service_YouTubePartner_CompositeMedia $checksumsLocation)
  {
    $this->checksumsLocation = $checksumsLocation;
  }
  public function getChecksumsLocation()
  {
    return $this->checksumsLocation;
  }
  public function setChunkSizeBytes($chunkSizeBytes)
  {
    $this->chunkSizeBytes = $chunkSizeBytes;
  }
  public function getChunkSizeBytes()
  {
    return $this->chunkSizeBytes;
  }
  public function setObjectLocation(Google_Service_YouTubePartner_CompositeMedia $objectLocation)
  {
    $this->objectLocation = $objectLocation;
  }
  public function getObjectLocation()
  {
    return $this->objectLocation;
  }
  public function setObjectSizeBytes($objectSizeBytes)
  {
    $this->objectSizeBytes = $objectSizeBytes;
  }
  public function getObjectSizeBytes()
  {
    return $this->objectSizeBytes;
  }
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
}

class Google_Service_YouTubePartner_DiffDownloadResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $objectLocationType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $objectLocationDataType = '';


  public function setObjectLocation(Google_Service_YouTubePartner_CompositeMedia $objectLocation)
  {
    $this->objectLocation = $objectLocation;
  }
  public function getObjectLocation()
  {
    return $this->objectLocation;
  }
}

class Google_Service_YouTubePartner_DiffUploadRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $checksumsInfoType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $checksumsInfoDataType = '';
  protected $objectInfoType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $objectInfoDataType = '';
  public $objectVersion;


  public function setChecksumsInfo(Google_Service_YouTubePartner_CompositeMedia $checksumsInfo)
  {
    $this->checksumsInfo = $checksumsInfo;
  }
  public function getChecksumsInfo()
  {
    return $this->checksumsInfo;
  }
  public function setObjectInfo(Google_Service_YouTubePartner_CompositeMedia $objectInfo)
  {
    $this->objectInfo = $objectInfo;
  }
  public function getObjectInfo()
  {
    return $this->objectInfo;
  }
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
}

class Google_Service_YouTubePartner_DiffUploadResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $objectVersion;
  protected $originalObjectType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $originalObjectDataType = '';


  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
  public function setOriginalObject(Google_Service_YouTubePartner_CompositeMedia $originalObject)
  {
    $this->originalObject = $originalObject;
  }
  public function getOriginalObject()
  {
    return $this->originalObject;
  }
}

class Google_Service_YouTubePartner_DiffVersionResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $objectSizeBytes;
  public $objectVersion;


  public function setObjectSizeBytes($objectSizeBytes)
  {
    $this->objectSizeBytes = $objectSizeBytes;
  }
  public function getObjectSizeBytes()
  {
    return $this->objectSizeBytes;
  }
  public function setObjectVersion($objectVersion)
  {
    $this->objectVersion = $objectVersion;
  }
  public function getObjectVersion()
  {
    return $this->objectVersion;
  }
}

class Google_Service_YouTubePartner_DownloadParameters extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $allowGzipCompression;
  public $ignoreRange;


  public function setAllowGzipCompression($allowGzipCompression)
  {
    $this->allowGzipCompression = $allowGzipCompression;
  }
  public function getAllowGzipCompression()
  {
    return $this->allowGzipCompression;
  }
  public function setIgnoreRange($ignoreRange)
  {
    $this->ignoreRange = $ignoreRange;
  }
  public function getIgnoreRange()
  {
    return $this->ignoreRange;
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

class Google_Service_YouTubePartner_LongestMatch extends Google_Model
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

class Google_Service_YouTubePartner_MatchInfo extends Google_Collection
{
  protected $collection_key = 'matchSegments';
  protected $internal_gapi_mappings = array(
  );
  protected $longestMatchType = 'Google_Service_YouTubePartner_LongestMatch';
  protected $longestMatchDataType = '';
  protected $matchSegmentsType = 'Google_Service_YouTubePartner_MatchSegment';
  protected $matchSegmentsDataType = 'array';
  public $referenceId;
  protected $totalMatchType = 'Google_Service_YouTubePartner_TotalMatch';
  protected $totalMatchDataType = '';


  public function setLongestMatch(Google_Service_YouTubePartner_LongestMatch $longestMatch)
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
  public function setTotalMatch(Google_Service_YouTubePartner_TotalMatch $totalMatch)
  {
    $this->totalMatch = $totalMatch;
  }
  public function getTotalMatch()
  {
    return $this->totalMatch;
  }
}

class Google_Service_YouTubePartner_MatchSegment extends Google_Model
{
  protected $internal_gapi_mappings = array(
        "manualSegment" => "manual_segment",
        "referenceSegment" => "reference_segment",
        "videoSegment" => "video_segment",
  );
  public $channel;
  protected $manualSegmentType = 'Google_Service_YouTubePartner_Segment2';
  protected $manualSegmentDataType = '';
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
  public function setManualSegment(Google_Service_YouTubePartner_Segment2 $manualSegment)
  {
    $this->manualSegment = $manualSegment;
  }
  public function getManualSegment()
  {
    return $this->manualSegment;
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

class Google_Service_YouTubePartner_Media extends Google_Collection
{
  protected $collection_key = 'compositeMedia';
  protected $internal_gapi_mappings = array(
  );
  public $algorithm;
  public $bigstoreObjectRef;
  public $blobRef;
  protected $blobstore2InfoType = 'Google_Service_YouTubePartner_Blobstore2Info';
  protected $blobstore2InfoDataType = '';
  protected $compositeMediaType = 'Google_Service_YouTubePartner_CompositeMedia';
  protected $compositeMediaDataType = 'array';
  public $contentType;
  protected $contentTypeInfoType = 'Google_Service_YouTubePartner_ContentTypeInfo';
  protected $contentTypeInfoDataType = '';
  public $cosmoBinaryReference;
  public $crc32cHash;
  protected $diffChecksumsResponseType = 'Google_Service_YouTubePartner_DiffChecksumsResponse';
  protected $diffChecksumsResponseDataType = '';
  protected $diffDownloadResponseType = 'Google_Service_YouTubePartner_DiffDownloadResponse';
  protected $diffDownloadResponseDataType = '';
  protected $diffUploadRequestType = 'Google_Service_YouTubePartner_DiffUploadRequest';
  protected $diffUploadRequestDataType = '';
  protected $diffUploadResponseType = 'Google_Service_YouTubePartner_DiffUploadResponse';
  protected $diffUploadResponseDataType = '';
  protected $diffVersionResponseType = 'Google_Service_YouTubePartner_DiffVersionResponse';
  protected $diffVersionResponseDataType = '';
  protected $downloadParametersType = 'Google_Service_YouTubePartner_DownloadParameters';
  protected $downloadParametersDataType = '';
  public $filename;
  public $hash;
  public $hashVerified;
  public $inline;
  public $isPotentialRetry;
  public $length;
  public $md5Hash;
  public $mediaId;
  protected $objectIdType = 'Google_Service_YouTubePartner_ObjectId';
  protected $objectIdDataType = '';
  public $path;
  public $referenceType;
  public $sha1Hash;
  public $sha256Hash;
  public $timestamp;
  public $token;


  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  public function setBigstoreObjectRef($bigstoreObjectRef)
  {
    $this->bigstoreObjectRef = $bigstoreObjectRef;
  }
  public function getBigstoreObjectRef()
  {
    return $this->bigstoreObjectRef;
  }
  public function setBlobRef($blobRef)
  {
    $this->blobRef = $blobRef;
  }
  public function getBlobRef()
  {
    return $this->blobRef;
  }
  public function setBlobstore2Info(Google_Service_YouTubePartner_Blobstore2Info $blobstore2Info)
  {
    $this->blobstore2Info = $blobstore2Info;
  }
  public function getBlobstore2Info()
  {
    return $this->blobstore2Info;
  }
  public function setCompositeMedia($compositeMedia)
  {
    $this->compositeMedia = $compositeMedia;
  }
  public function getCompositeMedia()
  {
    return $this->compositeMedia;
  }
  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }
  public function getContentType()
  {
    return $this->contentType;
  }
  public function setContentTypeInfo(Google_Service_YouTubePartner_ContentTypeInfo $contentTypeInfo)
  {
    $this->contentTypeInfo = $contentTypeInfo;
  }
  public function getContentTypeInfo()
  {
    return $this->contentTypeInfo;
  }
  public function setCosmoBinaryReference($cosmoBinaryReference)
  {
    $this->cosmoBinaryReference = $cosmoBinaryReference;
  }
  public function getCosmoBinaryReference()
  {
    return $this->cosmoBinaryReference;
  }
  public function setCrc32cHash($crc32cHash)
  {
    $this->crc32cHash = $crc32cHash;
  }
  public function getCrc32cHash()
  {
    return $this->crc32cHash;
  }
  public function setDiffChecksumsResponse(Google_Service_YouTubePartner_DiffChecksumsResponse $diffChecksumsResponse)
  {
    $this->diffChecksumsResponse = $diffChecksumsResponse;
  }
  public function getDiffChecksumsResponse()
  {
    return $this->diffChecksumsResponse;
  }
  public function setDiffDownloadResponse(Google_Service_YouTubePartner_DiffDownloadResponse $diffDownloadResponse)
  {
    $this->diffDownloadResponse = $diffDownloadResponse;
  }
  public function getDiffDownloadResponse()
  {
    return $this->diffDownloadResponse;
  }
  public function setDiffUploadRequest(Google_Service_YouTubePartner_DiffUploadRequest $diffUploadRequest)
  {
    $this->diffUploadRequest = $diffUploadRequest;
  }
  public function getDiffUploadRequest()
  {
    return $this->diffUploadRequest;
  }
  public function setDiffUploadResponse(Google_Service_YouTubePartner_DiffUploadResponse $diffUploadResponse)
  {
    $this->diffUploadResponse = $diffUploadResponse;
  }
  public function getDiffUploadResponse()
  {
    return $this->diffUploadResponse;
  }
  public function setDiffVersionResponse(Google_Service_YouTubePartner_DiffVersionResponse $diffVersionResponse)
  {
    $this->diffVersionResponse = $diffVersionResponse;
  }
  public function getDiffVersionResponse()
  {
    return $this->diffVersionResponse;
  }
  public function setDownloadParameters(Google_Service_YouTubePartner_DownloadParameters $downloadParameters)
  {
    $this->downloadParameters = $downloadParameters;
  }
  public function getDownloadParameters()
  {
    return $this->downloadParameters;
  }
  public function setFilename($filename)
  {
    $this->filename = $filename;
  }
  public function getFilename()
  {
    return $this->filename;
  }
  public function setHash($hash)
  {
    $this->hash = $hash;
  }
  public function getHash()
  {
    return $this->hash;
  }
  public function setHashVerified($hashVerified)
  {
    $this->hashVerified = $hashVerified;
  }
  public function getHashVerified()
  {
    return $this->hashVerified;
  }
  public function setInline($inline)
  {
    $this->inline = $inline;
  }
  public function getInline()
  {
    return $this->inline;
  }
  public function setIsPotentialRetry($isPotentialRetry)
  {
    $this->isPotentialRetry = $isPotentialRetry;
  }
  public function getIsPotentialRetry()
  {
    return $this->isPotentialRetry;
  }
  public function setLength($length)
  {
    $this->length = $length;
  }
  public function getLength()
  {
    return $this->length;
  }
  public function setMd5Hash($md5Hash)
  {
    $this->md5Hash = $md5Hash;
  }
  public function getMd5Hash()
  {
    return $this->md5Hash;
  }
  public function setMediaId($mediaId)
  {
    $this->mediaId = $mediaId;
  }
  public function getMediaId()
  {
    return $this->mediaId;
  }
  public function setObjectId(Google_Service_YouTubePartner_ObjectId $objectId)
  {
    $this->objectId = $objectId;
  }
  public function getObjectId()
  {
    return $this->objectId;
  }
  public function setPath($path)
  {
    $this->path = $path;
  }
  public function getPath()
  {
    return $this->path;
  }
  public function setReferenceType($referenceType)
  {
    $this->referenceType = $referenceType;
  }
  public function getReferenceType()
  {
    return $this->referenceType;
  }
  public function setSha1Hash($sha1Hash)
  {
    $this->sha1Hash = $sha1Hash;
  }
  public function getSha1Hash()
  {
    return $this->sha1Hash;
  }
  public function setSha256Hash($sha256Hash)
  {
    $this->sha256Hash = $sha256Hash;
  }
  public function getSha256Hash()
  {
    return $this->sha256Hash;
  }
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  public function getTimestamp()
  {
    return $this->timestamp;
  }
  public function setToken($token)
  {
    $this->token = $token;
  }
  public function getToken()
  {
    return $this->token;
  }
}

class Google_Service_YouTubePartner_MediaRequestInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currentBytes;
  public $customData;
  public $diffObjectVersion;
  public $finalStatus;
  public $notificationType;
  public $requestId;
  public $totalBytes;
  public $totalBytesIsEstimated;


  public function setCurrentBytes($currentBytes)
  {
    $this->currentBytes = $currentBytes;
  }
  public function getCurrentBytes()
  {
    return $this->currentBytes;
  }
  public function setCustomData($customData)
  {
    $this->customData = $customData;
  }
  public function getCustomData()
  {
    return $this->customData;
  }
  public function setDiffObjectVersion($diffObjectVersion)
  {
    $this->diffObjectVersion = $diffObjectVersion;
  }
  public function getDiffObjectVersion()
  {
    return $this->diffObjectVersion;
  }
  public function setFinalStatus($finalStatus)
  {
    $this->finalStatus = $finalStatus;
  }
  public function getFinalStatus()
  {
    return $this->finalStatus;
  }
  public function setNotificationType($notificationType)
  {
    $this->notificationType = $notificationType;
  }
  public function getNotificationType()
  {
    return $this->notificationType;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
  public function setTotalBytes($totalBytes)
  {
    $this->totalBytes = $totalBytes;
  }
  public function getTotalBytes()
  {
    return $this->totalBytes;
  }
  public function setTotalBytesIsEstimated($totalBytesIsEstimated)
  {
    $this->totalBytesIsEstimated = $totalBytesIsEstimated;
  }
  public function getTotalBytesIsEstimated()
  {
    return $this->totalBytesIsEstimated;
  }
}

class Google_Service_YouTubePartner_MediaResponseInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $customData;
  public $dataStorageTransform;
  public $dynamicDropTarget;
  public $dynamicDropzone;
  protected $mediaForDiffType = 'Google_Service_YouTubePartner_Media';
  protected $mediaForDiffDataType = '';
  public $requestClass;
  public $scottyAgentUserId;
  public $scottyCustomerLog;
  public $trafficClassField;
  public $verifyHashFromHeader;


  public function setCustomData($customData)
  {
    $this->customData = $customData;
  }
  public function getCustomData()
  {
    return $this->customData;
  }
  public function setDataStorageTransform($dataStorageTransform)
  {
    $this->dataStorageTransform = $dataStorageTransform;
  }
  public function getDataStorageTransform()
  {
    return $this->dataStorageTransform;
  }
  public function setDynamicDropTarget($dynamicDropTarget)
  {
    $this->dynamicDropTarget = $dynamicDropTarget;
  }
  public function getDynamicDropTarget()
  {
    return $this->dynamicDropTarget;
  }
  public function setDynamicDropzone($dynamicDropzone)
  {
    $this->dynamicDropzone = $dynamicDropzone;
  }
  public function getDynamicDropzone()
  {
    return $this->dynamicDropzone;
  }
  public function setMediaForDiff(Google_Service_YouTubePartner_Media $mediaForDiff)
  {
    $this->mediaForDiff = $mediaForDiff;
  }
  public function getMediaForDiff()
  {
    return $this->mediaForDiff;
  }
  public function setRequestClass($requestClass)
  {
    $this->requestClass = $requestClass;
  }
  public function getRequestClass()
  {
    return $this->requestClass;
  }
  public function setScottyAgentUserId($scottyAgentUserId)
  {
    $this->scottyAgentUserId = $scottyAgentUserId;
  }
  public function getScottyAgentUserId()
  {
    return $this->scottyAgentUserId;
  }
  public function setScottyCustomerLog($scottyCustomerLog)
  {
    $this->scottyCustomerLog = $scottyCustomerLog;
  }
  public function getScottyCustomerLog()
  {
    return $this->scottyCustomerLog;
  }
  public function setTrafficClassField($trafficClassField)
  {
    $this->trafficClassField = $trafficClassField;
  }
  public function getTrafficClassField()
  {
    return $this->trafficClassField;
  }
  public function setVerifyHashFromHeader($verifyHashFromHeader)
  {
    $this->verifyHashFromHeader = $verifyHashFromHeader;
  }
  public function getVerifyHashFromHeader()
  {
    return $this->verifyHashFromHeader;
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

class Google_Service_YouTubePartner_ObjectId extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bucketName;
  public $generation;
  public $objectName;


  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }
  public function getBucketName()
  {
    return $this->bucketName;
  }
  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }
  public function getGeneration()
  {
    return $this->generation;
  }
  public function setObjectName($objectName)
  {
    $this->objectName = $objectName;
  }
  public function getObjectName()
  {
    return $this->objectName;
  }
}

class Google_Service_YouTubePartner_Origin extends Google_Model
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
  protected $collection_key = 'statusReports';
  protected $internal_gapi_mappings = array(
  );
  public $content;
  public $customIds;
  public $id;
  public $kind;
  public $locale;
  public $name;
  public $status;
  protected $statusReportsType = 'Google_Service_YouTubePartner_StatusReport';
  protected $statusReportsDataType = 'array';
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
  public function setStatusReports($statusReports)
  {
    $this->statusReports = $statusReports;
  }
  public function getStatusReports()
  {
    return $this->statusReports;
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
  protected $gdataMediaType = 'Google_Service_YouTubePartner_Media';
  protected $gdataMediaDataType = '';
  public $hashCode;
  public $id;
  public $ignoreFpMatch;
  public $kind;
  public $length;
  protected $mediaRequestInfoType = 'Google_Service_YouTubePartner_MediaRequestInfo';
  protected $mediaRequestInfoDataType = '';
  protected $mediaResponseInfoType = 'Google_Service_YouTubePartner_MediaResponseInfo';
  protected $mediaResponseInfoDataType = '';
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
  public function setGdataMedia(Google_Service_YouTubePartner_Media $gdataMedia)
  {
    $this->gdataMedia = $gdataMedia;
  }
  public function getGdataMedia()
  {
    return $this->gdataMedia;
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
  public function setMediaRequestInfo(Google_Service_YouTubePartner_MediaRequestInfo $mediaRequestInfo)
  {
    $this->mediaRequestInfo = $mediaRequestInfo;
  }
  public function getMediaRequestInfo()
  {
    return $this->mediaRequestInfo;
  }
  public function setMediaResponseInfo(Google_Service_YouTubePartner_MediaResponseInfo $mediaResponseInfo)
  {
    $this->mediaResponseInfo = $mediaResponseInfo;
  }
  public function getMediaResponseInfo()
  {
    return $this->mediaResponseInfo;
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

class Google_Service_YouTubePartner_Segment2 extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $finish;
  public $kind;
  public $start;


  public function setFinish($finish)
  {
    $this->finish = $finish;
  }
  public function getFinish()
  {
    return $this->finish;
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

class Google_Service_YouTubePartner_Source extends Google_Model
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

class Google_Service_YouTubePartner_SpreadsheetTemplate extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $status;
  public $templateContent;
  public $templateName;
  public $templateType;


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
  public function setTemplateContent($templateContent)
  {
    $this->templateContent = $templateContent;
  }
  public function getTemplateContent()
  {
    return $this->templateContent;
  }
  public function setTemplateName($templateName)
  {
    $this->templateName = $templateName;
  }
  public function getTemplateName()
  {
    return $this->templateName;
  }
  public function setTemplateType($templateType)
  {
    $this->templateType = $templateType;
  }
  public function getTemplateType()
  {
    return $this->templateType;
  }
}

class Google_Service_YouTubePartner_SpreadsheetTemplateListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_SpreadsheetTemplate';
  protected $itemsDataType = 'array';
  public $kind;
  public $status;


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
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_YouTubePartner_StatusReport extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $statusContent;
  public $statusFileName;


  public function setStatusContent($statusContent)
  {
    $this->statusContent = $statusContent;
  }
  public function getStatusContent()
  {
    return $this->statusContent;
  }
  public function setStatusFileName($statusFileName)
  {
    $this->statusFileName = $statusFileName;
  }
  public function getStatusFileName()
  {
    return $this->statusFileName;
  }
}

class Google_Service_YouTubePartner_StudioInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $claimUrl;
  public $issueUrl;
  public $videoUrl;


  public function setClaimUrl($claimUrl)
  {
    $this->claimUrl = $claimUrl;
  }
  public function getClaimUrl()
  {
    return $this->claimUrl;
  }
  public function setIssueUrl($issueUrl)
  {
    $this->issueUrl = $issueUrl;
  }
  public function getIssueUrl()
  {
    return $this->issueUrl;
  }
  public function setVideoUrl($videoUrl)
  {
    $this->videoUrl = $videoUrl;
  }
  public function getVideoUrl()
  {
    return $this->videoUrl;
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

class Google_Service_YouTubePartner_TotalMatch extends Google_Model
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

class Google_Service_YouTubePartner_TypeDetails extends Google_Model
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

class Google_Service_YouTubePartner_Uploader extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $uploaderName;


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

class Google_Service_YouTubePartner_UploaderListResponse extends Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_YouTubePartner_Uploader';
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

class Google_Service_YouTubePartner_YoutubePartnerApiProtoFrontendV1Origin extends Google_Model
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

class Google_Service_YouTubePartner_YoutubePartnerEmpty extends Google_Model
{
}
