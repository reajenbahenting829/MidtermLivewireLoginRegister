<div>
    <div class="container pt-5">
        <div class="mx-auto mb-2">
            @include('livewire.filter')

                    @include('livewire.create')
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                @foreach ($musicbands as $mb)
                    <div
                        class="card mb-3 buttonpage me-3 d-flex justify-content-between" style="max-width: 400px;">
                        <div class="container" data-bs-toggle="modal" data-bs-target="#viewMusic{{ $mb->id }}">
                            <img src="{{ asset('storage') }}/{{ $mb->image }}" class="img-fluid mt-2 mb-2"
                                alt="...">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="d-flex justify-content-end mb-1">
                                        <h5 class="card-title me-5">{{ $mb->band }}</h5>
                                        <a class="ms-1" type="button" data-bs-toggle="modal"
                                            data-bs-target="#updateMusic">
                                            <svg wire:click="editMusic({{ $mb->id }})"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="blue" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg>
                                        </a>
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="ms-1">
                                            <svg wire:click="deleteMusic({{ $mb->id }})"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <label class="card-text"><span class="fst-italic">Location: </span> <span
                                            class="fw-semibold"> {{ $mb->location }} </span></label><br>
                                    <label class="card-text"><span class="fst-italic">Rate: </span> <span
                                            class="fw-semibold">P{{ $mb->rate }} </span></label><br>
                                    <label class="card-text"><span class="fst-italic">Genre: </span> <span
                                            class="fw-semibold"> {{ $mb->genre }} </span></label>
                                </div>
                            </div>
                        </div>
                        @include('livewire.delete')
                        @include('livewire.show')
                    </div>
                    @include('livewire.edit')
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $musicbands->links() }}
</div>
</div>
</div>
