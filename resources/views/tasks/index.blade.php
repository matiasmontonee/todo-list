<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-4">
        <h1 class="mb-4">Lista de Tareas</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('tasks.store') }}" class="mb-4">
            @csrf
            <div class="mb-2">
                <input type="text" name="title" placeholder="Título" class="form-control" required>
            </div>
            <div class="mb-2">
                <textarea name="description" placeholder="Descripción" class="form-control"></textarea>
            </div>
            <div class="mb-2">
                <input type="date" name="due_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Agregar tarea</button>
        </form>

        <table class="table table-bordered bg-white">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha Límite</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : '-' }}</td>
                        <td>
                            @if ($task->is_completed)
                                <span class="badge bg-success">Completada</span>
                            @else
                                <span class="badge bg-warning text-dark">Pendiente</span>
                            @endif
                        </td>
                        <td class="d-flex gap-2">
                            @if (!$task->is_completed)
                                <form method="POST" action="{{ route('tasks.complete', $task->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Completar</button>
                                </form>
                            @endif

                            <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" onsubmit="return confirm('¿Seguro que quieres eliminar esta tarea?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No hay tareas registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
