<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Page</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>		//*** Edit button
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
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>