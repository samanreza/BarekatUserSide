<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php $count = 0 ?>
            @foreach($result as $key => $item)
                <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{$count}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$count}}" aria-expanded="false" aria-controls="flush-collapse{{$count}}" data-index="{{$count}}">
                                    <h4> {{$item->title}} </h4>
                                </button>
                        </h2>
                        @if(count($item['childs']) > 0)
                            @foreach($item['childs'] as $child)
                                <div id="flush-collapse{{$count}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$count}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body"><h5>{{$child->title}}</h5></div>
                                </div>
                            @endforeach
                        @endif
                </div>
                <?php ++$count ?>
            @endforeach
        </div>
</div>
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.3.min.js')}}"></script>
</html>
