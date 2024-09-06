<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Q.ta articoli</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metainfos as $metainfo)
        <tr>
            <th scope="row">{{$metainfo->id}}</th>
            <td class="text-capitalize">{{$metainfo->name}}</td>
            <td>{{count($metainfo->articles)}}</td>
            @if ($metaType == 'tags')

            <td>
                <form action="{{route('admin.editTag', ['tag' => $metainfo])}}" method="POST"> 
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="Nuovo tag" class="form-control w-50 d-inline text-capitalize" value="{{$metainfo->name}}">
                    <button type="submit" class="btn btn-info btn-sm">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', ['tag' => $metainfo])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">Cancella</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{route('admin.editCategory', ['category' => $metainfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$metainfo->name}}" name="name" placeholder="Nuova categoria" class="form-control w-50 d-inline text-capitalize">
                    <button type="submit" class="btn btn-info btn-sm">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category' => $metainfo])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">Cancella</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>