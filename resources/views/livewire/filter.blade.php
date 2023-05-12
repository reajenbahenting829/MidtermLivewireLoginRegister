<div>
     <div class="col-md-3">

                </div>
<br>
<div class="col-md-2 ms-5">

</div>
<br>
    <div class="ol-md-2 ms-5"">
        <h3 class="fst-italic text-primary text-center col-md-8">Play your Favorite Band!</h3>
        <a type="button" class="btn btn-info ms-auto mb-3" data-bs-toggle="modal"
        data-bs-target="#exampleModal">
        Add
    </a>
    <div class="row text-white p-2 mb-4 d-flex border border-3 col-md-12 " style="height: 200px; background-color:rgb(203, 66, 130)">
    {{-- <div class="row text-white p-2 mb-4 d-flex border border-3 col-md-8 bg-dark"> --}}
        <div class="col-md-3">
            <input type="search" wire:model="search" class="form-control input" placeholder="Search">
            <label>Genre</label>
            <div class="form-check">
                <input wire:model='byGenre' name="Rock" class="form-check-input" type="checkbox" value="Pop"
                    id="Pop">
                <label class="form-check-label" for="Pop">
                    Pop
                </label>
            </div>
            <div class="form-check">
                <input wire:model='byGenre' name="Rock" class="form-check-input" type="checkbox" value="Rock"
                    id="Rock">
                <label class="form-check-label" for="Rock">
                    Rock
                </label>
            </div>
            <div class="form-check">
                <input wire:model='byGenre' class="form-check-input" type="checkbox" value="Acoustic"
                    id="Acoustic">
                <label class="form-check-label" for="Acoustic">
                    Acoustic
                </label>
            </div>
            <div class="form-check">
                <input wire:model='byGenre' class="form-check-input" type="checkbox" value="Reggae"
                    id="Reggae">
                <label class="form-check-label" for="Reggae">
                    Reggae
                </label>
            </div>
            <div class="form-check">
                <input wire:model='byGenre' class="form-check-input" type="checkbox" value="Classical"
                    id="Classical">
                <label class="form-check-label" for="Classical">
                    Classical
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3" style="width: 240px;">
                <label>Location</label>
                <select class="form-select" wire:model="Location">
                    <option value="all">Select Location</option>
                    @foreach ($musicbands as $mub)
                        <option value="{{ $mub->location }}">{{ $mub->location }}</option>
                    @endforeach
                </select>
            </div>
            <div class="" style="width: 240px;">
                <label for="">Sort by </label>
                <select name="" id="" class="form-select" wire:model='sort'>
                    <option value="asc">Lowest to Highest</option>
                    <option value="desc">Highest to Lowest</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <label for="customRange2">Rate</label><br>
            <input type="range" class="form-range" min="3000" max="25000" id="customRange2"
                style="width: 250px;" wire:model='Rate'>
            <p class="ms-5">P{{ $this->Rate }}</p>
            <div class="d-flex justify-content-end">
                <button class="btn btn-info mt-2" wire:click='resetFilters' type='button'>
                    Reset Filter</button>
            </div>
        </div>
    </div>
        @if ($message = Session::get('message'))
        <div class="alert alert-success col-md-3 d-flex h-25 ms-5">
            <div class="">
                <strong>{{ $message }}</strong>
            </div>
            <div class="btn close ms-auto" data-dismiss="alert">x</div>
        </div>
        @endif
</div>
