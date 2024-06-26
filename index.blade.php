<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<style>
    img{
  height:150px;
  width:100%;
}

div [class^="col-"]{
  padding-left:5px;
  padding-right:5px;
}
.card{
  transition:0.5s;
  cursor:pointer;
}
.card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}
</style>
</head>

<body>

    <div class="container mt-2">
        <!--   <div class="card card-block mb-2">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">Welcom to bootstrap card styles</p>
            <a href="#" class="btn btn-primary">Submit</a>
          </div>   -->
          <div class="row">
            @foreach($courses as $value)

            <div class="col-md-3 col-sm-6">
              <div class="card card-block">
              <h4 class="card-title text-right"><i class="material-icons">animé par : {{$value -> fname }}</i></h4>
            <img src="{{ $value -> image }}" alt="Photo of sunset">
                <h5 class="card-title mt-3 mb-3">{{ $value -> title }}</h5>
                <p class="card-text">{{ $value -> description }}</p> 
          </div>
            </div>
            @endforeach
           
              
          </div>
          
        </div>
        
</body>
</html>


