<div class="table-responsive">
    <table class="table" id="rooms-table">
        <thead>
            <tr>
                <th>Adress</th>
        <th>Price</th>
        <th>Ownerid</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rooms as $rooms)
            <tr>
                <td>{{ $rooms->adress }}</td>
            <td>{{ $rooms->price }}</td>
            <td>{{ $rooms->ownerid }}</td>
            <td>{{ $rooms->image }}</td>
                <td>
                    {!! Form::open(['route' => ['rooms.destroy', $rooms->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rooms.show', [$rooms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('rooms.edit', [$rooms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
