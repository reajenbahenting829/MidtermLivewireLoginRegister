<div>
    <div wire:ignore.self class="modal fade" id="viewMusic{{ $mb->id }}" tabindex="-1"
        aria-labelledby="viewBandLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-info border border-light rounded-3 border-3" style="color:rgb(203, 66, 130)">
                <button type="button" class="btn-close bg-white ms-auto m-1" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage') }}/{{ $mb->image }}" class="rounded"
                            style="width:170px; height:150px" alt="...">
                    </div>
                    <div class="mx-auto mt-2">
                        <h3 class="text-center fw-bold">{{ $mb->band }}</h3>
                        <h6 class="text-center fw-light"> <span class="fst-italic">Contact Us:
                            </span>{{ $mb->contact }}</h6>
                        <div class="d-flex justify-content-center mb-2">
                            <button class="btn btn-info rounded-pill">Book Us Now</button>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center">{{ $mb->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
