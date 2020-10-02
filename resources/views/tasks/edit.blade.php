@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('task.update', ['task' => $task->id]) }}" method="POST">
                @method('PUT')
                <div class="form-group">
                    <label for="name">Tarefa</label>
                    <input class="form-control" id="name" value="{{ $task->name }}" />
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status1" value="option1" {{ $task->status ? 'checked' : '' }} />
                        <label class="form-check-label" for="status1">
                            Aberta
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status2" value="option2" {{ $task->status == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="status2">
                            Concluída
                        </label>
                    </div>
                </div>

                <button style="display: inline;" type="submit" class="btn btn-sm btn-success">Atualizar</button>
            </form>
        </div>
        <div class="col-md-12">
            <a style="display: inline;" href="{{ route('task.index') }}" class="mr-3 btn btn-sm btn-secondary">Voltar</a>
            <form style="display: inline-block;" action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
                @method('DELETE')
                <button type="submit" class="mr-3 btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection
