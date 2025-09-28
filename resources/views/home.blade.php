@include('common.header')
<br>
<br>
<style>
    .success{
        color: green;
        font-weight: bold;
        background-color: lightgrey;
        padding: 10px;
    }

    .error{
        color: red;
        font-weight: bold;
        background-color: lightgrey;
        padding: 10px;
    }

    .warning{
        color: orange;
        font-weight: bold;
        background-color: lightgrey;
        padding: 10px;
    }
</style>
<x-message-banner msg="User login successfully" class="success"/> <br> <br>

<x-message-banner msg="User signup successfully" class="success"/> <br> <br>

<x-message-banner msg="Invalid user credentials" class="error" /> <br> <br>

<x-message-banner msg="Your account will be deleted in 3 days" class="warning"/> <br> <br>

<div>
    <h1>User Homepage</h1>
    <p>
        <b>{{$user}}</b>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam tempore tenetur eligendi praesentium itaque autem vel culpa provident. Voluptatum magnam placeat suscipit repudiandae sed eveniet magni nostrum veritatis exercitationem?</p>
    </p>
    <p>
        <h1>Random Numbers</h1>
        {{rand(0,100)}}
    </p>

    <div>
        <h1>Leap Year Checker</h1>
        @if($year%400==0)
        <h3>Leap year</h3>
        @elseif($year%100==0)
        <h3>Not a Leap year</h3>
        @elseif($year%4==0)
        <h3>Leap year</h3>
        @else
        <h3>Not a Leap year</h3>
        @endif
    </div>

    <div>
        <h2>For each loop</h2>
        @foreach($fruits as $fruit)
        <h4>{{$fruit}}</h4>
        @endforeach
    </div>

    <div>
        <h2>for loop</h2>
        @for($i=1;$i<=10;$i++)
        @if($i%2==0)
        <h4>{{$i}} is even number</h4>
        @else
        <h4>{{$i}} is odd number</h4>
        @endif
        @endfor
    </div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
