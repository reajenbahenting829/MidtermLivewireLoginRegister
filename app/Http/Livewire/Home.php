<?php

namespace App\Http\Livewire;

use App\Models\Music;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Home extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $Location = 'all';
    public $sort = "asc";
    public $Rate;
    public $byGenre = [];
    public $band, $location, $rate, $contact, $description, $image, $genre;

    public function addMusic(){

        $this->validate([
            'band' => ['string', 'required'],
            'description' => ['string', 'required'],
            'contact' => ['required'],
            'location' => ['string', 'required'],
            'genre' => ['required'],
            'rate' => ['string', 'required'],
            'image' => ['image', 'required'], // 1MB Max
        ]);

        Music::create([
            'band' => $this->band,
            'description' => $this->description,
            'contact' => $this->contact,
            'location' => $this->location,
            'genre' => $this->genre,
            'rate' => $this->rate,
            'image' => $this->image->store('Music', 'public')]);

            return redirect('/')->with('message', 'Created Successfully');
    }

    public function editMusic(int $music_id){
        $music = Music::find($music_id);
        if($music){
            $this->music_id = $music->id;
            $this->band = $music->band;
            $this->description = $music->description;
            $this->contact = $music->contact;
            $this->location = $music->location;
            $this->genre = $music->genre;
            $this->rate = $music->rate;

        }else{
            return redirect()->to('/');
        }

    }

    public function updateMusic(){
        $this->validate([
            'band' => ['string', 'required'],
            'description' => ['string', 'required'],
            'contact' => ['required'],
            'location' => ['string', 'required'],
            'genre' => ['required'],
            'rate' => ['string', 'required'],
            'image' => ['nullable'],

        ]);
        try{
        $music = Music::find($this->id);

        Music::where('id',$this->music_id)->update([
            'band' => $this->band,
            'description' => $this->description,
            'contact' => $this->contact,
            'location' => $this->location,
            'genre' => $this->genre,
            'rate' => $this->rate,
        ]);

        if($this->image != null){
            Music::where('id',$this->music_id)->update(['image' => $this->image->store('Music', 'public')]);
        }
        }catch(\Exception $e){
            return redirect('/')->with('message', 'Updated Successfully');
        }
        return redirect('/')->with('message', 'Updated Successfully');
    }

    public function deleteMusic(int $music_id)
    {
        $this->music_id = $music_id;
    }

    public function destroyMusic()
    {
        Music::find($this->music_id)->delete();
        return redirect('/')->with('message', 'Deleted Successfully');

    }

    public function showmusicbands(){

        $query = Music::when($this->byGenre, function($q){
            $q->whereIn('genre', $this->byGenre);
        })->orderBy('rate', $this->sort)
            ->search($this->search);


        if($this->Rate){
            $query->where('rate', '>=', $this->Rate);
        }

        if($this->Location != 'all'){
            $query->where('location', $this->Location);
        }

        $musicbands = $query->paginate(6);
        return compact('musicbands');
    }
    public function resetFilters(){
        $this->reset('search', 'byGenre', 'Rate', 'sort', 'Location');
    }
    public function render(){
        return view('livewire.home', $this->showmusicbands());
    }
}
