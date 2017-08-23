<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-1 col-md-offset-2 header-img">
                <img src="{{ URL::asset('images/logo.png') }}" class="hidden-xs hidden-sm logo-img" />
                <img src="{{ URL::asset('images/logo_phone.png') }}" class="hidden-md hidden-lg logo-img" />
            </div>
            <div class="col-md-7 site-title hidden-sm hidden-xs">
                {{config('app.name')}}
            </div>
        </div>
    </div>
</div>