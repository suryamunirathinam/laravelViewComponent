<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>



</head>
<body>
    <form action="#">
        <select name = "channel_id" id ="channel_id">
            @foreach($channels as $channel)
                <option value = "{{  $channel->id }}">{{ $channel->name  }}</option>
            @endforeach
        </select>
    </form>
</body>
</html>
