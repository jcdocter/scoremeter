@extends('layouts.players')

@section('content')
    <html>
    <head>
        <title>Space Clicker</title>
    <style>
img{
    width: 50%;
    display: inline-block;
}
        *{
            box-sizing: border-box;
        }

        .col {
            float: left;
            width: 25%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        button{
            display: inline-block;
            background-color: red;
            width: 14%;
        }
        .row{
            display: inline;
        }

    </style>
    </head>


    <body>
    <ul id="users"></ul>
{{--  <form id="myform" onsubmit="return addUser()">

        <input id="firstname" type="text" name="firstname" placeholder="first name"/>
        <input id="lastname" type="text" name="lastname" placeholder="last name"/>
        <button type="submit">add user</button>
    </form>

    <table align="center" border="1px" style="width:600px; line-height:40px;">
                <t>
            @foreach ($participants as $participant)
                <tr>
                <th>

                {{$participant ->firstname}}
                    {{$participant ->lastname}}

                </th>
                </tr>
                    @endforeach

        </t>
        --}}
        <div class="container">
            <div class="row ">


                <div class="col">
                    <div id="Gryffindor"></div>
                    <img src="images/gryffindor.jpg" />
                    <button id="incrementG">+</button>
                    <button id="decrementG">-</button>
                    <div id="counterG">0</div>
                    <script type="text/javascript" src="{{asset('/../resources/js/components/Gryffindor.js')}}"></script>
            </div>


            <div class="col">
                <div id="Slytherin"></div>
                <img src= "images/slytherin.jpg" />
                <button id="incrementS" >+</button>
                <button id="decrementS">-</button>
                <div id="counterS" >0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Slytherin.js')}}"></script>
                </div>


            <div class="col">
               <div id="Hufflepuff"></div>
                <img src="images/hufflepuff.jpg"/>
                <button id="incrementH" >+</button>
                <button id="decrementH">-</button>
                <div id="counterH" >0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Hufflepuff.js')}}"></script>
            </div>


            <div class="col">
              <div id="Ravenclaw"></div>
                <img src= "images/ravenclaw.jpg"/>
                <button id="incrementR" >+</button>
                <button id="decrementR">-</button>
                <div id="counterR" >0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Ravenclaw.js')}}"></script>
            </div>


                <button onclick="reset()">Reset</button>
                <script type="text/javascript" src="{{asset('/../resources/js/components/reset.js')}}"></script>
        </div>
    </div>

 {{--   <script type="text/javascript">
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
--}}

<script src="{{mix('js/app.js')}}"></script>
@endsection
    </body>
    </html>