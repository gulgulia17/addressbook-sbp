<table class="table text-center" id="table">
    <thead>
        <tr>
            <th style="width: 2%">#</th>
            <th class="w-25">Customer Name</th>
            <th>Customer Number</th>
            <th>Customer Address</th>
            <th>Pincode</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datatable as $key => $item)
            <tr>
                <td style="width: 2%">{{$key+1}}</td>
                <td class="w-25">{{$item->customername}}</td>
                <td>{{$item->number}}</td>
                <td><address>{!! $item->addressline1 .'<br>'.$item->addressline2.'<br>'.$item->addressline3!!}</address></td>
                <td>{{$item->pincode}}</td>
                <td>
                    <a href="{{route('customer.show',$item->id)}}" class="px-2 text-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="{{route('customer.edit',$item->id)}}" class="px-2 text-warning"><i class="fas fa-pencil-alt    "></i></a>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('{{$item->id}}delete').submit();"
                        class="px-2 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    <form action="{{route('customer.destroy',$item->id)}}" method="post"
                        class="d-none" id="{{$item->id}}delete">@csrf @method('delete')</form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

