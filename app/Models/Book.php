<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'isbn',
        'description',
        'book_image',
    ];
}
// /* All() views all the books*/

// $books = App\Models\Book::all();
// $books->toArray();
// */

// /* orderby() views all the books in order*/

// $books = App\Models\Book::orderby('title', 'asc')->get();
// $books->toArray();


// /* where() views a subset of books*/

// $books = App\Models\Book::where('category', 'Fiction')->get();
// $books->toArray();


// /* find() views a single book by id*/

// $books = App\Models\Book::find(1);
// $books->toArray();

// /* take() limits the number of books viewed*/

// $books = App\Models\Book::take(5)->get();
// $books->toArray();


// /* inRandomOrder() views a random selection of books*/

// $books = App\Models\Book::inRandomOrder()->take(3)->get();
// $books->toArray();



