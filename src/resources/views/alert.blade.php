<div
    x-data="{shown: '{{$isShow}}', timeout: null}"
    x-init="@this.on('show', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, {{$timeout}});  })"
    x-show.transition.opacity="shown"
    style="display: none;"
    class="fixed bottom-0 inset-x-0 mb-4 ">
    <div class="flex max-w-sm w-full ml-4 bg-white -dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-center items-center w-12 bg-blue-500">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
            </svg>
        </div>

        <div class="-mx-3 py-2 px-4">
            <div class="mx-3">
                <span class="text-blue-500 dark:text-blue-400 font-semibold">{{$title}}</span>
                <p class="text-gray-600 dark:text-gray-200 text-sm">{{$content}}</p>
            </div>
        </div>
    </div>
</div>
