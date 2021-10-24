<?php

namespace App\Http\Controllers;

use App\Imports\NactaImport;
use App\Models\Nacta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class NactaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $collection = null;
        if (isset($request->searchq) && !empty($request->searchq)) {
            $collection = Nacta::where('name', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('category', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('aliases', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('address', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('city', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('country', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('program', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('last_occupation', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('birth_date', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('birth_country', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('residence_country', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('nationality', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('external_id', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('gender', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('internal_id', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('deceased', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('remarks', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('data_sources', 'LIKE', '%' . $request->searchq . '%')
                ->orWhere('related_to', 'LIKE', '%' . $request->searchq . '%')
                ->paginate(10)->withQueryString();
        } else {
            $collection = Nacta::paginate(10)->withQueryString();
        }
        return view('nacta.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('excel-import.excel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'import_file' => 'required|mimes:xlsx,xls',
        ]);
        set_time_limit(600);
        DB::table('nactas')->truncate();
        Excel::import(new NactaImport(), $request->file('import_file'));
        session()->flash('message', 'NACTA excel file successfully imported.');
        return redirect()->route('nacta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Nacta $nacta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nacta = Nacta::findOrFail($id);
        return view('nacta.show',compact('nacta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Nacta $nacta
     * @return \Illuminate\Http\Response
     */
    public function edit(Nacta $nacta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Nacta $nacta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nacta $nacta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Nacta $nacta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacta $nacta)
    {
        //
    }
}
