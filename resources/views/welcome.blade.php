<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        {!! Form::open() !!}
            {!! Form::label('Id del producto:') !!}
            {!! Form::text('id') !!}
            <br>
            {!! Form::submit('Consultar') !!}
        {!! Form::close() !!}


        @if (isset($array))
            {{ $array }}
        @endif
    </body>
</html>
