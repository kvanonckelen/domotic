@section('title', 'Contact')

    <section class="sm:min-h-screen bg-white text-black flex items-center justify-center p-4 m-4 text-xl">
        <form action="{{ route('contact.submit') }}" method="POST" class="w-full max-w-md space-y-6">
            @csrf
            <h2 class="text-4xl font-semibold text-center">Contacteer Ons</h2>

            <div>
                <label for="name" class="block mb-1 text-md">Naam & Voornaam</label>
                <input type="text" id="name" name="name" required
                       class="w-full px-4 py-2 bg-white text-black border border-gray-700 focus:outline-none focus:ring-2 focus:ring-black rounded-lg">
            </div>

            <div>
                <label for="email" class="block mb-1 text-md">Email</label>
                <input type="email" id="email" name="email" required
                       class="w-full px-4 py-2 bg-white text-black border border-gray-700 focus:outline-none focus:ring-2 focus:ring-black rounded-lg">
            </div>

            <div>
                <label for="message" class="block mb-1 text-md">Uw Bericht</label>
                <textarea id="message" name="message" rows="4" required
                          class="w-full px-4 py-2 bg-white text-black border border-gray-700 focus:outline-none focus:ring-2 focus:ring-black rounded-lg"></textarea>
            </div>

            <button type="submit"
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-700 hover:bg-white hover:text-black transition rounded-lg">
                Verzenden
            </button>

            @if(session('success'))
                <p class="text-xl text-center text-green-600">{{ session('success') }}</p>
            @endif
        </form>
    </section>

