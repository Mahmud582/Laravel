<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="requestSubmitData" method="post">
        @CSRF
       
        <input type="text" name="name" value=" {{ old('name') }}" placeholder="Enter name"></input> </br>
        <input type="number" name="age" placeholder="Enter age"></input> </br>
        <input type="submit" value="OK"></input>  </br>


    </form  >
</body>
</html>