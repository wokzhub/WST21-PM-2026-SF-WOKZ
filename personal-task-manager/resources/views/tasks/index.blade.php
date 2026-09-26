@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-3">All Tasks</h4>

            @if ($tasks->isEmpty())
                <p class="text-muted mb-0">No tasks yet. Click "+ Add Task" to create your first one.</p>
            @else
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Task Name</th>
                                <th>Description</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th style="width: 280px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->task_name }}</td>
                                    <td>{{ Str::limit($task->description, 40) }}</td>
                                    <td>{{ $task->due_date ? $task->due_date->format('M d, Y') : '—' }}</td>
                                    <td>
                                        <span class="badge-status {{ $task->status === 'Completed' ? 'status-completed' : 'status-pending' }}">
                                            {{ $task->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1 flex-wrap">
                                            <form action="{{ route('tasks.updateStatus', $task) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status"
                                                       value="{{ $task->status === 'Pending' ? 'Completed' : 'Pending' }}">
                                                <button type="submit" class="btn btn-sm btn-outline-secondary">
                                                    Mark as {{ $task->status === 'Pending' ? 'Completed' : 'Pending' }}
                                                </button>
                                            </form>

                                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                                            <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                                  onsubmit="return confirm('Delete this task?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection