<header class=" bg-gray-400 p-4 flex justify-between">
     <nav>
         <ul class="flex space-x-4">


              <li><a href="/" class="text-brown hover:text-brown {{ request()->is('/') ? 'font-bold' : '' }}">Home</a></li>
              <li><a href="/form" class="text-brown hover:text-brown {{ request()->is('form') ? 'font-bold' : '' }}">Form</a></li>
              <li><a href="/status" class="text-brown hover:text-brown {{ request()->is('status') ? 'font-bold' : '' }}">Status</a></li>


         </ul>
     </nav>
     <div class="flex space-x-4">
        @canany(['atasanAdmin', 'superAdmin'])
        <a href="/notification" class="p-2 rounded-full hover:bg-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </a>
        @endcanany


         <a href="/profile" class="p-2 rounded-full hover:bg-gray-300">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
             </svg>
         </a>



     </div>
 </header>
