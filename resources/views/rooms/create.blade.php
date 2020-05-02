@include('layouts.navbar')
@include('layouts.breadstyle')


<div class="container">
    <section class="content-header">
        <h1>
            Rooms
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'rooms.store']) !!}

                        @include('rooms.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')