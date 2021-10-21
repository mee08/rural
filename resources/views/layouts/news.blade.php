<form action="{{route("news.store")}}" method="post">
    @csrf
    <input type="text" name="title">
    <select name="" id="">

    </select>
    <textarea name="body" id="" cols="30" rows="10"></textarea>

    <button type="submit">投稿</button>
</form>
