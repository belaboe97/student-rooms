@include('layouts.navbar')
@include('layouts.breadstyle')


<div class="container">
    <section class="content-header">
        <h1>
            Owners
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('owners.show_fields')
                    <a href="{{ route('owners.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
