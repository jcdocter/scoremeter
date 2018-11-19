@extends('layouts.players')

@section('content')

    <html>
    <head>
        <title>Space Clicker</title>
    </head>

    <body>
    <ul id="users"></ul>
{{--  <form id="myform" onsubmit="return addUser()">

        <input id="firstname" type="text" name="firstname" placeholder="first name"/>
        <input id="lastname" type="text" name="lastname" placeholder="last name"/>
        <button type="submit">add user</button>
    </form>
--}}
    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="4"><h2>Gryffindor</h2></th>
        </tr>
<div class="container">
        <div class="row ">
            <div class="col">
                <div id="Gryffindor"></div>
                <script type="text/javascript">
                    var capnum = 0;
                    function increment(){
                        capnum++;
                        document.getElementById('display').innerHTML = capnum;
                    }
                </script>
                <button onclick="increment()">+</button>

                <script type="text/javascript">
                    var capnum = 0;
                    function decrement(){
                        capnum--;
                        document.getElementById('display').innerHTML = capnum;
                    }
                </script>
                <button onclick="decrement()">-</button>
                <div id="display"><script type="text/javascript">document.write(capnum);</script></div>
            </div>
            </div>
            <div class="col">
                <div id="Slytherin"></div>
            </div>
            <div class="col">
               <div id="Hufflepuff"></div>
            </div>
            <div class="col">
              <div id="Ravenclaw"></div>
            </div>
        </div>
    </div>

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
    </body>
    </html>