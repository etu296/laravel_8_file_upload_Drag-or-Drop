<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <body>
            <style>
                .title{
                    background-color: aqua;
                    width: auto;
                    height: 50px;
                    text-align: center;
                }
                .sidebar{
                    background-color: black;
                    width: auto;
                    height: 50px;
                    color: white;
                    text-align: center;
                    padding-top: 10px;
                   
                }
                .content{
                    background-color: pink;
                    width: auto;
                    height: 500px;
                    color: black;
                    text-align: center;
                    padding-top: 10px;
                }
            </style>
           <div class="title"> <h1>laravel_8_file_upload</h1></div>
           <div class="sidebar">
               <ul>
                <button>Home</button>
                <a href="{{route('files.upload')}}">
                <button >File</button></a>
                </ul>
                
           </div>
           <div class="content">
           <h1>Upload your file</h1>
           @yield('content')
           </div>
       
    </body>
</html>
