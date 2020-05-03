
<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Adress Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('adress', 'Adress:') !!}
    {!! Form::text('adress', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Roomtype Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('roomtype', 'Roomtype:') !!}
    {!! Form::select('roomtype', ['Single Room' => 'Single Room', 'Double Room' => 'Double Room']) !!} 
</div>
 
<!-- Ownerid Field -->

<div class="form-group col-sm-6">
    <input type="hidden" id="ownerid" name="ownerid" value="{{$user->id}}" readonly>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rooms.index') }}" class="btn btn-default">Cancel</a>
</div>
