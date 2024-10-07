@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.transaction.menu'), __('menu.digital.surpemberitahuan')]">
        <a href="{{ route('transaction.pemberitahuan.create') }}" class="btn btn-primary">{{ __('menu.general.create') }}</a>
    </x-breadcrumb>

    @foreach($data as $letter)
        <x-letter-card
            :letter="$letter"
        />
    @endforeach

    {!! $data->appends(['search' => $search])->links() !!}
@endsection
