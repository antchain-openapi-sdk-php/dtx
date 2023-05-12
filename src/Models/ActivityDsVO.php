<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\DTX\Models;

use AlibabaCloud\Tea\Model;

class ActivityDsVO extends Model
{
    // 9
    /**
     * @example 9
     *
     * @var int
     */
    public $actionTableIndexEnd;

    // 0
    /**
     * @example 0
     *
     * @var int
     */
    public $actionTableIndexStart;

    // .
    /**
     * @example business_action
     *
     * @var string
     */
    public $actionTableNameFormat;

    // activity_table_index_end
    /**
     * @example 9
     *
     * @var int
     */
    public $activityTableIndexEnd;

    // a
    /**
     * @example 0
     *
     * @var int
     */
    public $activityTableIndexStart;

    // 主事务表
    /**
     * @example business_activity
     *
     * @var string
     */
    public $activityTableNameFormat;

    // DB最小连接数
    /**
     * @example 2
     *
     * @var int
     */
    public $dbConnectMin;

    // DB最大连接数
    /**
     * @example 10
     *
     * @var int
     */
    public $dbConnMax;

    // 数据库类型
    /**
     * @example 1
     *
     * @var int
     */
    public $dbType;

    // 统一数据源索引结束值
    /**
     * @example 9
     *
     * @var int
     */
    public $dsIndexEnd;

    // 统一数据源索引起始值
    /**
     * @example 0
     *
     * @var int
     */
    public $dsIndexStart;

    // 统一数据源
    /**
     * @example dtx_ldc_{1}_WjmfKwy
     *
     * @var string
     */
    public $dsNameFormat;

    // 唯一id
    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    // 部署模式
    // true：rzone部署，false：gzone部署
    /**
     * @example true, false
     *
     * @var bool
     */
    public $isLdc;

    // true：数据源配置在dtap数据库，false：数据源配置在dds/zdc里。
    /**
     * @example true, false
     *
     * @var bool
     */
    public $isLocalDs;

    // gzone部署，国际IPAY站点使用
    /**
     * @example ipaycore00_ipaycore_failover_idgzhost=IDGZ;ipaycore01_ipaycore_failover_idgzhost=IDGZ;
     *
     * @var string
     */
    public $zone;

    // .
    /**
     * @example ds_{2}
     *
     * @var string
     */
    public $taskNameFormat;

    // .
    /**
     * @example 0
     *
     * @var int
     */
    public $taskIndexStart;

    // .
    /**
     * @example 9
     *
     * @var int
     */
    public $taskIndexEnd;
    protected $_name = [
        'actionTableIndexEnd'     => 'action_table_index_end',
        'actionTableIndexStart'   => 'action_table_index_start',
        'actionTableNameFormat'   => 'action_table_name_format',
        'activityTableIndexEnd'   => 'activity_table_index_end',
        'activityTableIndexStart' => 'activity_table_index_start',
        'activityTableNameFormat' => 'activity_table_name_format',
        'dbConnectMin'            => 'db_connect_min',
        'dbConnMax'               => 'db_conn_max',
        'dbType'                  => 'db_type',
        'dsIndexEnd'              => 'ds_index_end',
        'dsIndexStart'            => 'ds_index_start',
        'dsNameFormat'            => 'ds_name_format',
        'id'                      => 'id',
        'isLdc'                   => 'is_ldc',
        'isLocalDs'               => 'is_local_ds',
        'zone'                    => 'zone',
        'taskNameFormat'          => 'task_name_format',
        'taskIndexStart'          => 'task_index_start',
        'taskIndexEnd'            => 'task_index_end',
    ];

    public function validate()
    {
        Model::validateRequired('actionTableIndexEnd', $this->actionTableIndexEnd, true);
        Model::validateRequired('actionTableIndexStart', $this->actionTableIndexStart, true);
        Model::validateRequired('actionTableNameFormat', $this->actionTableNameFormat, true);
        Model::validateRequired('activityTableIndexEnd', $this->activityTableIndexEnd, true);
        Model::validateRequired('activityTableIndexStart', $this->activityTableIndexStart, true);
        Model::validateRequired('activityTableNameFormat', $this->activityTableNameFormat, true);
        Model::validateRequired('dbConnectMin', $this->dbConnectMin, true);
        Model::validateRequired('dbConnMax', $this->dbConnMax, true);
        Model::validateRequired('dbType', $this->dbType, true);
        Model::validateRequired('dsIndexEnd', $this->dsIndexEnd, true);
        Model::validateRequired('dsIndexStart', $this->dsIndexStart, true);
        Model::validateRequired('dsNameFormat', $this->dsNameFormat, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('isLdc', $this->isLdc, true);
        Model::validateRequired('isLocalDs', $this->isLocalDs, true);
        Model::validateRequired('zone', $this->zone, true);
        Model::validateRequired('taskNameFormat', $this->taskNameFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionTableIndexEnd) {
            $res['action_table_index_end'] = $this->actionTableIndexEnd;
        }
        if (null !== $this->actionTableIndexStart) {
            $res['action_table_index_start'] = $this->actionTableIndexStart;
        }
        if (null !== $this->actionTableNameFormat) {
            $res['action_table_name_format'] = $this->actionTableNameFormat;
        }
        if (null !== $this->activityTableIndexEnd) {
            $res['activity_table_index_end'] = $this->activityTableIndexEnd;
        }
        if (null !== $this->activityTableIndexStart) {
            $res['activity_table_index_start'] = $this->activityTableIndexStart;
        }
        if (null !== $this->activityTableNameFormat) {
            $res['activity_table_name_format'] = $this->activityTableNameFormat;
        }
        if (null !== $this->dbConnectMin) {
            $res['db_connect_min'] = $this->dbConnectMin;
        }
        if (null !== $this->dbConnMax) {
            $res['db_conn_max'] = $this->dbConnMax;
        }
        if (null !== $this->dbType) {
            $res['db_type'] = $this->dbType;
        }
        if (null !== $this->dsIndexEnd) {
            $res['ds_index_end'] = $this->dsIndexEnd;
        }
        if (null !== $this->dsIndexStart) {
            $res['ds_index_start'] = $this->dsIndexStart;
        }
        if (null !== $this->dsNameFormat) {
            $res['ds_name_format'] = $this->dsNameFormat;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isLdc) {
            $res['is_ldc'] = $this->isLdc;
        }
        if (null !== $this->isLocalDs) {
            $res['is_local_ds'] = $this->isLocalDs;
        }
        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
        }
        if (null !== $this->taskNameFormat) {
            $res['task_name_format'] = $this->taskNameFormat;
        }
        if (null !== $this->taskIndexStart) {
            $res['task_index_start'] = $this->taskIndexStart;
        }
        if (null !== $this->taskIndexEnd) {
            $res['task_index_end'] = $this->taskIndexEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActivityDsVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_table_index_end'])) {
            $model->actionTableIndexEnd = $map['action_table_index_end'];
        }
        if (isset($map['action_table_index_start'])) {
            $model->actionTableIndexStart = $map['action_table_index_start'];
        }
        if (isset($map['action_table_name_format'])) {
            $model->actionTableNameFormat = $map['action_table_name_format'];
        }
        if (isset($map['activity_table_index_end'])) {
            $model->activityTableIndexEnd = $map['activity_table_index_end'];
        }
        if (isset($map['activity_table_index_start'])) {
            $model->activityTableIndexStart = $map['activity_table_index_start'];
        }
        if (isset($map['activity_table_name_format'])) {
            $model->activityTableNameFormat = $map['activity_table_name_format'];
        }
        if (isset($map['db_connect_min'])) {
            $model->dbConnectMin = $map['db_connect_min'];
        }
        if (isset($map['db_conn_max'])) {
            $model->dbConnMax = $map['db_conn_max'];
        }
        if (isset($map['db_type'])) {
            $model->dbType = $map['db_type'];
        }
        if (isset($map['ds_index_end'])) {
            $model->dsIndexEnd = $map['ds_index_end'];
        }
        if (isset($map['ds_index_start'])) {
            $model->dsIndexStart = $map['ds_index_start'];
        }
        if (isset($map['ds_name_format'])) {
            $model->dsNameFormat = $map['ds_name_format'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['is_ldc'])) {
            $model->isLdc = $map['is_ldc'];
        }
        if (isset($map['is_local_ds'])) {
            $model->isLocalDs = $map['is_local_ds'];
        }
        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }
        if (isset($map['task_name_format'])) {
            $model->taskNameFormat = $map['task_name_format'];
        }
        if (isset($map['task_index_start'])) {
            $model->taskIndexStart = $map['task_index_start'];
        }
        if (isset($map['task_index_end'])) {
            $model->taskIndexEnd = $map['task_index_end'];
        }

        return $model;
    }
}
