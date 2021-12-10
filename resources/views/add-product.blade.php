@extends('layout.master')
@section('title' , 'YouCan.Shop | Add Product')
@section("content")

<div class="pco_w100 pco_h100 flex-m" id="f_adding-products">



    <form class="pco_w70 pco_h80  border-radius br-black" action="/add-product" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="pco_w100 flex-m pco_h20 ">
            <h1>Adding Products</h1>
        </div>
        <div class="mrgn-0uto  pco_w80 pco_h80">

            <div class="pco_w100 flex-m pco_h10 ">
                    <div class="pco_h100 pco_w30  flex-mr fontS-18-snsrif">Product Name :</div>
                    <div class="pco_h100 pco_w70  flex-m">
                        <input name="product_name" class="input pco_w90 pco_h80 border-radius" required placeholder="ex : Samsung S7 ..." type="text">
                    </div>
                </div>
                <div class="pco_w100 flex-m pco_h10 ">
                    <div class="pco_h100 pco_w30  flex-mr fontS-18-snsrif">Price(Dhs) :</div>
                    <div class="pco_h100 pco_w70  flex-m">
                        <input class="input pco_w90 pco_h80 border-radius" name="product_price" required type="float">
                    </div>
                </div>
                <div class="pco_w100 flex-m pco_h30 ">
                    <textarea class="pco_h90 pco_w100 pddn-10" placeholder="Description ..." required name="description"></textarea>
                </div>
                <div class="pco_w100 flex-m pco_h10 ">
                    <input type="file" class="pco_h80 pco_w100" name="hh" required>
                </div>
                <div class="pco_w100 flex-m pco_h10 ">
                    <select class="pco_h80 pco_w100" name="cetagory">
                        <option value="web">Web</option>
                        <option value="cloths">Cloths</option>
                        <option value="education">Education</option>
                        <option value="science">Science</option>
                    </select>
                </div>
                <div class="pco_w100 flex-m pco_h10 ">
                    <button class="button pco_h80 pco_w50 border-radius">Add It</button>
                </div>
                @if (session('status'))
                    <div class="pco_w100 flex-m pco_h10">
                        <p>
                            {{ session('status') }}
                        </p>
                    </div>
                @endif
            </div>

        </div>

    </form>

</div>

@endsection()