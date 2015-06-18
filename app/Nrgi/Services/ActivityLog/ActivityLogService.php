<?php namespace App\Nrgi\Services\ActivityLog;

use App\Nrgi\Repositories\ActivityLog\ActivityLogRepositoryInterface;

/**
 * Class ActivityLogService
 * @package App\Nrgi\Repositories\ActivityLog
 */
class ActivityLogService
{
    /**
     * @var ActivityLogRepositoryInterface
     */
    protected $activityLog;

    /**
     * @param ActivityLogRepositoryInterface $activityLog
     */
    public function __construct(ActivityLogRepositoryInterface $activityLog)
    {
        $this->activityLog = $activityLog;
    }

    /**
     * @param       $message
     * @param array $params
     * @param null  $contractId
     * @return bool
     */
    public function save($message, $params = array(), $contractId = null)
    {
        $activity = [];
        $activity['message'] = $message;
        if (!empty($params)) {
            $activity['message_params'] = $params;
        }
        if (!is_null($contractId)) {
            $activity['contract_id'] = $contractId;
        }

        return $this->activityLog->save($activity);
    }
}
