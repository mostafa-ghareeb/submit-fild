<h1>reporte page</h1>
<form action="{{route('post.insert')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="Enter your name"><br><br>
    <input type="text" name="body" placeholder="Enter your reporte"><br><br>
    <input type="submit">
</form>