<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Illuminate\Http\Request;

class RecipientController extends Controller {

    public function oldies() {

        $base_query = Recipient::all();
        $emplos = [];

        foreach ($base_query as $recipient) {

            if ($recipient -> was_past_recipient) {
                array_push($emplos, $recipient);
            }

        }

        return view('aux', ['data' => $emplos]);

    }

    public function search(Request $request) {
        $query_text = mb_strtoupper($request -> query_text);

        $dni_query = Recipient::where('document', 'LIKE', '%'.$query_text.'%') -> orWhere('name', 'LIKE', '%'.$query_text.'%');
        $final_query = $dni_query -> paginate(14);

        if (!$final_query -> isEmpty()) {

            return \response(view('recipients.index', ['data' => $final_query]));

        } else {

            return \response(view('recipients.index', ['nores' => true]));

        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $employees = Recipient::orderBy('name', 'asc');

        if ($employees -> get() -> isEmpty()) {
            return \response(view('recipients.index', ['data' => [], 'nores' => true]));
        } else {
            return \response(view('recipients.index', ['data' => $employees -> paginate(15)]));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipient $recipient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipient $recipient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipient $recipient)
    {
        //
    }

}
