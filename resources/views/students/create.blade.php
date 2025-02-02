<h1>Add New Student</h1>
<!-- Styles / Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<form action="{{route('student.store')}} " method="POST">
    @csrf
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600">Responsive Form</h2>
                <p class="text-gray-500 mb-6">Form is mobile responsive. Give it a try.</p>

                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Personal Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="Name" id="Name" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="Email">Email Address</label>
                                    <input type="text" name="Email" id="Email" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="email@domain.com" />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="Phone">Phone Address</label>
                                    <input type="text" name="Phone" id="Phone" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="number" />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="Address">Address / Street</label>
                                    <input type="text" name="Address" id="Address" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="City">City</label>
                                    <input type="text" name="City" id="City" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>
                                <div class="md:col-span-3">
                                    <label for="Class">Class</label>
                                    <input type="text" name="Class" id="Class" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>
                                <div class="md:col-span-2">
                                    <label for="Gender">Gender</label>
                                    <input type="text" name="Gender" id="Gender" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>
                                <div class="md:col-span-5">
                                    <label for="Bio">Bio</label>
                                    <textarea type="text" name="Bio" id="Bio" required
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder=""> </textarea>
                                </div>
                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="https://www.buymeacoffee.com/dgauderman" target="_blank"
                class="md:absolute bottom-0 right-0 p-4 float-right">
                <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee"
                    class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
            </a>
        </div>
    </div>

</form>
<!-- component -->