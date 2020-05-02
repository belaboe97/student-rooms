<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::number('rating', null, ['class' => 'rating', 'data-min' => 0, 'data-max' => 5, 'data-step' => 1, 'data-size' => 'sm']) !!}
</div>

<!-- Roomid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roomid', 'Roomid:') !!}
    {!! Form::number('roomid', $roomid, ['class' => 'form-control','readonly' => 'true']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roomratings.index') }}" class="btn btn-default">Cancel</a>
</div>
