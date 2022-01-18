<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            body {
                background-color: #e2e4ef;
            }
            h2 {
                margin-bottom: 0;
            }
            .subheader {
                margin-bottom: 32px;
            }
            form {
                border-style: solid;
                border-width: 1px;
                border-color: #d2d4df;
                padding: 16px;
                padding-bottom: 0;
                background-color: #e6e8f3;
            }
            .line {
                margin-bottom: 16px;
            }
            .label {
                padding-right: 8px;
            }
        </style>
    </head>
    <body class="antialiased">
        <h2>Presentation Converter</h2>
        <div class="subheader">This simple application demonstrates usage of {{$name}} {{$version}} in Laravel 8</div>
        <form action="convert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="line"><input type="file" name="file" placeholder="Select file" /></div>
            <div class="line">
                <span class="label">Format:</span>
                <select name="format">
                    @foreach ($formats as $format)
                    <option value="{{$format}}">{{$format}}</option>
                    @endforeach
                </select>
            </div>
            <div class="line"><input type=submit value="submit" /></div>
        </form>
    </body>
</html>
