<div>

        {{--        Navigation--}}
        <div>
            <nav>
                <ul>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('/')}}">Home</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('/about')}}">About</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="mt-6" style="height: 20vh; background-image: url('https://i.picsum.photos/id/923/1920/300.jpg?hmac=RyvPEq86PCfqpRUD0bhjgIK13GLeC_apIm6qR4m2dNM'); opacity: 0.8;">
            <div>
                <h2 class="lg:text-6xl md:text-5xl md:pl-10 md:pt-12 text-4xl  text-xl pt-10 pl-10  text-white inline-block font-serif lg:pt-10 lg:pl-20 uppercase">Contest - {{$title}} </h2>
            </div>
        </div>

        <section>
            <main>
                <div class="lg:flex flex-none lg:m-20">
                    <div class="w-3/5 mx-auto my-10">
                        <img src="{{url(asset($image))}}" alt="contest_image">
                    </div>
                    <div class="lg:w-2/5 lg:ml-20 mx-auto w-10/12 lg:text-left text-center">
                        <h2 class="uppercase text-2xl font-serif mb-5">Artify</h2>
                        <h3 class="uppercase text-xl font-serif">{{$title}}</h3>
                        <p class="font-serif lg:ml-10 mt-5">{{$description}}</p>
                        <h3 class="uppercase text-2xl font-serif my-5">Featured Image</h3>
                        <img class="lg:w-3/5 lg:ml-10 mx-auto w-10/12" src="{{url(asset($featured_image))}}" alt="featured_image">
                        <div>
                            <h3 class="uppercase font-serif text-2xl my-5">Categories</h3>
                            <p  class="font-serif italic lg:ml-10">Blue</p>
                            <p  class="font-serif italic lg:ml-10">Wet painting</p>
                            <p class="font-serif italic lg:ml-10" >Modern</p>
                        </div>
                    </div>
                </div>
                <div class="xl:container mt-10 lg:mr-10 flex justify-center">
                    <button class="bg-gray-800 hover:bg-gray-400 text-white font-bold py-4 px-4  lg:w-4/5 mb-20" wire:click="createShowModal">
                        You may enter the competition with only one entry
                    </button>
                </div>
            </main>
        </section>

{{--    Modal for the submissions--}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Submission Entry') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="name" />
                @error('name') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.800ms="email" />
                @error('email') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="country" value="{{ __('Country') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="country" />
                @error('country') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="submission_image" value="{{ __('Submission Image') }}" />
                <x-jet-input id="submission_image" class="block mt-1 w-full" type="file" wire:model.debounce.800ms="submission_image" />
                @error('submission_image') <span class="error">{{$message}}</span> @enderror
            </div>
{{--            A user has one contest--}}
            <div class="mt-4">
                <x-jet-input id="contest_id" value="{{$modelId}}" class="block mt-1 w-full" type="hidden" wire:model.debounce.800ms="contest_id" />
                @error('contest_id') <span class="error">{{$message}}</span> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
