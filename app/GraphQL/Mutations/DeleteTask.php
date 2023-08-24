<?php

namespace App\GraphQL\Mutations;

use App\Models\Task;

final class DeleteTask
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        $id = $args['id'];

        // Fetch the task based on the provided ID
        $task = Task::find($id);

        if (!$task) {
            throw new \Exception("Task with ID $id not found.");
        }

        $task->delete();

        return $task;
    }
}
