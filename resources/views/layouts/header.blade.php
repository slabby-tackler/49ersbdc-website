<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-2 col-md-1 header-img">
                <img src="{{ URL::asset('images/logo.png') }}" class="hidden-xs logo-img" />
                <img src="{{ URL::asset('images/logo_phone.png') }}" class="hidden-sm hidden-md hidden-lg logo-img" />
            </div>
            <div class="col-md-8 col-sm-10 site-title hidden-xs">
                {{config('app.name')}}
            </div>
        </div>
    </div>
</div>