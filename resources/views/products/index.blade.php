{{--откуда берем--}}
@extends('admin.layout')

@section('content')
    <div style="margin-bottom: 15px;">
        <a href="{{ route('product.create')}}" class="btn btn-primary"> Создать товар</a>
    </div>
    <!-- Проверяем есть ли в в сессии ключ-->
    @if(Session::has('success'))
        <div class="alert alert-success">
            <!-- Если да, получаем значение это ключа-->
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('updated'))
        <div class="alert alert-warning">
            {{ Session::get('updated') }}
        </div>
    @endif

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
                    <a href="{{ route('product.edit', [$product->id]) }}" class="btn btn-success"><span class="fa fa-edit"></span> Редактировать</a>
                </td>
                <td>
                    {{--Открываем метод дестрой по айдишнику продукта, который хотим удалить--}}
                    {!! Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id]]) !!}
                    {{--По нажатию спрашиваем удалить или нет. Да - продукт удаляется, отмена - остаетс все как было--}}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы уверены?");']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
