@foreach ($products as $product)
    <br>
    {{$product['title']}};
    <br>
    {{$product['content']}};
@endforeach
