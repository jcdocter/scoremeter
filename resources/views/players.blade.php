@extends('layouts.players')

@section('content')
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



<script src="{{mix('js/app.js')}}"></script>
@endsection