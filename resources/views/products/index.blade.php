{{--откуда берем--}}
@extends('admin.layout')

@section('content')
    <div style="margin-bottom: 15px;">
        <a href="{{ route('products.create')}}" class="btn btn-primary"> Создать товар</a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Заголовок</th>
            <th>Контент</th>
            <th>Цена</th>
            <th>Редактирование</th>
            <th>Удаление</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->content }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-success"><span class="fa fa-edit"></span> Редактировать</a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger"><span class="fa fa-edit"></span> Удалить</a>
                    {{--{!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы уверены?");']) !!}
                    {!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
