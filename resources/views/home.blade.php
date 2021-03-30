@extends('layouts.base')

@push('scripts')

    <script>
        function delete_position(url, ask) {
            if(confirm(ask)) {
                location.href = url;
            }
            return false;
        }
    </script>
@endpush


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header">Помещения/офисы</div>
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->

                    <form method="post" enctype='multipart/form-data' action="{{asset('portfolio/add')}}">
                        @csrf
                      <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Название: </label>
                        <div class="col-sm-10">
                            @error('name')
                                <p class="red" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                          <input type="text" name="name" class="form-control" id="name">
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
                          <input type="textarea" name="body" class="form-control" id="body" row="4">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="picture1">Фото: </label>
                        <input type="file" name='picture1' class="form-control-file" id="picture1">
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                      </div>
                    </form>
                    <table class="table table-bordered table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Фото</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($works as $work)
                            <tr>
                                <td>
                                    <img src="{{asset('uploads/' . $work->user_id . '/ss' . $work->picture )}}" alt="{{$work->name}}">
                                </td>
                                <td>{{ $work->name }}</td>
                                <td>{{ $work->body }}</td>
                                <td>
                                    <a href="{{asset('work/' . $work->id)}}" target="_blank" class="a-delete btn btn-success mb-1"><i class="bi-eye"></i></a><br>
                                    <a href="{{asset('work/edit/' . $work->id)}}" target="_blank" class="a-edit btn btn-warning mb-1"><i class="bi-pen" ></i></a><br>
                                    <a href="#" onclick="delete_position('{{asset("/work/delete/" . $work->id)}}', 'Вы действительно хотите удалить?')" class="a-delete btn btn-danger"><i class="bi-trash-fill"></i></a><br>
                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- //ссылка на редактирование
добавть маршрут /work/edit/id
<edit>маршрут</edit>
portfolio controller принимает id
в нем по id делает запрос
нашли объект
передаем во вью edit
в нём форма как на добавление, должны быть прописаны value
сохранить - новый маршрут ПОСТ work/edit/id
новый экшн  - запрос на объект для обнолвения, проверка картинок удалить старые новые добавить
 --}}
