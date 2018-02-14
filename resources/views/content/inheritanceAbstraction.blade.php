@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Inheritance and Abstraction
        </div>
    </div>

    <div class="bd-example">
        Inheritance
    </div>
    <div class="highlight">
        <pre><code>class Fruit {
    private $color;

    public function eat() {
        //
    }

    public function setColor($c) {
        $this-&#x3E;color = $c;
    }
}

class Apple extends Fruit {
    public function eat() {
        //
    }
}

class Orange extends Fruit {
    public function eat() {
        //
    }
} </code></pre>
    </div>

    <div class="bd-example">
        Abstraction
    </div>
    <div class="highlight">
        <pre><code>abstract class Fruit {
    private $color;

    abstract public function eat();

    public function setColor($c) {
        $this-&#x3E;color = $c;
    }
}</code></pre>
    </div>

@endsection