<!DOCTYPE html>
<html>
<head>
<style>
.myDiv {
  border: 5px outset red;
  background-color: lightblue;    
  text-align: center;
}
</style>
<title>SOEN TRIAL PAGE</title>
</head>
<body style="background-color:powderblue;">

<h1>Welcome to a bland test page</h1>
<p> we can use p for paragraphs...</p>
<hr>
<div class="myDiv">
<h2>This is heading 2 can go up to 6 i think</h2>
<p style="background-color:Tomato;"><br> this is how u link stuffs</p>
<p>{{$type}}-{{$time}}-{{$aminutes}} </p>

@if($aminutes > 60)<p> too much time  gone </p>
@elseif($aminutes < 60)<p> the time is just right </p>
@endif
</div>
@unless($type =='assign')<p> there are no assginements</p>
@endunless
<a href="https://www.w3schools.com">This is a link</a>

</body>
</html>