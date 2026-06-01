 <!-- Header -->
 <header class="bg-blue-900 text-white p-4">
     <div class="container mx-auto flex justify-between items-center">
         <h1 class="text-3xl font-semibold">
             <a href="{{ url('/') }}">Workopia</a>
         </h1>
         <nav class="hidden md:flex items-center space-x-4">
             <x-link url="/jobs" :active="request()->is('jobs')">All Jobs</x-link>
             <x-link url="/jobs/saved" :active="request()->is('jobs.saved')">Saved Jobs</x-link>
             <x-link url="/login" :active="request()->is('login')">Login</x-link>
             <x-link url="/register" :active="request()->is('register')">Register</x-link>
             <x-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">Dashboard</x-link>
             <x-button-link url="/jobs/create"
                 twcss="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"
                 icon="edit">
                 Create Job
                 </x-button0link>
         </nav>
         <button id="hamburger" class="text-white md:hidden flex items-center">
             <i class="fa fa-bars text-2xl"></i>
         </button>
     </div>
     <!-- Mobile Menu -->
     <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
         <x-link url="/jobs" :active="request()->is('jobs')" :mobile="true">All
             Jobs</x-link>
         <x-link url="/jobs/saved" :active="request()->is('jobs.saved')" :mobile="true">
             Saved Jobs</x-link>
         <x-link url="/login" :active="request()->is('login')" :mobile="true">
             Login</x-link>
         <x-link url="/register" :active="request()->is('register')" :mobile="true">
             Register</x-link>
         <x-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">
             Dashboard</x-link>
         <x-button-link :block="true" url="/jobs/create"
             twcss="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"
             icon="edit">
             Create Job
             </x-button0link>
     </nav>
 </header>
