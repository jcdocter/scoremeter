@extends('layouts.total')
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

                    function updateDiv()
                    {
                        $( "#display" ).load(window.location.href + " #display" );
                    }
                </script>

                <script type="text/javascript">
                    var capnum = 0;
                    function decrement(){
                        capnum--;
                        document.getElementById('display').innerHTML = capnum;
                    }
                </script>
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

                <script type="text/javascript">
                    var capnumh = 0;
                    function decrementh(){
                        capnumh--;
                        document.getElementById('displayh').innerHTML = capnumh;
                    }
                </script>
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

                <script type="text/javascript">
                    var capnumr = 0;
                    function decrementr(){
                        capnumr--;
                        document.getElementById('displayr').innerHTML = capnumr;
                    }
                </script>
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
                </script>

                <script type="text/javascript">
                    var capnums = 0;
                    function decrements(){
                        capnums--;
                        document.getElementById('displays').innerHTML = capnums;
                    }
                </script>

                <div id="displays" ><script type="text/javascript">document.write(capnums);</script></div>
            </div>

        </div>
    </div>
    </div>



    <script src="{{mix('js/app.js')}}"></script>
    <script src"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


@endsection
