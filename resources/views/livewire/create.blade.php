<div wire:ignore.self class="modal modal-md fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <h3 class="modal-title text-white" id="exampleModalLabel">Add Music</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body bg-success">
                                <form wire:submit.prevent="addMusic()">
                                    @csrf
                                    <div class="container mx-auto">
                                        <div class="row">
                                            <div class="col-md-8 ">
                                                <div class="form-group me-3">
                                                    <label for="" class="text-white" style="color:rgb(203, 66, 130)">Image:</label>
                                                    <input type="file" wire:model="image" class="form-control">
                                                    @error('image')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    @if ($image)
                                                        Photo Preview: <br>
                                                        <img src="{{ $image->temporaryUrl() }}" style="width:100px; height:100px"
                                                            class="rounded">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="" class="text-white" style="color:rgb(203, 66, 130)">Band Name:</label>
                                                    <input type="text" class="form-control" wire:model="band">
                                                    @error('band')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="" class="text-white" style="color:dimgray">Location</label>
                                                    <input type="text" class="form-control" wire:model="location">
                                                    @error('location')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group d-flex justify-content-between">
                                                    <div class="col-md-5">
                                                        <label for="" class="text-white" style="color:dimgray">Rate</label>
                                                        <input type="number" class="form-control" wire:model="rate">
                                                        @error('rate')
                                                            <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-5">
                                                        <label for="genre" class="text-white" style="color:dimgray">Genre</label>
                                                        <select class="form-select" wire:model="genre" id="genre">
                                                            <option selected>Select Genre</option>
                                                            <option value="Pop">Pop</option>
                                                            <option value="Rock">Rock</option>
                                                            <option value="Reggae">Reggae</option>
                                                            <option value="Acoustic">Acoustic</option>
                                                            <option value="Classical">Classical</option>
                                                        </select>
                                                        @error('genre')
                                                            <span class="error text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="text-white" style="color:dimgray">Contact No.</label>
                                                    <input type="number" class="form-control" wire:model="contact">
                                                    @error('contact')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="text-white" style="color:dimgray">History</label>
                                                    <textarea type="text" class="form-control" wire:model="description"></textarea>
                                                    @error('description')
                                                        <span class="error text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
