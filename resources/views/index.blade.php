@extends('layouts.master')

@section('title')
    Quotes
@endsection

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')

    @if(!empty(Request::segment(1)))
        <section class="info-box filter-bar">
            A filter has been set! <a href="{{ route('index') }}">Show all quotes</a>
        </section>
    @endif

    @if(count($errors) > 0)
        <section class="info-box fail">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </section>
    @endif

    @if(Session::has('success'))
        <section class="info-box success">
            {{ Session::get('success') }}
        </section>
    @endif

        @if(count($quotes) > 0)
            <section class="quotes">
                <h1>Latest Quotes</h1>

                @for($i = 0; $i < count($quotes); $i++)
                    <article
                            class="quote{{--{{ $i % 3 === 0 ? ' first-in-line' : (($i + 1) % 3 === 0 ? ' last-in-line' : '' )}}--}}">
                        <div class="delete"><a href="{{ route('delete', ['quote_id' => $quotes[$i]->id]) }}">x</a></div>
                        {{ $quotes[$i]->quote }}
                        <div class="info">Crated by <a
                                    href="{{ route('index', ['author' => $quotes[$i]->author->name]) }}">{{
                $quotes[$i]->author->name }}</a> on {{ $quotes[$i]->created_at }}
                        </div>
                    </article>
                @endfor

                <div class="pagination">
                    @if($quotes->currentPage() !== 1)
                        <a href="{{ $quotes->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
                    @endif
                    @if($quotes->currentPage() !== $quotes->lastPage() && $quotes->hasPages())
                        <a href="{{ $quotes->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
                    @endif
                </div>

            </section>

        @else
            <div class="no-quotes">There are no quotes.</div>
        @endif

        <section class="add-quote">

            <div class="modal fade" id="modal">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="fa fa-close"></i>
                            </button>
                            <h4 class="modal-title">Add Quote</h4>
                        </div>
                        <div class="modal-body" align="center">

                            <form action="{{ route('create') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="input-group">
                                    <label for="author">Your name</label>
                                    <input id="author" type="text" name="author" placeholder="Name">
                                </div>
                                <div class="input-group">
                                    <label for="quote">Your quote</label>
                                    <textarea id="quote" name="quote" rows="5" placeholder="Quote" style="resize: none; width: 200px;"></textarea>
                                </div>
                                <button type="submit" class="btn">Add Quote</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn" data-toggle="modal" data-target="#modal">Add New Quote</button>

        </section>

@endsection