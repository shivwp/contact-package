<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    <h1>Contact us</h1>
    <form action="{{route('send.contact')}}" method="post">
     @csrf
     <label>Name</label>
     <input type="text" name="name" placeholder="Enter Your Name Pls" required></br></br>
     
     <label>Email Id</label>
     <input type="email" name="email" placeholder="Enter Your Email Id" required></br></br>
     <label>Massage</label>
     <textarea type="text" name="massage"  placeholder="Enter Your Name"></textarea></br></br>

     <button type="submit">Send</button>



    </form>
</body>
</html>