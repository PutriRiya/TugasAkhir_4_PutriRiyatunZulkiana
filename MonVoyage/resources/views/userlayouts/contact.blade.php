<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.con {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 3%;
  margin-right: 3%;
}
</style>
</head>
<body>

<h3 style="margin-left: 3%;">Contact Form</h3>

<div class="con">
  <form action="{{ route('contact.store') }}" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name...">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email...">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>

    <button type="submit" class="btn btn-success">KIRIM</button>
</form>
</div>

</body>
</html>
