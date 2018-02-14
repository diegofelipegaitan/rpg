@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Autoloading and Namespaces
        </div>
    </div>

    <div class="bd-example">
        AutoLoading
    </div>
    <div class="highlight">
        <pre><code>spl_autoload_register(function ($className) {
    require &#x22;src/$className.php&#x22;;
});</code></pre>
    </div>

    <div class="bd-example">
        Namespaces. Part 1. Define Namespaces
    </div>
    <div class="highlight">
        <pre><code>namespace nameSpace1;

class foo{
    function bar(){
    }
}

namespace nameSpace2;

class foo{
    function bar(){
    }
} </code></pre>
    </div>

    <div class="bd-example">
        Namespaces. Part 2. Call Classes with Namespaces
    </div>
    <div class="highlight">
        <pre><code>use nameSpace1\foo as foo1;
use nameSpace2\foo as foo2;

foo1::bar();
foo2::bar();</code></pre>
    </div>


@endsection