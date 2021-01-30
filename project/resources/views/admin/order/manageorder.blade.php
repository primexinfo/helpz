@extends('layouts.admin')

@section('styles')

    <style type="text/css">

        .input-field {
            padding: 15px 20px;
        }

    </style>

@endsection

@section('content')

    <input type="hidden" id="headerdata" value="{{ __('ORDER ') }}">

    <div class="content-area">
        <div class="mr-breadcrumb">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">{{ __('Order Management') }}</h4>
                    <ul class="links">
                        <li>
                            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                        <li>
                            <a href="javascript:;">{{ __('Orders') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin-order-manage') }}">{{ __('Orders Management') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-area">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="mr-table allproduct">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="date" class="input-field" name="date">
                            </div>
                            <div class="col-md-3">
                                <select name="" id="" class="input-field">
                                    <option value="">Select</option>
                                    @foreach($categories as $category)
                                        <option value="cat,{{$category->id}}">{{$category->name}}</option>
                                        @if($category->subs)
                                            @foreach($category->subs as $subcategory)
                                                <option value="sub,{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                @if($subcategory->childs)
                                                    @foreach($subcategory->childs as $childcategory)
                                                        <option value="child,{{$childcategory->id}}">{{$childcategory->name}}</option>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="" id="" class="input-field">
                                    <option value="">Select</option>
                                    @foreach($porducts as $porduct)
                                        <option value="pro,{{$porduct->id}}">{{$porduct->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mr-table allproduct">
                        <div class="col-md-4">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>Customer name/ID</th>
                                    <th>Quantity</th>
                                    <th>Pickup point</th>
                                    <th>Suppliers</th>
                                    <th>Order code</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        {{--@php--}}
                                            {{--$cart = $order->cart;--}}

                                        {{--@endphp--}}
                                        )
                                            {{$order->cart}}

                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')




@endsection