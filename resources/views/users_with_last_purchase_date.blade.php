<html>
    <body>
    <h3>Users with last purchase date</h3>

        <table>
            <tr>
                <td>User id</td>
                <td>Last purchase date</td>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ Carbon\Carbon::parse($user->getLastPurchaseDate())->format('Y-m-d') }}</td>
                </tr>
            @endforeach

        </table>
    </body>
</html>
