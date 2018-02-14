@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Static Methods and Properties
        </div>
    </div>

    <div class="bd-example">
        Static Properties
    </div>
    <div class="highlight">
        <pre><code>class Person {

    protected static $name = &#x27;Diego&#x27;;

    public function __construct($name)
    {
        static::$name = $name;
    }

    public function getName()
    {
        return static::$name;
    }

}

echo Person::$name;</code></pre>
    </div>

    <div class="bd-example">
        Static Methods
    </div>
    <div class="highlight">
        <pre><code>class Person {

    protected static $name = &#x27;Diego&#x27;;

    public function __construct($name)
    {
        static::$name = $name;
    }

    public static function getName()
    {
        return static::$name;
    }

}

echo Person::getName();</code></pre>
    </div>


@endsection