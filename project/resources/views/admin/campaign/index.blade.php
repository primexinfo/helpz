@extends('layouts.admin')
@section('styles')
<style>
h3{
    font-weight:700;
}
    .heading{
        font-size:16px;
    }
    select,.input-field {
        background: #FFFFFF;
        box-shadow: 0px 1px 14px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        padding:10px;
    }
    .CampaignSubmit-btn {
    background: #1f224f;
    width: 280px;
    height: 40px;
    color: #fff;
    font-size: 14px;
    border: 0px;
    margin-top: 15px;
    -webkit-transition: all 0.3s ease-in;
    -o-transition: all 0.3s ease-in;
    transition: all 0.3s ease-in;
    box-shadow: 0px 1px 14px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}
.allproduct{
    background:#ffffff;
    border-radius: 17px;
}

</style>

@endsection

@section('content')

    <div class="content-area">
        <div class="add-campaign-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-description">
                        <h3>Campaign Rule</h3>
                        <div class="body-area">
                        @include('includes.admin.form-error') 
                        <form id="geniusformdata" action="{{route('admin-campaign-store')}}" method="POST">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12 pt-4">
                                            <select id="discount_type" name="discount_type">
                                                <option value="">Select Option</option>
                                                <option value="1">{{ __('Price Discount') }}</option>
                                                <option value="2">{{ __('Cash Back') }}</option>
                                                <option value="3">{{ __('Reward Point') }}</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                            <div class="row">
                                            <div class="col-lg-12">
                                                    <h6>{{ __('Offer') }}</h4>
                                                </div>
                                                <div class="col-lg-8">
                                                    <input id="offerType" type="text" class="input-field" value="" disabled>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="number" min=0 class="input-field" placeholder="{{ __('eg: 10%') }}" name="offer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="heading">{{ __('Available to') }}</h4>
                                        </div>
                                        <div class="col-lg-12">
                                            <select id="available_to" name="available_to">
                                                <option value="">Select Option</option>
                                                <option data-href="{{ route('admin-campaign-dropdown-load',1) }}" value="1">{{ __('Category') }}</option>
                                                <option data-href="{{ route('admin-campaign-dropdown-load',2) }}" value="2">{{ __('Sub Category') }}</option>
                                                <option data-href="{{ route('admin-campaign-dropdown-load',3) }}" value="3">{{ __('Child Category') }}</option>
                                                <option data-href="{{ route('admin-campaign-dropdown-load',4) }}" value="4">{{ __('Product') }}</option>
                                                <option data-href="{{ route('admin-campaign-dropdown-load',5) }}" value="5">{{ __('Member') }}</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                            <h4 class="heading">{{ __('Specific Offer to') }}</h4>
                                        </div>
                                        <div class="col-lg-12">
                                        
                                            <select multiple id="specific_to" name="specific_to[]" >
                                            
                                            </select>
                                        </div>
                                        <div class="col-lg-12 pt-5">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h4 class="heading">{{ __('Redemption Count') }}</h4>
                                                </div>
                                                <div class="col-lg-12">
                                                   <input type="number" class="input-field" placeholder="{{ __('eg: 2') }}" min=0  name="redemption_count">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-lg-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="heading">{{ __('Start Date') }}</h4>
                                        </div>
                                        <div class="col-lg-12">
                                             <input type="date" class="input-field"  name="start_date">
                                        </div>
                                    </div> 

                                    <div class="row pt-5">
                                            <div class="col-lg-12">
                                                <h4 class="heading">{{ __('End Date') }}</h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="date" class="input-field"  name="end_date">
                                            </div>
                                        </div>
                                    
                                </div>

                                <div class="col-lg-2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="heading">{{ __('Start Time') }}</h4>
                                        </div>
                                        <div class="col-lg-12">
                                             <input type="time" class="input-field"  name="start_time">
                                        </div>
                                    </div>

                                        <div class="row pt-5">
                                            <div class="col-lg-12">
                                                <h4 class="heading">{{ __('End Time') }}</h4>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="time" class="input-field"  name="end_time">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button class="CampaignSubmit-btn" type="submit">{{ __('Submit') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                <h3>Campaign:</h3>
                    <div class="mr-table allproduct">

        @include('includes.admin.form-success')  

                        <div class="table-responsiv">
                                <table id="geniustable" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Offer Type') }}</th>
                                            <th>{{ __('Available To') }}</th>
                                            <th>{{ __('Offer') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    


@endsection
@section('scripts')
<script type="text/javascript">
    //on discount type slecte
    $('#discount_type').on('change', function() {
        $("#offerType").val($("#discount_type option:selected").text());
    });

    //on available to slecte
    $('#available_to').on('change', function() {
        var link = $(this).find(':selected').attr('data-href');
        if(link != "")
        {
            $('#specific_to').load(link);
            $('#specific_to').prop('disabled',false);
        }

    });
</script>
@endsection