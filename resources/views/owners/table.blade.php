<div class="table-responsive">
    <table class="table" id="owners-table">
        <thead>
            <tr>
                <th>Adress</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($owners as $owners)
            <tr>
                <td>{{ $owners->adress }}</td>
            <td>{{ $owners->name }}</td>
            <td>{{ $owners->phone }}</td>
            <td>{{ $owners->email }}</td>
            <td>{{ $owners->id }}</td>
                <td>
                    {!! Form::open(['route' => ['owners.destroy', $owners->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('owners.show', [$owners->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('owners.edit', [$owners->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
