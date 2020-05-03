<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $rooms->title }}</p>
</div>


<!-- Adress Field -->
<div class="form-group">
    {!! Form::label('adress', 'Adress:') !!}
    <p>{{ $rooms->adress }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $rooms->description }}</p>
</div>

<!-- Roomtype Field -->
<div class="form-group">
    {!! Form::label('roomtype', 'Roomtype:') !!}
    <p>{{ $rooms->roomtype }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $rooms->price }}</p>
</div>

<!-- Ownerid Field -->
<div class="form-group">
    {!! Form::label('ownerid', 'Ownerid:') !!}
    <p>{{ $rooms->ownerid }}</p>
</div>


<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $rooms->image }}</p>
</div>
