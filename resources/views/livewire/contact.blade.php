<div>
    <div style="height: 35vh; opacity: 0.9;background-repeat: no-repeat;background-position: center ;background-image: url('https://i.picsum.photos/id/642/1920/300.jpg?hmac=mUES1UNBuPWHglRAYoo7Cjnp_NbH8lbRzRCbJonZ1Pk')">
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
            <h2 class="uppercase text-6xl text-white text-center mt-12 font-serif">CONTACT</h2>
        </div>
    </div>

    <div class="mx-auto w-full text-center mt-20">
        <h4 class="italic text-yellow-400 text-base font-serif">Contact form</h4>
        <h2 class="uppercase font-serif text-3xl">Get to us</h2>
        <h5>Pere Velimirovica 18/7, Beograd 11000</h5>
        <p class="lg:max-w-2xl md:max-w-2xl mx-auto mt-4 font-serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Consequatur consequuntur dolor ex illo ipsum, iste nobis quae qui sapiente unde!</p>
    </div>

    <div class="grid lg:grid-cols-6 md:grid-cols-1 my-16">
        <div class="lg:col-span-3 ml-24">
            <h5 class="italic text-yellow-400 font-serif text-base my-2">Get in touch</h5>
            <h2 class="uppercase font-serif text-3xl my-2">Contact</h2>
            <form wire:submit.prevent="submit">
                <textarea wire:model="message" class="w-2/3" name="message" id="" cols="30" rows="1" placeholder="Message"></textarea>
                @error('message') <span class="error">{{$message}}</span> @enderror
                <input wire:model="name" class="w-2/3 my-2" type="text" placeholder="Name" name="name">
                @error('namee') <span class="error">{{$message}}</span> @enderror
                <input wire:model="email" class="w-2/3 my-2" type="email" placeholder="Email" name="email">
                @error('email') <span class="error">{{$message}}</span> @enderror
                <button type="submit" class="block my-2 w-1/3 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Submit
                </button>
            </form>
        </div>
        <div class="lg:col-span-3 lg:mx-auto md:mx-auto mx-auto">
            <h5 class="italic text-yellow-400 font-serif text-base my-2">Discover more</h5>
            <h2 class="uppercase font-serif text-3xl my-4">Information</h2>
            <p class="my-2 font-serif text-base">Pere Velimirovica 18/7, Beograd 11000</p>
            <p class="my-2 font-serif text-base">781-562-9355-781-727-6090</p>
            <p class="my-2 font-serif text-base">neven.josipovic.sae@gmail.com</p>
            <i class="mr-4 fab fa-facebook-f"></i>
            <i class="mr-4 fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </div>
</div>
