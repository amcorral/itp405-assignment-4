<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Single Tweet </title>
    <link rel="stylesheet" <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      Twitter Clone
    </header>

    <h3> Check Out This Tweet! </h3>
    <div id="top">
        @foreach ($tweets as $tweet)
          {{$tweet->tweet}}
        @endforeach
    </div>

    <a href="/"> <h4> Return To Fake Twitter </h4> </a>

  </body>
</html>

<style>

    header{
      background-color: #91AFFF;
      padding: 1em;
      height: 75px;
      font-size: 25px;
      text-align: center;
      font-family: "verdana";
    }

    h3 {
      margin: 25px;
    }

    h4 {
      margin: 25px;
    }

    #top {
      width: 90%;
      margin: 25px;
      height: 100px;
      border-style: solid;
      border-width: thin;
      font-size: 20px;
      padding-left: 10px;
      padding-top: 10px;
      border-radius: 10px;
      font-family: verdana;
    }

</style>
