@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between align-items-center mb-3">
        <div class="col-auto">
            <h1>Task Manager</h1>
        </div>
        <div class="col-auto">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-lg">Add Task</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Creation Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->created_at->format('d-m-Y') }}</td>
                    <td>
                        @if ($task->status == 'completed')
                        <span class="badge bg-success text-white">{{ ucfirst($task->status) }}</span>
                        @elseif ($task->status == 'pending')
                        <span class="badge bg-warning text-dark">{{ ucfirst($task->status) }}</span>
                        @else
                        <span class="badge bg-danger text-white">{{ ucfirst($task->status) }}</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-secondary mr-1" title="Edit Task">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <button type="button" class="btn btn-sm btn-danger " data-toggle="modal" data-target="#deleteModal{{ $task->id }}" title="Delete Task">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                        <!-- Modal for Deletion Confirmation -->
                        <div class="modal fade" id="deleteModal{{ $task->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $task->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $task->id }}">Confirm Deletion</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this task?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection