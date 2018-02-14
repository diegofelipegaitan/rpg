<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function howToWriteCode(Request $request)
    {
        return view( 'content.howToWriteCode' );
    }

    public function whyWeNeedObjects(Request $request)
    {
        return view( 'content.whyWeNeedObjects' );
    }

    public function encapsulationGettersSetters(Request $request)
    {
        return view( 'content.encapsulationGettersSetters' );
    }

    public function inheritanceAbstraction(Request $request)
    {
        return view( 'content.inheritanceAbstraction' );
    }

    public function interfacesPolymorphism(Request $request)
    {
        return view( 'content.interfacesPolymorphism' );
    }

    public function autoloadingMamespaces(Request $request)
    {
        return view( 'content.autoloadingMamespaces' );
    }

    public function staticMethodsProperties(Request $request)
    {
        return view( 'content.staticMethodsProperties' );
    }

    public function overloading(Request $request)
    {
        return view( 'content.overloading' );
    }

    public function traits(Request $request)
    {
        return view( 'content.traits' );
    }

}
