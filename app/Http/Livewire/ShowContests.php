<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contest;
use App\Models\Submission;
use Livewire\WithFileUploads;

class ShowContests extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;
    public $featured_image;
    public $modelId;

    public $modalFormVisible = false;

    public $name;
    public $email;
    public $submission_image;
    public $country;
    public $contest_id;


    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }

    public function modelData()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'country' => $this->country,
            'submission_image' => $this->submission_image->store('images', 'public'),
            'contest_id' => $this->contest_id,

        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'submission_image' => 'image|required'
        ];
    }
    public function create()
    {
        $this->validate();
        Submission::create($this->modelData());
        $this->modalFormVisible = false;
        $this->resetVars();
    }

    public function resetVars()
    {
        $this->name = null;
        $this->email = null;
        $this->country = null;
        $this->submission_image = null;
    }

//    We are passing the {urL} in the routes here we are accepting it and passing it to another function that retrieves the results
    public function mount($url)
    {
        $this->retrieveContent($url);
    }

//    Render livewire function with the layout frontend
    public function render()
    {
        return view('livewire.show-contests')->layout('layouts.frontend');
    }

//    Retieves the id of the contest and takes the results associated with that id
    public function retrieveContent($url)
    {
        $data = Contest::where('id', $url)->first();
        $this->title = $data->title;
        $this->description = $data->description;
        $this->image = $data->image;
        $this->featured_image = $data->featured_image;
        $this->contest_id = $data->id;
    }
}
