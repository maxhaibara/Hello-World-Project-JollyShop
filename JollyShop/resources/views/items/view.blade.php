@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ($items as $item)
                    @include('layouts.showitem')
                @endforeach
                @if ($items->total()>1)
                    <div class="card-body">{{ $items->links() }}</div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection