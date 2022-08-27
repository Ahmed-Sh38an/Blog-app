@auth 
<form action="/posts/{{$post->slug}}/comments" method="post">
    <x-panel>
        @csrf 
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">
            <h2 class="ml-4">Leave a comment?</h2>
        </header>
        <div class="mt-6">
            <textarea 
                name="body" 
                class="w-full text-sm focus:outline-none focus:ring" 
                rows="5"
                required
                placeholder="Think of something"></textarea>

                @error('body')
                    <span class="text-red-500 text-semibold text-xs">{{$message}}</span>
                @enderror
        </div>
        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-form.submit-button>Post</x-form.submit-button>
        </div>
    </x-panel>
</form>
@else
<x-panel>
    <p class="font-semibold">
        <a href="/register" class="underline">Register</a> or <a href="/login" class="underline">Log In</a> to leave a comment
    </p>
</x-panel>
@endauth