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
                    function decrement() {
                        if (capnum > 0) {
                            capnum--;
                            document.getElementById('display').innerHTML = capnum;
                        }
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
                    function decrementh() {
                        if (capnumh > 0) {
                            capnumh--;
                            document.getElementById('displayh').innerHTML = capnumh;
                        }
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
                    function decrementr() {
                        if (capnumr > 0) {
                            capnumr--;
                            document.getElementById('displayr').innerHTML = capnumr;
                        }
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
                    function decrements() {
                        if (capnums > 0) {
                            capnums--;
                            document.getElementById('displays').innerHTML = capnums;
                        }
                    }
                </script>
                <button onclick="decrements()">-</button>
                <div id="displays" ><script type="text/javascript">document.write(capnums);</script></div>
            </div>
                <script>
                    function reset() {
                     var r =confirm("are you sure you want to reset the scores");
                     capnum = 0;
                     capnumh = 0;
                     capnumr = 0;
                     capnums = 0;
                     if(r == true) {
                         document.getElementById('display').innerHTML = capnum;
                         document.getElementById('displayh').innerHTML = capnumh;
                         document.getElementById('displayr').innerHTML = capnumr;
                         document.getElementById('displays').innerHTML = capnums;
                     }
                   
                    }
                </script>
                <button onclick="reset()">Reset</button>
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