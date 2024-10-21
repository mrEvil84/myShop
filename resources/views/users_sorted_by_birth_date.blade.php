<html>
    <body>
    <h3>Users sorted by birth date</h3>

    <table>
            <tr>
                <td>User id</td>
                <td>Birth date</td>
            </tr>

            @foreach($users as $user)
               <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ Carbon\Carbon::parse($user->birth_date)->format('Y-m-d') }}</td>
              </tr>
            @endforeach

    </table>

    </body>
</html>
