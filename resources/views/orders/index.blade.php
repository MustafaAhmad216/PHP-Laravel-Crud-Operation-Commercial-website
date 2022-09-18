<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
</head>
<body>
    <h1 style="text-align: center">Order's Table</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Price</th>
                <th>User ID</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>ACTIONS</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order )
                <tr style="{{ $loop->odd ? 'background: #dddddd;' : '' }}">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->Total_Price }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>

                    <td class="action-buttons">
                        <form action="{{ route('orders.edit',$order->id) }}">
                                @csrf
                                <button type="submit">Update</button>
                            </form>
                            <form method='post' action="{{ route('orders.destroy',$order->id) }}">
                            @method('DELETE')  
                            @csrf  
                            <button type="submit">Delete</button>
                            </form>
                        </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <form style="text-align: center" action="{{ route('orders.create') }}">
        <button type="submit">Create New record</button>
    </form>
</body>
</html>

<style>



    </style>
    
    