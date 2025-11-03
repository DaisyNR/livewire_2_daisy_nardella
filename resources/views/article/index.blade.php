<x-layout>
    @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
    <livewire:table-article/>
</x-layout>