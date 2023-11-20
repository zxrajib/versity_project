<style>
    .slick-slide img{
        margin: auto;
    }
    .categories_slider{
        margin: 0 5px;
    }
    .categories_slider:hover{
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        transform: scale(1.2);
        transition: .5s ease-in-out;
    }
</style>
<div class="multiple-items" style="margin-top: 0.5em;">
    @foreach($categories as $category)
        <div class="text-center categories_slider" style="margin: auto">
            <a href="{{route('category-wise.list',$category->uuid)}}" class="" style="color: #0b0b0b;">
                <img src="{{ asset( $_ENV['APP_DEV'].'backend/img/category/'.$category->image) }}" alt="" width="70px" height="70px">
                <p class="mt_10 mb_10">{{$category->name ?? ''}}</p>
            </a>
        </div>
    @endforeach
</div>
{{ dd($productData) }}
