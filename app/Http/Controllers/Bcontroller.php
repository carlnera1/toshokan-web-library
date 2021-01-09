<?php

namespace App\Http\Controllers;
use App\Models\Booktable;
use Illuminate\Http\Request;
class Bcontroller extends Controller
{
    public function index(){
        $i = 0;
        $booklist = Booktable::latest()->paginate();
        $newbooklist = [];
        foreach ($booklist as $book){
            $types = $book->b_type;
            $newtype = $this->ifFiction($types);
            $book['b_type'] = $newtype;
            array_push($newbooklist,$book);
        }
        return view('books.start')->with(['booklist'=>$newbooklist]);
    }

    public function create(){
        return view('books.add');
    }

    public function show(Booktable $book){
        $type = $this->ifFiction($book->b_type);
        $book['b_type'] = $type;
        return view('books.details')->with(['bookdetails'=>$book]);
    }

    public function edit(Booktable $book){
        $type = $this->ifFiction($book->b_type);
        $book['b_type'] = $type;
        return view('books.edit')->with(['bookdetails'=>$book]);
    }

    public function update(Request $request, Booktable $book)
    {
        $request->validate([
            'b_name'=> 'required',
            'b_author'=> 'required'
        ]);
        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book Details Updated Successfully');
    }

    public function store(Request $request){
         $request->validate([
            'b_name'=> 'required',
            'b_author'=> 'required'
        ]);
    
        Booktable::create($request->all());
        return redirect()->route('books.index')
            ->with('success', 'Book Added');
    }

    public function destroy($rq){
        Booktable::find($rq)->delete();
        return redirect()->route('books.index')
            ->with('success', 'Book has been removed');
    }

    public function toAbout(){
        return view('books.about');
    }

    public function ifFiction($types){
        if ($types == '0') {
            $types = 'Non-Fiction';
        }
        else{
            $types = 'Fiction';
        }
        return $types;
    }
}
