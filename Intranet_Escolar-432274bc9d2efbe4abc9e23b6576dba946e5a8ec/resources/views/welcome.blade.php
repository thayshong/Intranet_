@extends('layout.app')

@section('content')
    @include('layout._partials.navbar')

    <div class="container">
        <h2 class="mb-4 mt-4">Bem-vindo ao Class Day!</h2>

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $teachers->count() }}</h2>
                        <h5 class="card-text">Professores</h5>
                        <a href="{{ route('teachers.index') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $students->count() }}</h2>
                        <h5 class="card-text">Estudantes</h5>
                        <a href="{{ route('students.index') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $classrooms->count() }}</h2>
                        <h5 class="card-text">Classes</h5>
                        <a href="{{ route('classrooms.index') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $subjects->count() }}</h2>
                        <h5 class="card-text">Matérias</h5>
                        <a href="{{ route('subjects.index') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
