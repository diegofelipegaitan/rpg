@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Encapsulation, getters and setters
        </div>
    </div>

    <div class="bd-example">
        First Problem
    </div>
    <div class="highlight">
        <pre><code>if( $person1-&#x3E;firstName = &#x27;Lucas&#x27; ) { }

// Now the value of firstName in the object $person1 will be &#x27;Lucas&#x27;</code></pre>
    </div>

    <div class="bd-example">
        Solution
    </div>
    <div class="highlight">
        <pre><code>class Person {
    protected $firstName; // public, protected &#x3C;-&#x3E; private
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        $this-&#x3E;firstName = $firstName;
        $this-&#x3E;lastName = $lastName;
    }

    public function getFirstName()
    {
        return strtolower($this-&#x3E;firstName);
    }

    public function setFirstName($firstName)
    {
       $this-&#x3E;firstName = $firstName;
    }

    public function getLastName()
    {
        return $this-&#x3E;lastName;
    }

    public function getFullName()
    {
        return $this-&#x3E;firstName . &#x27; &#x27; . $this-&#x3E;lastName;
    }
}</code></pre>
    </div>


@endsection