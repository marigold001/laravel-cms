<div>
{{--    Main navigation - Extract to a component--}}
    <div style="height: 35vh; opacity: 0.9;background-repeat: no-repeat;background-position: center ;background-image: url('https://i.picsum.photos/id/89/1920/400.jpg?hmac=T5LturdDB8DJAuIEwUAS5qXxH7sAD9KJo-BhY5SYHwg')">
{{--        Navigation--}}
        <div>
            <nav>
                <ul>
                    <li class="inline-block p-4"><a class="uppercase text-white font-serif" href="{{url('/')}}">Home</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-white font-serif" href="{{url('/about')}}">About</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-white font-serif" href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <h2 class="uppercase text-6xl text-white text-center mt-12 font-serif">Home</h2>
        </div>
    </div>

{{--    Main Content--}}
    <main>
        <section>
            <div class="lg:flex lg:justify-between">
                    @foreach ($data as $item)
                        <div class="lg:w-1/3 lg:mx-12 md:mx-auto md:w-1/2 m-16">
                            <div style="height: 300px">
                                <img class="h-full w-full object-cover object-center" src="{{asset($item->image)}}" alt="Contest">
                            </div>
                            <h2 class="text-center font-serif text-2xl">{{$item->title}}</h2>
                            <p class="text-center font-serif">{{$item->description}}</p>
                            <button class="text-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full mt-4">
                                <a class="text-center font-serif" href="{{url('/contest/'.$item->id)}}">Go to contest</a>
                            </button>
                        </div>
                    @endforeach
            </div>
            <div class="mx-16">
            {{$data->links()}}
            </div>
        </section>
    </main>
</div>





