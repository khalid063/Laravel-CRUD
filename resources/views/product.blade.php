<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{route('product.create')}}">Create a Product</a>
    </div>
    <h1>Product Page</h1>
    @if (session()-> has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>	
                <th>Delete</th>						
            </tr>
            <!-- take data all using "foreach loop"  and show the data-->
            @foreach ($products as $product)   
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discription}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>		
                    </td>
                    <td>									
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>									
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>