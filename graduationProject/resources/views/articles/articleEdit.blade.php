@extends('layouts.master')

@section('head')
  Редактировать
@endsection

@section('content')

<section class="fullscreen">
  <div class="fullscreen__body-articles mb-3">
    <h2>Редактируйте рецепт</h2>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif      
    <form method="post" action="{{ route('articleEditSubmit', $idArticle = $data->id) }}">
      @csrf
      <div class="form-group">
        <label for="nameAutors">Ваше имя</label>
        <input type="text" class="form-control" id="nameAutors" name="nameAutors" placeholder="Введите имя" value="{{ old('nameAutors') }} {{ $data->nameAutor }}">
      </div>

      <div class="form-group">
        <label for="nameArticle">Название рецепта</label>
        <input type="text" class="form-control" id="nameArticle" name="nameArticle" placeholder="Название рецепта" value="{{ old('nameArticle') }} {{ $data->nameArticle }}">
      </div>

      <div class="form-group">
        <label for="articleAnnotation">Аннотация</label>
        <textarea class="form-control" id="articleAnnotation" name="articleAnnotation" rows="3">{{ old('articleAnnotation') }} {{ $data->annotation }}</textarea>
      </div>

      <div class="form-group">
        <label for="articleContent">Содержимое рецепта</label>
        <textarea class="form-control" id="articleContent" name="articleContent" rows="6">{{ old('articleContent') }} {{ $data->content }}</textarea>
      </div>
      <input type="submit" value="Сохранить статью" class="btn btn-success mt-1" name="articleSave">
      <input type="submit" value="Отправить на проверку" class="btn btn-warning mt-1" name="articleModerations">
    </form>
  </div>
</section>

  <script>
      $('#articleAnnotation').summernote({
        placeholder: 'Краткое описание',
        tabsize: 2,
        height: 100
      });
      $('#articleContent').summernote({
        placeholder: 'Рецепт',
        tabsize: 2,
        height: 400
      });
  </script>
@endsection

