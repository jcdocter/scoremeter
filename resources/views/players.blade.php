@extends('layouts.players')

@section('content')
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



    <div class="container">
        <div class="row ">


            <div class="col">
                <div id="Gryffindor"></div>
                <img src="images/gryffindor.jpg" />
                <script type="text/javascript">
                    var capnum = 0;
                    function increment(){
                        capnum++;
                        document.getElementById('display').innerHTML = capnum;

                    }
                </script>
                <button onclick="increment()">+</button>

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

        <t>
            @foreach ($participants as $participant)
                <th>

                {{$participant ->firstname}}
                    {{$participant ->lastname}}

                </th>
                    @endforeach

        </t>

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
                <div id="display" ><script type="text/javascript">document.write(capnum);</script></div>



            </div>
            <div class="col">
                <div id="Slytherin"></div>
                <img src="images/hufflepuff.jpg" />

                <script type="text/javascript">
            var capnumh = 0;
            function incrementh(){
                capnumh++;
                document.getElementById('displayh').innerHTML = capnumh;
            }
                </script>
                <button onclick="incrementh()" >+</button>

                <script type="text/javascript">
                    var capnumh = 0;
                    function decrementh(){
                        capnumh--;
                        document.getElementById('displayh').innerHTML = capnumh;
                    }
                </script>
                <button onclick="decrementh()">-</button>
                <div id="displayh" ><script type="text/javascript">document.write(capnumh);</script></div>



                </div>
            <div class="col">
               <div id="Hufflepuff"></div>
                <img src="images/ravenclaw.jpg"/>
                <script type="text/javascript">
                    var capnumr = 0;
                    function incrementr(){
                        capnumr++;
                        document.getElementById('displayr').innerHTML = capnumr;
                    }
                </script>
                <button onclick="incrementr()" >+</button>

                <script type="text/javascript">
                    var capnumr = 0;
                    function decrementr(){
                        capnumr--;
                        document.getElementById('displayr').innerHTML = capnumr;
                    }
                </script>
                <button onclick="decrementr()">-</button>
                <div id="displayr" ><script type="text/javascript">document.write(capnumr);</script></div>
            </div>
            <div class="col">
              <div id="Ravenclaw"></div>
                <img src="images/slytherin.jpg" />
                <script type="text/javascript">
                    var capnums = 0;
                    function increments(){
                        capnums++;
                        document.getElementById('displays').innerHTML = capnums;
                    }
                </script>-
                <button onclick="increments()" >+</button>

                <script type="text/javascript">
                    var capnums = 0;
                    function decrements(){
                        capnums--;
                        document.getElementById('displays').innerHTML = capnums;
                    }
                </script>
                <button onclick="decrements()">-</button>
                <div id="displays" ><script type="text/javascript">document.write(capnums);</script></div>
            </div>
        </div>
    </div>

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