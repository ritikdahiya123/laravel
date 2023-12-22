<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="{{url('/form')}}">add user</a></h1>
    <table style="border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">id</th>
            <th style="border: 1px solid black;">name</th>
            <th style="border: 1px solid black;">email</th>
            <th style="border: 1px solid black;">password</th>
            <th style="border: 1px solid black;">image</th>
            <th style="border: 1px solid black;">delete</th>
            <th style="border: 1px solid black;">update</th>


        </tr>
        @foreach($customer as $entery){
         <tr>
         <td style="border: 1px solid black;"> {{$entery->id}}</td>
          <td style="border: 1px solid black;"> {{$entery->name}}</td>
          <td style="border: 1px solid black;">{{$entery->email}}</td>
          <td style="border: 1px solid black;">{{$entery->password}}</td>
          <td style="border: 1px solid black;">
    <img src="{{ asset('storage/uploads/' . $entery->image) }}" alt="" height="20px" width="20px">
</td>


          <td style="border: 1px solid black;"><a href="{{url('register/delete/')}}/{{$entery->id}}">delete</a></td>
          <td style="border: 1px solid black;"><a href="{{url('register/update/')}}/{{$entery->id}}">edit</a></td>

        </tr>
        }
        @endforeach
    </table>
</body>
</html>