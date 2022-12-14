<div x-data="{ showUserModal: false }">
    <span x-on:click="showUserModal = true">
        <button type="button" class="rounded-md bg-white px-5 py-2.5 shadow">
            Show User
        </button>
    </span>

 <div
    x-show="showUserModal"
    style="display: none"
    x-on:keydown.escape.prevent.stop="showUserModal = false"
    role="dialog"
    aria-modal="true"
    x-id="['modal-title-test']"
    :aria-labelledby="$id('modal-title-test')"
    class="relative z-10"
    aria-labelledby="modal-title-test"
    role="dialog"
    aria-modal="true">
    <!--
      Background backdrop, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div
        x-show="showUserModal"
        x-transition.opacity
        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>

    <div
        x-show="showUserModal" x-transition
        x-on:click="showUserModal = false"
        class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex items-end justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
        <!--
          Modal panel, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
        <div
            x-on:click.stop
            x-trap.noscroll.inert="showUserModal"
            class="relative px-4 pt-5 pb-4 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-4xl sm:p-6">
          <div>

            <livewire:user-form :user="$this->user"/>

        </div>
      </div>
    </div>
  </div>
</div>
