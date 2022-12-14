<div>
    <div>
      <label for="combobox" class="block text-sm font-medium text-gray-700">Select</label>
    </div>
    <div class="relative mt-1">

        <div>
          <input wire:model.debounce.1000ms="search" id="combobox" type="text" autocomplete="no" class="w-full py-2 pl-3 pr-12 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" role="combobox" aria-controls="options" aria-expanded="false">
        </div>
        <div>
          <button wire:click="$toggle('showList')" type="button" class="absolute inset-y-0 right-0 flex items-center px-2 rounded-r-md focus:outline-none">
            <!-- Heroicon name: mini/chevron-up-down -->
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>

      <div>
        @if ($showList)
          <ul class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" id="options" role="listbox">

            @foreach ($users as $value)
                <div wire:key="list-{{ $value->id }}">
                  <li wire:click="selectUser({{ $value }})" wire:model="user" class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9 hover:bg-gray-100 active:text-white active:bg-indigo-600" id="option-0" role="option" tabindex="-1">
                  <div class="flex">
                      <!-- Selected: "font-semibold" -->
                      <span class="truncate">{{ $value->name }}</span>
                      <!-- Active: "text-indigo-200", Not Active: "text-gray-500" -->
                      <span class="ml-2 text-gray-500 truncate">{{ $value->email }}</span>
                  </div>

                  @if ($user && $user['name'] == $value->name)
                    <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                        <!-- Heroicon name: mini/check -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                    </span>
                  @endif

                  </li>
                </div>
            @endforeach

          </ul>
        @endif
      </div>

    </div>
  </div>
