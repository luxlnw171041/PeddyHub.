@extends('layouts.peddyhub')

@section('content')
    <div class="container">
        <div class="row">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/pet') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('pet.form_create', ['formMode' => 'create'])

                        </form>
            </div>
        </div>
    </div>
@endsection
