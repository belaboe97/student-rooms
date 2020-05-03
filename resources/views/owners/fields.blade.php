<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('id', 'ID:') !!}
    <input type="text" id="id" name="id" value="{{$user->id}}" readonly><br><br>
</div>

<!-- Adress Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::textarea('owners_adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    <input type="text" id="name" name="name" value="{{$user->name}}" readonly>
</div>

<!-- Phone Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::textarea('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    <input type="text" id="email" name="email" value="{{$user->email}}" readonly>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('owners.index') }}" class="btn btn-default">Cancel</a>
</div>

@include('layouts.footer')