@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach ($items as $item)
                    <div class="card-header">
                        <div style="font-size:20px; display:inline-block;">
                            {{ $item->id }} - {{ $item->name }}
                        </div>
                        <div style="float:right; text-align:right;display:inline-block;">
                            Stock : {{ $item-> stock }} left
                            @guest
                            @else
                                    {{ Form::submit('Purchase!') }}
                            @endguest
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Price</th>
                                <td>{{ $item->price }} USD</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $item->description }}</td>
                            </tr>
                        </table>
                    </div>
                @endforeach
                <div class="card-body">{{ $items->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection