@extends('layouts.players')

@section('content')

    <html>
    <head>
        <title>Space Clicker</title>
    </head>

    <body>
    <ul id="users"></ul>
    <form id="myform" onsubmit="return addUser()">

        <input id="firstname" type="text" name="firstname" placeholder="first name"/>
        <input id="lastname" type="text" name="lastname" placeholder="last name"/>
        <button type="submit">add user</button>
    </form>

    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Gryffindor</h2></th>
        </tr>

        <t>
            @foreach ($participants as $participant)
                <th>

                {{$participant ->firstname}}
                    {{$participant ->lastname}}

                </th>
                    @endforeach

        </t>
    </table>
    <script type="text/javascript">
        var list = document.getElementById('users');

        function addUser(){
            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;
            var entry = document.createElement('li');
            entry.appendChild(document.createTextNode(firstname + ' ' + lastname));
            list.appendChild(entry);

            return false;
        }


    </script>


    <script src="{{mix('js/app.js')}}"></script>
@endsection