<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <input type="text" name="search" id="search" class="" wire:model="search">

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        @foreach ($users as $key => $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->password }}</td>
        </tr>
        @endforeach

    </table>
</div>
