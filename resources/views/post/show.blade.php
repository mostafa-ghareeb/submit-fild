<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Reporte</th>
                <th scope="col">update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>
                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary"role="button">Update</a>
                        <a href="{{route('post.delete',$post->id)}}" class="btn btn-danger"role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('post.create')}}" class="btn btn-danger"role="button">Go Home page</a>
    <a href="{{route('post.delete.all')}}" class="btn btn-danger"role="button">truncate</a>
    <a href="{{route('post.delete.all.data')}}" class="btn btn-danger"role="button">deleteall</a>
</body>
</html>