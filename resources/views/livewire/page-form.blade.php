<main>

    <div class="container mx-auto">

        {{-- <p class="text-mg font-light text-gray-700 pt-20 pl-2 sm:pl-0">
            Главная > Обратная связь
        </p> --}}

        <section class="bg-[#232B33] py-10 mt-24">
            <div class="p-6 mx-auto max-w-screen-md">

                <h2 class="mb-4 text-white lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-bold text-center">Связь с нами</h2>

                <p class="mb-4 lg:mb-8 text-center font-medium sm:text-xl">Хотите записатся или возникла техническая проблема?</p>
                              
                <form action="{{ route('page.form-finished') }}" wire:submit.prevent="submitForm" method="post" class="space-y-8">
                {{-- <form action="{{ route('page.form-finished') }}" method="post" class="space-y-8"> --}}
                    @csrf
                
                    <div>
                        @error('name')
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Напишите ваше имя!</p>
                        @enderror
                        <label for="name" class="block text-sm font-medium mb-2">Ваше имя</label>
                        <input type="text" name="name" id="name" wire:model="name" placeholder="Имя" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md"/>
                    </div>                  
                    <div>
                        @error('email')
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Напишите ваш email!</p>
                        @enderror
                        <label for="email" class="block mb-2 text-sm font-medium">Ваш email</label>
                        <input type="text" name="email" id="email" wire:model="email" placeholder="Электронная почта" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md"/>
                    </div>
                    <div>
                        @error('contactNumber')
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Напишите ваш телефон!</p>
                        @enderror
                        <label for="contactNumber" class="block mb-2 text-sm font-medium">Ваш телефон</label>                     
                        <input type="text" name="contactNumber" id="contactNumber" wire:model="contactNumber" class="w-full outline-none bg-[#1C2025] text-white text-sm px-4 py-1 border focus:border-black rounded-md" placeholder="+7 123-456-7890" pattern="^\+\d{1,3}\d{1,4}\d{1,4}\d{4}$" maxlength="12"/>    
                            
                        <script>
                            // Add event listener to the input field
                            document.getElementById('contactNumber').addEventListener('input', function (e) {
                                // Replace any non-numeric characters except +, -, and space
                                e.target.value = e.target.value.replace(/[^+\d\s-]/g, '');
                            });
                        </script>
                    </div>
                    <div class="sm:col-span-2">
                        @error('message')
                        <p class="text-center font-medium sm:text-xl mt-2 text-red-600">Ваш коментарий слишком маленький!</p>
                        @enderror
                        <label for="message" class="block mb-2 text-sm font-medium">Ваш коментарий</label>
                        <textarea id="message" name="message" wire:model="message" rows="6" class="block p-2.5 w-full text-sm bg-[#1C2025] text-white rounded-lg shadow-sm border focus:border-black" placeholder="Ваш коментарий..."></textarea>
                    </div>

                    @if('$success')
                    <h2 class="my-4 lg:text-4xl md:text-4xl sm:text-4xl text-3xl font-bold text-center text-sky-600">{{ $success }}</h2>                   
                    @endif

                    <a href="{{ route('page.form-finished') }}">
                        <button type="submit" class="w-full mt-12 flex justify-center items-center px-3 py-2 text-sm font-medium text-center bg-[#228BEF] hover:bg-[#1C2025] hover:text-[#228BEF] hover:border-[#228BEF] hover:border border-[#228BEF] border">
                            Отправить
                        </button>
                    </a>
                </form>
            </div>
          </section>
    </div>

</main> 
