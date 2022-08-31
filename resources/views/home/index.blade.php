@extends('layouts.app')

@section('content')
    <banner-full-width :banners="{{ $banners }}">
    </banner-full-width>

    <search-home></search-home>

    <products-home section="deals" title="Promoções" subtitle="válido de 01 a 31 de março de 2020">
    </products-home>

    <products-home section="bestSellers" title="Mais Vendidos">
    </products-home>

    <products-home section="suggestions" title="Sugestões">
    </products-home>

    <blog-home></blog-home>
    
    <partners-home :partners="{{ $partners }}"></partners-home>
@endsection
