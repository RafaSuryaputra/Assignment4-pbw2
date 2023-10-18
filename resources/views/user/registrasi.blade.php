<x-guest-layout>
    <form method="POST" action="{{ route('user.storePengguna') }}">
        @csrf

        <!-- 6706223162 - Rafa Suryaputra -->

        <!-- Name -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block w-full mt-1" type="text" name="username" :value="old('username')" required autofocus />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Fullname -->
        <div>
            <x-input-label for="fullName" :value="__('Full Name')" />
            <x-text-input id="fullName" class="block w-full mt-1" type="text" name="fullName" :value="old('fullName')" required autofocus />
            <x-input-error :messages="$errors->get('fullName')" class="mt-2" />
        </div>
        

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" required autofocus />
            <x-input-error :messages="$errors->get('address')" class="mt-2" /> 
        </div>

        <!-- Birth Date -->
        <div>
            <x-input-label for="birthDate" :value="__('Birth Date')" />
            <x-text-input id="birthDate" class="block w-full mt-1" type="date" name="birthDate" :value="old('birthDate')" required autofocus />
            <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
        </div>
        <!-- no telepon -->
        <div>
            <x-input-label for="phoneNumber" :value="__('Phone Number')" />
            <x-text-input id="phoneNumber" class="block w-full mt-1" type="text" name="phoneNumber" :value="old('phoneNumber')" required autofocus />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>
        <!-- agama -->
        <div>
            <x-input-label for="Agama" :value="__('Agama')" />
            <x-text-input id="Agama" class="block w-full mt-1" type="text" name="Agama" :value="old('Agama')" required autofocus />
            <x-input-error :messages="$errors->get('Agama')" class="mt-2" />
        </div>
        <!-- jenis kelamin option value -->
        
        <div>
            <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" />
            <select name="jenisKelamin" id="jenisKelamin" class="block w-full mt-1" type="text" name="jenisKelamin" :value="old('jenisKelamin')" required autofocus>
                
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
                <option value="3">Tidak Diketahui</option>
                <option value="4">Lainnya</option>
            </select>
            <x-input-error :messages="$errors->get('jenisKelamin')" class="mt-2" />
        </div>
        
    
        


        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>

            <!-- Tombol Reset -->
            <button type="reset" class="p-2 ml-4 text-white bg-red-500 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                {{ __('Reset') }}
            </button>
        </div>
    </form>
</x-guest-layout>
