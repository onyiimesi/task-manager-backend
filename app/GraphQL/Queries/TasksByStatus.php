<?php

namespace App\GraphQL\Queries;

use App\Models\Task;

final class TasksByStatus
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        $status = $args['status'];

        // Fetch tasks based on the provided status
        return Task::where('status', $status)->get();
    }
}
