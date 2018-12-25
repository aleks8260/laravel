@extends('admin.layout')

@section('content')
    <h1>Создать товар</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="title">Название</label>
            <input type="title" name="title" class="form-control">

        </div>
        <div class="form-group">
            <label for="content">Описание товара</label>
            <input type="content" name="content" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="price" name="price" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Создать товар">
    </form>
@endsection
