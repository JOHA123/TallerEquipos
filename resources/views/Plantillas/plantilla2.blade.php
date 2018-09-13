<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de @yield('title') </title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <td colspan=2><center><b> @yield('title_table') </b</center></td>
        </tr>

        @php($counter=1)

            @foreach($equipos as $e)      
        
                 @php($counter++)

                @if($counter >=2)
            
                    <tr></tr>
                    @php($counter=0)

                @endif

                     <td> {{$e}} </td>

            @endforeach
        
        


        <tr>
            <td colspan=2><center><b> @yield('footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>