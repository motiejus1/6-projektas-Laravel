<table>

    <tr>
        <th>ID </th>
        <th>Name</th>
        <th>Description</th>
        <th> Author </th>
    </tr>

    @foreach ($books as $book)
        <tr>
            <td> {{$book->id}} </td>
            <td> {{$book->name}} </td>
            <td> {{$book->description}} </td>
            <td> {{$book->author_id}} </td>
            <td> {{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</td>
        </tr>
    @endforeach


</table>
