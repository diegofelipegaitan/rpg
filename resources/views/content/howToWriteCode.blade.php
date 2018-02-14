@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            How to write code in PHP
        </div>
    </div>

    <div class="bd-example">
        Opening and Closing tags
    </div>
    <div class="highlight">
        <pre><code>&#x3C;?php
?&#x3E;</code></pre>
    </div>

    <div class="bd-example">
        Variables
    </div>
    <div class="highlight">
        <pre><code>$variable = 1;</code></pre>
    </div>

    <div class="bd-example">
        Constants
    </div>
    <div class="highlight">
        <pre><code>define(&#x22;FOO&#x22;, &#x22;something&#x22;);</code></pre>
    </div>

    <div class="bd-example">
        Conditionals: if/else
    </div>
    <div class="highlight">
        <pre><code>if( $condition ) {
} elseif( $condition ) {
else {
}</code></pre>
    </div>


    <div class="bd-example">
        Conditionals: if/else
    </div>
    <div class="highlight">
        <pre><code>if( $condition ) {
} elseif( $condition ) {
else {
}</code></pre>
    </div>

    <div class="bd-example">
        Conditionals: ternary conditional
    </div>
    <div class="highlight">
        <pre><code>$first ? $second : $third;</code></pre>
    </div>

    <div class="bd-example">
        Conditionals: switch
    </div>
    <div class="highlight">
        <pre><code>switch( $condition ) {
    case &#x22;1&#x22;:
        break;
    case &#x22;2&#x22;:
        break;
    default:
        break;
}</code></pre>
    </div>

    <div class="bd-example">
        Loops: while
    </div>
    <div class="highlight">
        <pre><code>while( $condition ) {
    // code
}</code></pre>
    </div>

    <div class="bd-example">
        Loops: do-while
    </div>
    <div class="highlight">
        <pre><code>do{
    // code
}while( $condition )</code></pre>
    </div>

    <div class="bd-example">
        Loops: for
    </div>
    <div class="highlight">
        <pre><code>for( $i = 1; $i < $j ; $i++ ){
    // code
}</code></pre>
    </div>

    <div class="bd-example">
        Loops: foreach
    </div>
    <div class="highlight">
        <pre><code>foreach( $items as $key =&#x3E; $item ){
    // code
}</code></pre>
    </div>

    <div class="bd-example">
        break / continue
    </div>

    <div class="bd-example">
        Functions
    </div>
    <div class="highlight">
        <pre><code>function functionName($arg1 , $arg2 = "something" , &$arg3 , int $arg4){
    return $value;
}</code></pre>
    </div>

    <div class="bd-example">
        Anonymous Functions
    </div>
    <div class="highlight">
        <pre><code>$greet = function($name)
{
    printf(&#x22;Hello %s\r\n&#x22;, $name);
};

$greet(&#x27;World&#x27;);</code></pre>
    </div>
    <div class="highlight">
        <pre><code>$example = function () use ($message) {
    var_dump($message);
};

$message = &#x27;world&#x27;;
$example();
$example(&#x22;hello&#x22;);</code></pre>
    </div>

    <div class="bd-example">
        Simple Class
    </div>
    <div class="highlight">
        <pre><code>class SimpleClass
{
    // property declaration
    public $var = &#x27;a default value&#x27;;

    // method declaration
    public function displayVar() {
        echo $this-&#x3E;var;
    }
}</code></pre>
    </div>

    <div class="bd-example">
        Creating an instance
    </div>
    <div class="highlight">
        <pre><code>$instance = new SimpleClass();

// This can also be done with a variable:
$className = &#x27;SimpleClass&#x27;;
$instance = new $className(); // new SimpleClass()</code></pre>
    </div>

@endsection