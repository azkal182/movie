<div>
	<div class="py-2">
		<x-button wire:click="showmodal">Add user</x-button>


		<x-modal wire:model="modal">
			<x-slot name="title">
                {{ __('Add User') }}
            </x-slot>

            <x-slot name="content">
                <div class="text-sm text-gray-700 dark:text-gray-400">
            <div>
            	<label class="block text-sm">
	                <span class="text-gray-700 dark:text-gray-400">Name</span>
	                <input wire:model="name" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Your Name">
	             </label>

	             <label class="block text-sm mt-2">
	                <span class="text-gray-700 dark:text-gray-400">email</span>
	                <input wire:model="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="your Email">
	             </label>

	             <label class="block text-sm mt-2">
				  <span class="text-gray-700">Role</span>
				  <select wire:model="role" class="form-select mt-1 block w-full">
				    <option value="1" selected="selected">Admin</option>
				    <option value="2">Member</option>
				  </select>
				</label>

	             <label class="block text-sm mt-2">
	                <span class="text-gray-700 dark:text-gray-400">Password</span>
	                <input wire:model="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="*********">
	             </label>

	             <label class="block text-sm mt-2">
	                <span class="text-gray-700 dark:text-gray-400">Confirm Password</span>
	                <input wire:model="confirm_password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="*********">
	             </label>
            </div>
          </div>
            </x-slot>

            <x-slot name="footer">
                <x-button wire:click="$set('modal', false)" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-button>

                <x-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                    {{ __('Save') }}
                </x-button>
            </x-slot>
		</x-modal>
	</div>




















	

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
	  <div class="w-full overflow-x-auto">
	    <table class="w-full whitespace-no-wrap">
	      <thead>
	        <tr
	          class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
	        >
	          <th class="px-4 py-3">Client</th>
	          <th class="px-4 py-3">Email</th>
	          <th class="px-4 py-3">Status</th>
	          <th class="px-4 py-3">Role</th>
	          <th class="px-4 py-3">Actions</th>
	        </tr>
	      </thead>
	      <tbody
	        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
	      >
	        @foreach ($users as $user)
	        	<tr class="text-gray-700 dark:text-gray-400">
		          <td class="px-4 py-3">
		            <div class="flex items-center text-sm">
		              <!-- Avatar with inset shadow -->
		              <div
		                class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
		              >
		                <img
		                  class="object-cover w-full h-full rounded-full"
		                  src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
		                  alt=""
		                  loading="lazy"
		                />
		                <div
		                  class="absolute inset-0 rounded-full shadow-inner"
		                  aria-hidden="true"
		                ></div>
		              </div>
		              <div>
		                <p class="font-semibold">{{ $user['name'] }}</p>
		                <p class="text-xs text-gray-600 dark:text-gray-400">
		                  10x Developer
		                </p>
		              </div>
		            </div>
		          </td>
		          <td class="px-4 py-3 text-sm">
		            {{ $user['email'] }}
		          </td>
		          <td class="px-4 py-3 text-xs">
		          	@if ($user['email_verified_at'])
		          		<span
		              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
		            >
		              Verified
		            </span>
		          	@else
		          		<span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                          Pending
                        </span>
		          	@endif
		            
		          </td>
		          <td class="px-4 py-3 text-sm">
		          	@if ($user['role'] == 1 )
		          		Admin
		          	@elseif ($user['role'] == 2 )
		          		Member
		          	@endif
		          </td>
		          <td class="px-4 py-3">
		            <div class="flex items-center space-x-4 text-sm">
		              <button
		                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
		                aria-label="Edit"
		              >
		                <svg
		                  class="w-5 h-5"
		                  aria-hidden="true"
		                  fill="currentColor"
		                  viewBox="0 0 20 20"
		                >
		                  <path
		                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
		                  ></path>
		                </svg>
		              </button>
		              <button
		                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
		                aria-label="Delete"
		              >
		                <svg
		                  class="w-5 h-5"
		                  aria-hidden="true"
		                  fill="currentColor"
		                  viewBox="0 0 20 20"
		                >
		                  <path
		                    fill-rule="evenodd"
		                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
		                    clip-rule="evenodd"
		                  ></path>
		                </svg>
		              </button>
		            </div>
		          </td>
		        </tr>
	        @endforeach

	        
	      </tbody>
	    </table>
	  </div>
	  <div
	    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
	  >
	    <span class="flex items-center col-span-3">
	      Showing 21-30 of 100
	    </span>
	    <span class="col-span-2"></span>
	    <!-- Pagination -->
	    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
	      <nav aria-label="Table navigation">
	        <ul class="inline-flex items-center">
	          <li>
	            <button
	              class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
	              aria-label="Previous"
	            >
	              <svg
	                class="w-4 h-4 fill-current"
	                aria-hidden="true"
	                viewBox="0 0 20 20"
	              >
	                <path
	                  d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
	                  clip-rule="evenodd"
	                  fill-rule="evenodd"
	                ></path>
	              </svg>
	            </button>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
	            >
	              1
	            </button>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
	            >
	              2
	            </button>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
	            >
	              3
	            </button>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
	            >
	              4
	            </button>
	          </li>
	          <li>
	            <span class="px-3 py-1">...</span>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
	            >
	              8
	            </button>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
	            >
	              9
	            </button>
	          </li>
	          <li>
	            <button
	              class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
	              aria-label="Next"
	            >
	              <svg
	                class="w-4 h-4 fill-current"
	                aria-hidden="true"
	                viewBox="0 0 20 20"
	              >
	                <path
	                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
	                  clip-rule="evenodd"
	                  fill-rule="evenodd"
	                ></path>
	              </svg>
	            </button>
	          </li>
	        </ul>
	      </nav>
	    </span>
	  </div>
	</div>
</div>
