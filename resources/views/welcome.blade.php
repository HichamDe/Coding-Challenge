@extends('layout.master')
@section('title' , 'YouCan.Shop')
@section("content")

    <div class="pco_w100 flex-m" id="f_product_search">
        <div class="pco_w70 pco_h100">

            <form class="pco_w20 pco_h100 right flex-m" action="/add-product" method="GET">
                <button class="button border-radius pco_w90 pco_h70">Add Product</button>
            </form>

        </div>
    </div>
    <div class="pco_w100 flex-m" id="f_product_result_sort">
       <form action="/search" method="GET" class="pco_w70 pco_h100">

            @csrf
            <div class="fontS-20-snsrif-bold pco_w50 pco_h100 left flex-mr">
                <input name="s" placeholder="Search For Product ..." class="input border-radius pco_w90 pco_h80" type="text">
            </div>
            <div class="pco_h100 left pco_w25 flex-m">
                <input class="input pco_h80 pco_w90 border-radius" name="price_sort" placeholder="Price" type="number">
            </div>
            <div  class="pco_w20 pco_h100 right flex-m">
                <button class="button border-radius pco_w90 pco_h70">Search</button>
            </div>

       </form>
    </div>

    <div class="pco_w100 flex-m" id="f_filter_cetagory">

        <form class="pco_w70 pco_h100" action="/cetagorys" method="GET">

            <div class="pco_h100 pco_w80 left flex-m">
                <select class="input border-radius pco_w90 pco_h80" name="cetagory">
                    <option value="web">Web</option>
                    <option value="cloths">Cloths</option>
                    <option value="education">Education</option>
                    <option value="science">Science</option>
                </select>
            </div>
            <div class="pco_h100 pco_w20 right flex-m">
                <button class="button border-radius pco_w90 pco_h70">Get Cetagory</button>
            </div>

        </form>

    </div>

    <div id="f_product_result_shower">

        @if (session('results'))

            @for ($i = 0; $i < count($data); $i++)
                The current value is {{ $data[$i] }}
            @endfor
    
        @endif

    </div>

@endsection()