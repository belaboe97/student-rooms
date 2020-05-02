<div class="table-responsive">
    <table class="table" id="roomratings-table">
        <thead>
            <tr>
                <th>Rating</th>
                <th>Star Rating</th>
                <th>Roomid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roomratings as $roomrating)
            <tr>
                <td>{{ $roomrating->rating }}</td>
                <td><input id="fieldRating" name="rating" value="{!! $roomrating->rating !!}" type="text" class="rating rating-loading" data-min=0 data-max=5 data-step=1 data-size="sm" data-display-only="true"></td>
            <td>{{ $roomrating->roomid }}</td>
                <td>
                    {!! Form::open(['route' => ['roomratings.destroy', $roomrating->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roomratings.show', [$roomrating->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('roomratings.edit', [$roomrating->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
