@extends('layouts.app')

@section('sidebar')
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            PHP Fundamentals. <br />Who POO works in PHP
        </div>
    </div>

    <div>

        <ul>
            <li><a href="{{ route( 'how-to-write-code-in-php' ) }}" >How to write code in PHP</a></li>
            <li><a href="{{ route( 'why-we-need-objects' ) }}">Why we need objects</a></li>
            <li><a href="{{ route( 'encapsulation-getters-setters' ) }}">Encapsulation, getters and setters</a></li>
            <li><a href="{{ route( 'inheritance-abstraction' ) }}">Inheritance and Abstraction</a></li>
            <li><a href="{{ route( 'interfaces-polymorphism' ) }}">Interfaces and Polymorphism</a></li>
            <li><a href="{{ route( 'autoloading-namespaces' ) }}">Autoloading and Namespaces</a></li>
            <li><a href="{{ route( 'static-methods-properties' ) }}">Static Methods and Properties</a></li>
            <li><a href="{{ route( 'traits' ) }}">Traits</a></li>
            <li><a href="{{ route( 'overloading' ) }}">Overloading</a></li>
        </ul>

    </div>
@endsection
