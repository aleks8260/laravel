@extends('admin.layout')

@section('content')
    {{--кнопка назад--}}
    <a href="{{ URL::previous() }}" class="btn btn-default">Назад</a>
    <h1>Отредактировать товар</h1>

    {!! Form::model($product, ['route' => ['product.update', $product->id],  'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Название') }}
        {{ Form::text('title', $product->title, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Описание товара') }}
        {{ Form::textarea('content', $product->content, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Цена') }}
        {{ Form::text('price', $product->price, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Редактировать товар', ['class' => 'btn btn-primary']) }}
    {{--Прикрутил кнопку очистки изменений--}}
    {{ Form::reset('Очистка изменений', ['class' => 'btn btn-primary']) }}


    {!! Form::close() !!}
@endsection
