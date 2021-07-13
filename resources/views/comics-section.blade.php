<section>
    <div class="container">
        <div class="comics-container">
            <div class="section-name">current series</div>
            @foreach ($comics as $item)
            <div class="comic">
                <img src="{{$item["thumb"]}}" alt="{{$item["title"]}}"> 
                <p>{{$item["title"]}}</p>
            </div>
            @endforeach
        </div>
        <span>Read More </span>
    </div>
</section>