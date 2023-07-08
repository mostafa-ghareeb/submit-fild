<h1>Edit reporte page</h1>
<form action="{{route('post.update',$posts->id)}}" method="post">
    @csrf
    <input type="text" name="title" value="{{$posts->title}}"><br><br>
    <input type="text" name="body" value="{{$posts->body}}"><br><br>
    <input type="submit">
</form>