<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $question->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-sm text-gray-600 mb-2">
                        Ditanyakan oleh: <strong>{{ $question->user->name }}</strong>
                        ({{ $question->created_at->format('d M Y, H:i') }})
                        Kategori: <span class="font-medium">{{ $question->category->name }}</span>
                    </div>

                    <div class="prose max-w-none text-gray-800">
                        {!! nl2br(e($question->content)) !!}
                    </div>

                    @if ($question->image)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $question->image) }}" alt="Gambar pertanyaan"
                                class="max-w-full h-auto rounded-lg border">
                        </div>
                    @endif

                    @canany(['update', 'delete'], $question)
                        <div class="mt-4 pt-4 border-t text-right">
                            @can('update', $question)
                                <a href="{{ route('questions.edit', $question) }}"
                                    class="text-sm text-yellow-600 hover:text-yellow-800">Edit Pertanyaan</a>
                            @endcan
                            @can('delete', $question)
                                <form action="{{ route('questions.destroy', $question) }}" method="POST" class="inline ml-2"
                                    onsubmit="return confirm('Anda yakin ingin menghapus pertanyaan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm text-red-600 hover:text-red-800">Hapus
                                        Pertanyaan</button>
                                </form>
                            @endcan
                        </div>
                    @endcanany
                </div>
            </div>

            <div class="mt-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">
                    {{ $question->answers->count() }} Jawaban
                </h3>

                <div class="space-y-4">
                    @forelse ($question->answers as $answer)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <div class="text-sm text-gray-600 mb-2">
                                    Dijawab oleh: <strong>{{ $answer->user->name }}</strong>
                                    ({{ $answer->created_at->diffForHumans() }})
                                </div>
                                <div class="prose max-w-none text-gray-700">
                                    {!! nl2br(e($answer->content)) !!}
                                </div>

                            </div>
                        </div>
                    @empty
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-500">
                                Belum ada jawaban untuk pertanyaan ini.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">
                        Tulis Jawaban Anda
                    </h3>

                    <p class="text-gray-500">Form untuk menjawab akan ada di sini.</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
