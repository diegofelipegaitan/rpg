@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Traits
        </div>
    </div>

    <div class="bd-example">
        Trait Example
    </div>
    <div class="highlight">
        <pre><code>class Base {
    public function sayHello() {
        echo &#x27;Hello &#x27;;
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo &#x27;World!&#x27;;
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o-&#x3E;sayHello();</code></pre>
    </div>

    <div class="bd-example">
        Abstract Trait Members
    </div>
    <div class="highlight">
        <pre><code>trait Hello {
    public function sayHelloWorld() {
        echo &#x27;Hello&#x27;.$this-&#x3E;getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this-&#x3E;world;
    }
    public function setWorld($val) {
        $this-&#x3E;world = $val;
    }
}</code></pre>
    </div>

    <div class="bd-example">
        Abstract Static Methods
    </div>
    <div class="highlight">
        <pre><code>trait StaticExample {
    public static function doSomething() {
        return &#x27;Doing something&#x27;;
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();</code></pre>
    </div>

    <div class="bd-example">
        Abstract Static Methods
    </div>
    <div class="highlight">
        <pre><code>trait StaticExample {
    public static function doSomething() {
        return &#x27;Doing something&#x27;;
    }
}

class Example {
    use StaticExample;
}

Example::doSomething();</code></pre>
    </div><

    <div class="bd-example">
        Defining Properties
    </div>
    <div class="highlight">
        <pre><code>trait PropertiesTrait {
    public $x = 1;
}

class PropertiesExample {
    use PropertiesTrait;
}

$example = new PropertiesExample;
$example-&#x3E;x;</code></pre>
    </div>

@endsection