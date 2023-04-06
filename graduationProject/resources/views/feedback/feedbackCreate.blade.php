@extends('layouts.master')

@section('head')
  Spices and Seasonings - Написать отзыв
@endsection

@section('content')             
<section class="fullscreen__feedbackCreate">
    <div class="fullscreen__body-feedback">
      <div>
        <h2>Напишите ваш отзыв</h2>
      </div>
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <div>      
        <form method="post" action="{{route('feedbackCreateSubmit')}}">
          @csrf
          <div class="form-group">
            <label for="textName">Ваше имя</label>
            <input type="text" class="form-control" id="textName" name="textname" placeholder="Введите имя" value="{{ old('textname') }}">
          </div>

          <div class="form-group">
            <label for="feedbackText">Сообщение</label>
            <textarea class="form-control" id="feedbackText" name="feedbackText" rows="3">{{ old('feedbackText') }}</textarea>
          </div>
            <input type="submit" value="Отправить" class="btn btn-secondary">
        </form>
      </div>
    </div>
</section>
@endsection