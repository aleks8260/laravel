@extends('admin.layout')

@section('content')
    <a href="{{ URL::previous() }}" class="btn btn-default">Назад</a>
    <h1>Создать товар</h1>
    {!! Form::open(['route' => 'product.store']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Название') }}
        {{ Form::text('title', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Описание товара') }}
        {{ Form::textarea('content', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Цена') }}
        {{ Form::text('price', null, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Создать товар', ['class' => 'btn btn-primary']) }}
    {{--Прикрутил кнопку очистка полей--}}
    {{ Form::reset('Очистка полей', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
