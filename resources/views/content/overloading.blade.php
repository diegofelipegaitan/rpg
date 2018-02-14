@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Overloading
        </div>
    </div>

    <div class="bd-example">
        Overloading properties
    </div>
    <div class="highlight">
        <pre><code>class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();

    /**  Overloading not used on declared properties.  */
    public $declared = 1;

    /**  Overloading only used on this when accessed outside the class.  */
    private $hidden = 2;

    public function __set($name, $value)
    {
        echo &#x22;Setting &#x27;$name&#x27; to &#x27;$value&#x27;\n&#x22;;
        $this-&#x3E;data[$name] = $value;
    }

    public function __get($name)
    {
        echo &#x22;Getting &#x27;$name&#x27;\n&#x22;;
        if (array_key_exists($name, $this-&#x3E;data)) {
            return $this-&#x3E;data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            &#x27;Undefined property via __get(): &#x27; . $name .
            &#x27; in &#x27; . $trace[0][&#x27;file&#x27;] .
            &#x27; on line &#x27; . $trace[0][&#x27;line&#x27;],
            E_USER_NOTICE);
        return null;
    }

    /**  As of PHP 5.1.0  */
    public function __isset($name)
    {
        echo &#x22;Is &#x27;$name&#x27; set?\n&#x22;;
        return isset($this-&#x3E;data[$name]);
    }

    public function __unset($name)
    {
        echo &#x22;Unsetting &#x27;$name&#x27;\n&#x22;;
        unset($this-&#x3E;data[$name]);
    }

    /**  Not a magic method, just here for example.  */
    public function getHidden()
    {
        return $this-&#x3E;hidden;
    }
}


echo &#x22;&#x3C;pre&#x3E;\n&#x22;;

$obj = new PropertyTest;

$obj-&#x3E;a = 1;
echo $obj-&#x3E;a . &#x22;\n\n&#x22;;

var_dump(isset($obj-&#x3E;a));
unset($obj-&#x3E;a);
var_dump(isset($obj-&#x3E;a));
echo &#x22;\n&#x22;;

echo $obj-&#x3E;declared . &#x22;\n\n&#x22;;

echo &#x22;Let&#x27;s experiment with the private property named &#x27;hidden&#x27;:\n&#x22;;
echo &#x22;Privates are visible inside the class, so __get() not used...\n&#x22;;
echo $obj-&#x3E;getHidden() . &#x22;\n&#x22;;
echo &#x22;Privates not visible outside of class, so __get() is used...\n&#x22;;
echo $obj-&#x3E;hidden . &#x22;\n&#x22;;</code></pre>
    </div>

    <div class="bd-example">
        Result
    </div>
    <div class="highlight">
        <pre><code>Setting &#x27;a&#x27; to &#x27;1&#x27;
Getting &#x27;a&#x27;
1

Is &#x27;a&#x27; set?
bool(true)
Unsetting &#x27;a&#x27;
Is &#x27;a&#x27; set?
bool(false)

1

Let&#x27;s experiment with the private property named &#x27;hidden&#x27;:
Privates are visible inside the class, so __get() not used...
2
Privates not visible outside of class, so __get() is used...
Getting &#x27;hidden&#x27;


Notice:  Undefined property via __get(): hidden in &#x3C;file&#x3E; on line 70 in &#x3C;file&#x3E; on line 29</code></pre>
    </div>

    <div class="bd-example">
        Overloading methods
    </div>
    <div class="highlight">
        <pre><code>class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo &#x22;Calling object method &#x27;$name&#x27; &#x22;
             . implode(&#x27;, &#x27;, $arguments). &#x22;\n&#x22;;
    }

    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo &#x22;Calling static method &#x27;$name&#x27; &#x22;
             . implode(&#x27;, &#x27;, $arguments). &#x22;\n&#x22;;
    }
}

$obj = new MethodTest;
$obj-&#x3E;runTest(&#x27;in object context&#x27;);

MethodTest::runTest(&#x27;in static context&#x27;);</code></pre></div>

    <div class="bd-example">
        Result
    </div>
    <div class="highlight">
        <pre><code>Calling object method &#x27;runTest&#x27; in object context
Calling static method &#x27;runTest&#x27; in static context</code></pre></div>

@endsection