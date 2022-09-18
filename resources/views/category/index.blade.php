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
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
                <tr style="{{ $loop->odd ? 'background: #e1e1e1;' : '' }}">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="action-buttons">
                    <form action="{{ route('category.update',$category->id) }}">
                            @csrf
                            <button type="submit">Update</button>
                        </form>
                        <form method='post' action="{{ route('category.destroy',$category->id) }}">
                        @method('DELETE')  
                        @csrf  
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <form action="{{ route('createNew') }}">
                            <button type="submit">Create New record</button>
                        </form>
        </tbody>
    </table>
</body>
</html>
