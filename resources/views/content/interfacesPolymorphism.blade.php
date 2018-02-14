@extends('layouts.app')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset( 'css/fix_flex_center.css' ) }}">

    <div class="content">
        <div class="title m-b-md">
            Interfaces and Polymorphism
        </div>
    </div>

    <div class="bd-example">
        Interfaces
    </div>
    <div class="highlight">
        <pre><code>interface MyInterface {
    public function doThis();
    public function doThat();
    public function setName($name);
}</code></pre>
    </div>

    <div class="bd-example">
        Implementation Interface
    </div>
    <div class="highlight">
        <pre><code>// VALID
class MyClass implements MyInterface {
    protected $name;
    public function doThis() {
        // code that does this
    }
    public function doThat() {
        // code that does that
    }
    public function setName($name) {
        $this-&#x3E;name = $name;
    }
}

// INVALID
class MyClass implements MyInterface {
    // missing doThis()!

    private function doThat() {
        // this should be public!
    }
    public function setName() {
        // missing the name argument!
    }
}</code></pre>
    </div>

    <div class="bd-example">
        Polymorphism. Step 1: Identify The Problem
    </div>
    <div class="highlight">
        <pre><code>class poly_base_Article {
    public $title;
    public $author;
    public $date;
    public $category;

    public function  __construct($title, $author, $date, $category = 0) {
        $this-&#x3E;title = $title;
        $this-&#x3E;author = $author;
        $this-&#x3E;date = $date;
        $this-&#x3E;category = $category;
    }
}</code></pre>
    </div>
    <div class="highlight">
        <pre><code>class poly_base_Article {
    //...
    public function write($type) {
        $ret = '';
        switch($type) {
            case 'XML':
                $ret = '<article>';
                $ret .= '<title>' . $obj->title . '</title>';
                $ret .= '<author>' . $obj->author . '</author>';
                $ret .= '<date>' . $obj->date . '</date>';
                $ret .= '<category>' . $obj->category . '</category>';
                $ret .= '</article>';
                break;
            case 'JSON':
                $array = array('article' => $obj);
                $ret = json_encode($array);
                break;
        }
        return $ret;
    }
}</code></pre>
    </div>

    <div class="bd-example">
        Polymorphism. Step 2: Define Your Interface
    </div>
    <div class="highlight">
        <pre><code>interface poly_writer_Writer {
    public function write(poly_base_Article $obj);
}</code></pre>
    </div>

    <div class="bd-example">
        Polymorphism. Step 3: Create Your Implementation
    </div>
    <div class="highlight">
        <pre><code>class poly_writer_XMLWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $ret = '<article>';
        $ret .= '<title>' . $obj->title . '</title>';
        $ret .= '<author>' . $obj->author . '</author>';
        $ret .= '<date>' . $obj->date . '</date>';
        $ret .= '<category>' . $obj->category . '</category>';
        $ret .= '</article>';
        return $ret;
    }
}</code></pre>
    </div>
    <div class="highlight">
        <pre><code>class poly_writer_JSONWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $array = array('article' => $obj);
        return json_encode($array);
    }
}</code></pre>
    </div>

    <div class="bd-example">
        Polymorphism. Step 4: Use Your Implementation
    </div>
    <div class="highlight">
        <pre><code>class poly_base_Article {
    //...
    public function write(poly_writer_Writer $writer) {
        return $writer-&#x3E;write($this);
    }
}</code></pre>
    </div>
    <div class="highlight">
        <pre><code>class poly_base_Factory {
    public static function getWriter() {
        // grab request variable
        $format = $_REQUEST[&#x27;format&#x27;];
        // construct our class name and check its existence
        $class = &#x27;poly_writer_&#x27; . $format . &#x27;Writer&#x27;;
        if(class_exists($class)) {
            // return a new Writer object
            return new $class();
        }
        // otherwise we fail
        throw new Exception(&#x27;Unsupported format&#x27;);
    }
}</code></pre>
    </div>

    <div class="bd-example">
        Polymorphism. Step 5: Put It All Together
    </div>
    <div class="highlight">
        <pre><code>$article = new poly_base_Article(&#x27;Polymorphism&#x27;, &#x27;Diego&#x27;, time(), 0);

try {
    $writer = poly_base_Factory::getWriter();
}
catch (Exception $e) {
    $writer = new poly_writer_XMLWriter();
}

echo $article-&#x3E;write($writer);</code></pre>
    </div>

@endsection