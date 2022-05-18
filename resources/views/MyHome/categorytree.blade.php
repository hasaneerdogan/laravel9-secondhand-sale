@foreach($children as $subcategory)
    <ul class="list-links">
        @if(count($subcategory->children))
            <li style="color: #0a0a0a;font-family: 'Arial Black' ">{{$subcategory->title}}</li>
            <ul class="list-links">
                @include('MyHome.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug' =>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
