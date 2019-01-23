@extends('layouts.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>phone</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Link</th>
            <th>DJ</th>
            <th>Category</th>
            <th>Seating</th>
            <th>Current Ticket Price</th>
            <th>Extra</th>
            <th>Ticket State</th>
            <th>Host</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users_event as $event)
            @if($event['host']=='0')
            <tr style="background-color: powderblue">
                @else
                    <tr style="background-color: whitesmoke">
                        @endif
                <td>{{$event['id']}}</td>
                <td>{{$event['fname']}}</td>
                <td>{{$event['lname']}}</td>
                <td>{{$event['email']}}</td>
                <td>{{$event['phone']}}</td>
                <td>{{$event['gender']}}</td>
                <td>{{$event['age']}}</td>
                <td><a href="{{$event['link']}}">{{$event['link']}}</a></td>
                <td>{{$event['optone']}}</td>
                <td>{{$event['opttwo']}}</td>
                <td>{{$event['optthree']}}</td>
                <td>{{\App\pricing::findprice($event['Price'])}}</td>
                <td>{{$event['Bonus']}}</td>
                <td>{{$event['ticketState']}}</td>
                @if($event['host']=='0')
                    <td>Hosting {{\App\users_event::where('host','=',$event['id'])->count()}} Person(s)</td>
                @else
                <td>host ID : {{$event['host']}}   Host Name :
                    {{$results = DB::table('users_event')
                    ->where('id',$event['host'])
                    ->pluck('lname','fname')}}</td>


                @endif








                <td><a href="{{action('UsersController@edit', $event['id'])}}" class="btn btn-success">Approve</a></td>

                <td>
                    <form class="delete" onclick="return confirm('Are you sure?')" action="{{action('UsersController@destroy', $event['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Reject</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection