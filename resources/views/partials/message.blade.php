@if(Session::has('message'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-secondary mb-0 text-center">
                <p style="color: #840e8d">{{Session('message')}}</p>
            </div>
        </div>
    </div>

@endif
