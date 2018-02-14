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

    public function interactionBetweenObjects(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function interfacesPolymorphism(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function autoloadingMamespaces(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function composerPsr4(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function factoryValueObjects(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function refactor(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function staticMethodsProperties(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function constructores(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function facadesInterfaces(Request $request)
    {
        dd(__FUNCTION__);
    }

    public function constants(Request $request)
    {
        dd(__FUNCTION__);
    }

}
