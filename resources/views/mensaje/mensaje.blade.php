
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible " role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    {{Session::get('success')}}
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger alert-dismissible " role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    {{Session::get('danger')}}
</div>
@endif

@if(Session::has('primary'))
<div class="alert alert-primary alert-dismissible " role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    {{Session::get('primary')}}
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-warning alert-dismissible " role="alert">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    {{Session::get('warning')}}
</div>
@endif
