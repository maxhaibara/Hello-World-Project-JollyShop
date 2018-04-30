<div class="card-header">
    <a href="/items/{{ $item->id }}"><div style="font-size:20px; display:inline-block;">
        {{ $item->id }} - {{ $item->name }}
    </div></a>
    <div style="float:right; text-align:right;display:inline-block;">
        Stock : {{ $item-> stock }} left
        @guest
        @else
                <a class="btn btn-small btn-success" href="/home">Purchase</a>
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
    <div style="margin-bottom:10px; float:right; text-align:right; display:inline-block">

        <a class="btn btn-small btn-info" href="">Edit</a>
<!--             {{ Form::open(array('action' => array('ItemController@destroy', $item->id))) }}
        {{ Form::submit('Delete', array('id'=>'','class'=>'btn btn-small btn-danger')) }}
        {{ Form::close() }}
-->
        <!-- <a class="btn btn-small btn-danger" href="/items/{{ $item->id }}">Delete</a> -->

        <form style="display:inline-block;" action="items/{{ $item->id }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type='submit' class="btn btn-small btn-danger" value="{{ $value or 'delete' }}">Delete</button>
        </form>
    </div>
</div>