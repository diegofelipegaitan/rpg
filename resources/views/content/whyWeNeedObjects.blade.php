@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Why we need objects
        </div>
    </div>


    <div class="bd-example">
        Structured programming Example
    </div>
    <div class="highlight">
        <pre><code>$firstName = &#x27;Diego&#x27;;
$lastName = &#x27;Gait&#xE1;n&#x27;;

$fullName = &#x22;$firstName $lastName&#x22;;
echo &#x22;Hello $fullName&#x22;;

$firstName2 = &#x27;Felipe&#x27;;
$lastName2 = &#x27;Hidalgo&#x27;;

$fullName2 = &#x22;$firstName2 $lastName2&#x22;;
echo &#x22;Hello $fullName2&#x22;;</code></pre>
    </div>

    <div class="bd-example">
        POO
    </div>
    <div class="highlight">
        <pre><code>class Person
{
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName)
    {
        $this-&#x3E;firstName = $firstName;
        $this-&#x3E;lastName = $lastName;
    }
    public function fullName()
    {
        return $this-&#x3E;firstName . &#x27; &#x27; . $this-&#x3E;lastName;
    }
}
$person1 = new Person(&#x27;Diego&#x27;, &#x27;Gait&#xE1;n&#x27;);
$person2 = new Person(&#x27;Felipe&#x27;, &#x27;Hidalgo&#x27;);

echo &#x22;{$person1-&#x3E;fullName()} is friend of {$person2-&#x3E;fullName()}&#x22;;</code></pre>
    </div>


@endsection