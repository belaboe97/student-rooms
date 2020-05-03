<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Avatar</th>
        <th>Role Id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->avatar }}</td>
            <td>{{ $users->role_id }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
