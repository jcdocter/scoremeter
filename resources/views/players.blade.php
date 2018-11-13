@extends('layouts.players')

@section('content')

<?php
/*include_once('includes/connection.php');
$query ="SELECT * FROM participants";
$result =mysql_query($query);
*/
?>



    <html>
    <head>
        <title>Space Clicker</title>
    </head>

    <body>

    <?php
    /**
     * Created by PhpStorm.
     * User: Joey
     * Date: 8-5-2017
     * Time: 13:24
     */




    ?>
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