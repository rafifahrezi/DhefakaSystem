<div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-4">Profil Saya</h2>

    @if (session()->has('success'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('success') }}
        </div>
    @endif

    {{-- Update Name --}}
    <div class="mb-6">
        <label class="block font-medium text-gray-700">Nama</label>
        <input type="text" wire:model.defer="name" class="mt-1 block w-full border rounded px-3 py-2">
        @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        <button wire:click="updateName" class="mt-3 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded dark:bg-blue-500 dark:hover:bg-blue-600">
            Simpan Nama
        </button>
    </div>

    <hr class="my-6 border-t">

    {{-- Update Password --}}
    <div>
        <label class="block font-medium text-gray-700">Password Saat Ini</label>
        <input type="password" wire:model.defer="current_password" class="mt-1 block w-full border rounded px-3 py-2">
        @error('current_password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        <label class="block font-medium text-gray-700 mt-4">Password Baru</label>
        <input type="password" wire:model.defer="new_password" class="mt-1 block w-full border rounded px-3 py-2">
        @error('new_password') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror

        <label class="block font-medium text-gray-700 mt-4">Konfirmasi Password Baru</label>
        <input type="password" wire:model.defer="new_password_confirmation" class="mt-1 block w-full border rounded px-3 py-2">

        <button wire:click="updatePassword" class="mt-4 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Simpan Password
        </button>
    </div>
</div>
