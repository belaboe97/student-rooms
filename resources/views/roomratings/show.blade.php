@include('layouts.navbar')
@include('layouts.breadstyle')

<div class="container">
    <section class="content-header">
        <h1>
            Roomrating
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('roomratings.show_fields')
                    <a href="{{ route('roomratings.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')