<x-body class="bg-gray-800">
    <form class="max-w-md h-screen mx-auto content-center" method="POST" action="/register">
        @csrf
        <div class="mb-5 text-xl font-semibold text-center text-gray-200">
            <h1>Registration</h1>
        </div>
        <div class="form-group mb-3">
            <x-forms.label for="username">Username</x-forms.label>
            <x-forms.input name="username" id="username" placeholder="Goshko64" :value="old('username')" required/>
            <x-forms.error name="username"/>
        </div>
        <div class="form-group mb-3">
            <x-forms.label for="email">Email</x-forms.label>
            <x-forms.input type="email" name="email" id="email" placeholder="Example@cool.com" :value="old('email')" required/>
            <x-forms.error name="email"/>
        </div>
        <div class="form-group mb-3">
            <x-forms.label for="password">Password</x-forms.label>
            <x-forms.input type="password" name="password" id="password" required/>
            <x-forms.error name="password"/>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
    </form>
</x-body>

