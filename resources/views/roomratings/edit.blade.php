@include('layouts.navbar')
@include('layouts.breadstyle')

<div class="container">
    <section class="content-header">
        <h1>
            Roomrating
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roomrating, ['route' => ['roomratings.update', $roomrating->id], 'method' => 'patch']) !!}

                        @include('roomratings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>

@include('layouts.footer')