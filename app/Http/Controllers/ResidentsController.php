<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Residents;

class ResidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Residents::all();
        return view('residents.index',compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'middlename' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
        ]);
        Residents::create([
            'name' => ucfirst(strtolower(trans(($request['name'])))),
            'middlename' => ucfirst(strtolower(trans(($request['middlename'])))),
            'lastname' => ucfirst(strtolower(trans(($request['lastname'])))),
        ]);
        return redirect()->route('residents.index')->with('success','resident created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $resident = Residents::find($id);
      return view('residents.show',compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resident = Residents::find($id);
        return view('residents.edit',compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'name' => 'required',
          'middlenamme' => 'required',
          'lastname' => 'required',
        ]);
        Residents::find($id)->update($request->all());
        return redirect()->route('residents.index')->with('success','Resident update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Residents::find($id)->delete();
        return redirect()->route('residents.index')->with('success','Resident deleted success');
    }
}
