<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
    	return view('masterData/book/index', [
    		'books' => Book::latest()->get()
    	]);
    }

    public function create()
    {
    	return view('masterData/book/create');
    }

    public function store(BookRequest $request)
    {
    	if (request()->file('cover')) {
    		$cover = request()->file('cover')->store('images/book');
    	} else {
    		$cover = 'default.jpg';
    	}

    	$data = request()->all();
    	$data['cover'] = $cover;

    	Book::create($data);

    	return redirect('/data/book')->with('created', 'New book has been saved!');
    }

    public function edit(Book $book)
    {
    	return view('masterData/book/edit', [
            'book' => $book
        ]);
    }

    public function update(BookRequest $request, Book $book)
    {
    	if (request()->file('cover')) {
            \Storage::delete()->$book['cover'];
            $cover = request()->file('cover')->store('images/book');
        } else {
            $cover = $book['cover'];
        }

        $data = request()->all();
        $data['cover'] = $cover;

        $book->update($data);

        return redirect('/data/book')->with('updated', 'Book has been updated!');
    }

    public function destroy(Book $book)
    {
    	\Storage::delete($book['cover']);
        $book->delete();

        return redirect('/data/book')->with('deleted', 'Book has been deleted!');
    } 
}













