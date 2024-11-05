<x-app-layout>
    <div class="py-10">
        <div class="flex justify-center">
            <button type="button"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-3 px-5 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="tambah-modal" data-hs-overlay="#tambah-modal">
                <i class="fas fa-plus mr-2"></i>
                <span class="mr-2">Tambah Tema</span>
            </button>
        </div>
        <!-- Tambah Modal -->
        <div id="tambah-modal"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1" aria-labelledby="tambah-modal-label">
            <div
                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center py-3 px-4 border-b">
                        <h3 id="tambah-modal-label" class="font-bold text-gray-800">
                            Tambah Tema
                        </h3>
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200"
                            aria-label="Close" data-hs-overlay="#tambah-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <form action="{{ route('themes.store') }}" method="POST" class="p-4 overflow-y-auto">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Tema</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col-span-2">
                                <label for="view_file" class="block mb-2 text-sm font-medium text-gray-900">Nama File
                                    Tema</label>
                                <input type="text" name="view_file" id="view_file"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col-span-2">
                                <label for="thumbnail"
                                    class="block mb-2 text-sm font-medium text-gray-900">Thumbnail</label>
                                <input type="text" name="thumbnail" id="thumbnail"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col-span-2">
                                <label for="path" class="block mb-2 text-sm font-medium text-gray-900">Path
                                    Tema</label>
                                <input type="text" name="path" id="path"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                <i class="fas fa-save mr-2"></i>
                                <span class="mr-2">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Daftar Tema -->
        <div class="mx-auto px-4 py-10">
            <h2 class="text-3xl font-bold font-croissant text-center mb-10">Tema</h2>
            <div class="grid grid-cols-1 gap-8">
                @foreach ($themes as $theme)
                    <div class="flex flex-col items-center">
                        <div class="max-w-[300px] rounded-lg overflow-hidden shadow-lg border bg-white">
                            <img src="{{ asset($theme->path . '/' . $theme->thumbnail) }}" alt="{{ $theme->name }}"
                                class="w-[250px] h-[400px] object-cover mx-auto mt-4">
                            <div class="px-6 py-4">
                                <div class="font-bold font-croissant text-xl mb-2 text-center">{{ $theme->name }}
                                </div>
                            </div>
                            <div class="flex justify-center space-x-2 pb-4 px-6">
                                <a href="{{ route('demo.theme', ['slug' => $theme->slug]) }}" target="_blank"
                                    class="bg-green-500 hover:bg-green-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Demo
                                </a>
                                <button data-modal-target="edit-modal-{{ $theme->id }}"
                                    data-modal-toggle="edit-modal-{{ $theme->id }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Edit
                                </button>
                                <button data-modal-target="confirm-delete-modal-{{ $theme->id }}"
                                    data-modal-toggle="confirm-delete-modal-{{ $theme->id }}"
                                    class="bg-red-500 hover:bg-red-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Edit Modal -->
                    <div id="edit-modal-{{ $theme->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow">
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        Edit Tema
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-toggle="edit-modal-{{ $theme->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <form action="{{ route('themes.update', $theme->id) }}" method="POST"
                                    class="p-4 md:p-5">
                                    @csrf
                                    @method('PUT')
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900">Nama
                                                Tema</label>
                                            <input type="text" name="name" id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                value="{{ $theme->name }}" required
                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                oninput="this.setCustomValidity('')">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="view_file"
                                                class="block mb-2 text-sm font-medium text-gray-900">Nama File
                                                Tema</label>
                                            <input type="text" name="view_file" id="view_file"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                value="{{ $theme->view_file }}" required
                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                oninput="this.setCustomValidity('')">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="thumbnail"
                                                class="block mb-2 text-sm font-medium text-gray-900">Thumbnail</label>
                                            <input type="text" name="thumbnail" id="thumbnail"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                value="{{ $theme->thumbnail }}" required
                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                oninput="this.setCustomValidity('')">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="path"
                                                class="block mb-2 text-sm font-medium text-gray-900">Path</label>
                                            <input type="text" name="path" id="path"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                value="{{ $theme->path }}" required
                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                oninput="this.setCustomValidity('')">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-blue-500 hover:bg-blue-600 shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        <i class="fas fa-edit me-2"></i>
                                        Update Tema
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Hapus Modal -->
                    <div id="confirm-delete-modal-{{ $theme->id }}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow">
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        Konfirmasi Hapus
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                        data-modal-toggle="confirm-delete-modal-{{ $theme->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <div class="p-4">
                                    <p class="text-gray-700">Apakah Anda yakin ingin menghapus tema ini?</p>
                                </div>
                                <div class="flex justify-end p-4">
                                    <form action="{{ route('themes.destroy', $theme->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                            Hapus
                                        </button>
                                    </form>
                                    <button type="button"
                                        class="ml-3 text-gray-500 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm py-2 px-4 focus:outline-none"
                                        data-modal-toggle="confirm-delete-modal-{{ $theme->id }}">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
