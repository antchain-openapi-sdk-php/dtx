<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\DTX\Models;

use AlibabaCloud\Tea\Model;

class QueryActionParamRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // env
    /**
     * @var string
     */
    public $env;

    // instance_id
    /**
     * @var string
     */
    public $instanceId;

    // tenant
    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'env'               => 'env',
        'instanceId'        => 'instance_id',
        'tenantName'        => 'tenant_name',
    ];

    public function validate()
    {
        Model::validateRequired('env', $this->env, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('tenantName', $this->tenantName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }
        if (null !== $this->instanceId) {
            $res['instance_id'] = $this->instanceId;
        }
        if (null !== $this->tenantName) {
            $res['tenant_name'] = $this->tenantName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryActionParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }
        if (isset($map['instance_id'])) {
            $model->instanceId = $map['instance_id'];
        }
        if (isset($map['tenant_name'])) {
            $model->tenantName = $map['tenant_name'];
        }

        return $model;
    }
}
