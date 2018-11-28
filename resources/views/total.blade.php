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
                <div id="counterG">0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Gryffindor.js')}}"></script>
            </div>

            <div class="col">
                <div id="Slytherin"></div>
                <img src="images/slytherin.jpg" />
                <div id="counterS" >0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Slytherin.js')}}"></script>
            </div>

            <div class="col">
                <div id="Hufflepuff"></div>
                <img src="images/hufflepuff.jpg"/>
                <div id="counterH" >0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Hufflepuff.js')}}"></script>
            </div>

            <div class="col">
                <div id="Ravenclaw"></div>
                <img src="images/ravenclaw.jpg" />
                <div id="counterR" >0</div>
                <script type="text/javascript" src="{{asset('/../resources/js/components/Ravenclaw.js')}}"></script>
            </div>
        </div>
       
        <script type="text/javascript" src="{{asset('/../resources/js/components/reset.js')}}"></script>
    </div>
    </div>



    <script src="{{mix('js/app.js')}}"></script>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


@endsection
