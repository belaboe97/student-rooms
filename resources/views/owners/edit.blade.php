@include('layouts.navbar')
@include('layouts.breadstyle')

<div class="container">
    <section class="content-header">
        <h1>
            Owners
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($owners, ['route' => ['owners.update', $owners->id], 'method' => 'patch']) !!}

                        @include('owners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
</div>