<?php

namespace App\Http\Controllers;

use App\Repositories\FormRepository;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * @var FormRepository
     */
    private $repository;

    public function __construct(FormRepository $repository)
    {
        $this->repository = $repository;
    }

    public function general()
    {
        $repository = $this->repository;
        return view('form.general',compact('repository'));
    }

    public function advance()
    {
        $repository = $this->repository;
        return view('form.advance',compact('repository'));
    }

    public function editor()
    {
        return view('form.editor');
    }
}
