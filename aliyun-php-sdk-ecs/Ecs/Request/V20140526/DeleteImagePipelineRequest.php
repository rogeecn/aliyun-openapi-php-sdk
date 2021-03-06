<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteImagePipeline
 *
 * @method string getImagePipelineId()
 * @method string getResourceOwnerId()
 * @method array getTemplateTags()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class DeleteImagePipelineRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ecs',
            '2014-05-26',
            'DeleteImagePipeline',
            'ecs'
        );
    }

    /**
     * @param string $imagePipelineId
     *
     * @return $this
     */
    public function setImagePipelineId($imagePipelineId)
    {
        $this->requestParameters['ImagePipelineId'] = $imagePipelineId;
        $this->queryParameters['ImagePipelineId'] = $imagePipelineId;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
	public function setTemplateTags(array $templateTag)
	{
	    $this->requestParameters['TemplateTags'] = $templateTag;
		foreach ($templateTag as $depth1 => $depth1Value) {
			$this->queryParameters['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
