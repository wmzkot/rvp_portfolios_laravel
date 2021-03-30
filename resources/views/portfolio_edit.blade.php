@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header">Редактирование помещения</div>
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->

                    <form method="post" enctype='multipart/form-data' action="{{asset('work/edit/' . $work->id)}}">
                        @csrf
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Название: </label>
                        <div class="col-sm-10">
                            @error('name')
                                <p class="red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                          <input type="text" name="name" class="form-control" id="name" value="{{$work->name}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="body" class="col-sm-2 col-form-label">Описание: </label>
                        <div class="col-sm-10">
                            @error('body')
                                <p class="red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                          <input type="textarea" name="body" class="form-control" id="body" row=4 value="{{$work->body}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="picture1">Изображение: </label>
                        <div class="col-sm-10">
                            @error('body')
                                <p class="red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                            <img src="{{asset('uploads/' . Auth::user()->id . '/s' . $work->picture )}}" alt="{{$work->name}}">
                            <input type="file" name='picture1' class="form-control-file" id="picture1">
                        </div>

                      </div>

                      <div class="form-group">
                        <label for="delete_picture">Удалить изображение: </label>
                        <div class="col-sm-10">
                            @error('body')
                                <p class="red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror

                            <input type="checkbox" name='delete_picture' class="form-control-file" id="delete_picture">
                        </div>

                      </div>

                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                      </div>
                    </form>
                    {{-- <table class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($works as $work)
                            <tr>
                                <td>
                                    <img src="{{asset('uploads/' . $work->user_id . '/ss' . $work->picture )}}" alt="{{$work->name}}">
                                </td>
                                <td>{{ $work->name }}</td>
                                <td>
                                    <a href="#" onclick="delete_position('{{asset("/work/delete/" . $work->id)}}', 'Вы действительно хотите удалить?')" class="a-delete btn btn-danger">Удалить</a>
                                    <a href="{{asset('work/edit/' . $work->id)}}" target="_blank" class="a-edit btn btn-warning">Редактирование</a>
                                    <a href="{{asset('work/' . $work->id)}}" target="_blank" class="a-delete btn btn-success">Просмотр</a>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
