@extends('layouts.app')

@section('title', config( 'app.name' ) )

@section('content')
    <div class="content">
        <div class="title m-b-md">
            PHP Fundamentals. <br />Who POO works in PHP
        </div>
    </div>

    <div>

        <ul>
            <li><a href="{{ route( 'who-to-write-code-in-php' ) }}" >How to write conde in PHP</a></li>
            <li><a href="{{ route( 'why-we-need-objects' ) }}">Why we need objects</a></li>
            <li><a href="{{ route( 'encapsulation-getters-setters' ) }}">Encapsulation, getters and setters</a></li>
            <li><a href="{{ route( 'inheritance-abstraction' ) }}">Inheritance and Abstraction</a></li>
            <li><a href="{{ route( 'interaction-between-objects' ) }}">Interaction between objects</a></li>
            <li><a href="{{ route( 'interfaces-polymorphism' ) }}">Interfaces and Polymorphism</a></li>
            <li><a href="{{ route( 'autoloading-namespaces' ) }}">Autoloading and Namespaces</a></li>
            <li><a href="{{ route( 'composer-psr-4' ) }}">Composer and PSR-4</a></li>
            <li><a href="{{ route( 'factory-value-objects' ) }}">Factory and Value Objects</a></li>
            <li><a href="{{ route( 'refactor' ) }}">Conditionals and Structured programming Refactor</a></li>
            <li><a href="{{ route( 'static-methods-properties' ) }}">Static Methods and Properties</a></li>
            <li><a href="{{ route( 'constructores' ) }}">Constructores semánticos e interfaces fluidas</a></li>
            <li><a href="{{ route( 'facades-interfaces' ) }}">Facades and Interfaces</a></li>
            <li><a href="{{ route( 'constants' ) }}">Who to use Constants in PHP</a></li>
        </ul>

    </div>
@endsection
