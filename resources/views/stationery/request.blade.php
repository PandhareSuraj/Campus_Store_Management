<form method="POST" action="/stationery/request">
    @csrf

    <select name="stationery_id">
        @foreach($items as $item)
            <option value="{{ $item->id }}">
                {{ $item->name }} (Available: {{ $item->quantity }})
            </option>
        @endforeach
    </select>

    <input type="number" name="quantity" placeholder="Enter Quantity">

    <button type="submit">Send Request</button>
</form>