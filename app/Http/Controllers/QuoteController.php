<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Quote;

class QuoteController extends Controller
{
    public function getIndex($author = null)
    {

        if (!is_null($author)) {

            $quote_author = Author::where('name', $author)->first();

            if ($quote_author) {

                $quotes = $quote_author->quotes()->orderBy('created_at', 'desc')->paginate(6);
            }
        } else {

            $quotes = Quote::orderBy('created_at', 'desc')->paginate(6);
        }
        return view('index', ['quotes' => $quotes]);
    }

    public function postQuote(Request $request)
    {
        $this->validate($request, [
            'author' => 'required|max:60|alpha',
            'quote' => 'required|max:500'
        ]);

        $author_text = ucfirst($request['author']);
        $quote_text = $request['quote'];

        $author = Author::where('name', '=', $author_text)->first();

        if (!$author) {
            $author = new Author();
            $author->name = $author_text;
            $author->save();
        }

        $quote = new Quote();
        $quote->quote = $quote_text;
        $author->quotes()->save($quote);

        return redirect()->route('index')->with([
            'success' => 'Quote saved'
        ]);
    }

    public function getDeleteQuote($quote_id)
    {
        $quote = Quote::find($quote_id);

        $delete_author = false;

        if (count($quote->author->quotes) === 1) {

            $quote->author->delete();
            $delete_author = true;
        }

        $quote->delete();

        $message = $delete_author ? 'Quote and author deleted!' : 'Quote deleted!';

        return redirect()->route('index')->with(['success' => $message]);
    }
}
