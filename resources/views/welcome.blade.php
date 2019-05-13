@extends('ui::layouts.blank')

@section('content')
    <div class="ui container text m-t-2">
        {!! form()->open()->get() !!}
        {!! form()->select('user', $users->pluck('domain', 'id')->prepend('--Pilih Salah Satu--'), request('user')) !!}
        {!! form()->submit('Show') !!}
        {!! form()->close() !!}

        <div class="ui divider"></div>

        @if($posts)
            {!! Suitable::source($posts)
            ->columns([
                \Laravolt\Suitable\Columns\Numbering::make("No"),
                \Laravolt\Suitable\Columns\Text::make('title')
            ])
            ->render() !!}
        @endif

    </div>

@endsection
