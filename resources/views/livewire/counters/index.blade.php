<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <h1>index {{$title}}</h1>
    <a href="{{route('tambah-counter')}}">tambah</a>
    <table border="1">
        <thead>
            <th>Visi</th>
            <th>Misi</th>
            <th>Edit</th>
        </thead>
        <tbody>
            @foreach ($visions as $vision)
                <tr>
                    <td>{{$vision->vision}}</td>
                    <td>{{$vision->mission}}</td>
                    <td><a href="{{route('edit-counter', [$vision->id])}}">edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
