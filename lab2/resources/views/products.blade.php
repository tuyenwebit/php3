<h1>Day la trang san phaam</h1>
{{-- <h2>Loai san pham:{{$category}}</h2> --}}
<button><a href="{{ route('product.add') }}">Them moi san pham</a></button>
@if (Session::has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
           <th>quantity</th>
           <th>description</th>
           <th>Action</th>
        </tr>
    </thead>
    <tbody>
@foreach ( $products as $product )
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->description}}</td>
            
            <td><a href="{{ route('product.delete', $product->id) }}">Xoa</a></td>
            <td><a href="{{ route('product.edit', $product->id) }}">Sua</a></td>
                
        </tr>
@endforeach
    </tbody>
</table>