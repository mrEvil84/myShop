<html>
    <body>
    <h3>Users sorted by birth date</h3>

    <table>
            <tr>
                <td>User id</td>
                <td>Birth date</td>
                <td>Month</td>
                <td>Day</td>
            </tr>

            @foreach($users as $user)
               <tr>
                    <td>{{$user->shop_user_id}}</td>
                    <td>{{ Carbon\Carbon::parse($user->birth_date)->format('Y-m-d') }}</td>
                    <td>{{ $user->month }}</td>
                    <td>{{ $user->day }}</td>
              </tr>
            @endforeach

    </table>

    </body>
</html>
