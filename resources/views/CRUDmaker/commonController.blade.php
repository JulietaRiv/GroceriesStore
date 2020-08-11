<?php
echo "<?php\n";
?>

namespace App\Http\Controllers\{{ $data['pluralUpperName'] }};

use Illuminate\Http\Request;
use App;
use App\{{ $data['pluralUpperName'] }};

class {{ $data['pluralUpperName'] }}Controller extends Controller
{
    public function index()
    {
        return view ("{{ $data['pluralName'] }}/{{ $data['upperName'] }}", ["{{ $data['pluralName'] }}" => ${{ $data['pluralName'] }}]);
    }

    public function create()
    {
        return view ("{{ $data['pluralUpperName'] }}/Form");
    }

    public function store(Request $request)
    {
        return redirect()->route("{{ $data['upperName'] }}");
    }

    public function detail ($id)
    {
        return view ("{{ $data['pluralName'] }}/DetailView", ["{{ $data['name'] }}" => ${{ $data['name'] }}] );
    }

    public function delete ($id)
    {
        if (${{ $data['name'] }} = {{ $data['upperName'] }}::where('id', '=', $id)->first()){
            ${{ $data['name'] }}->delete();
            return redirect()->route("{{ $data['pluralName'] }}")->with('success','Record deleted succesfully!');
        } else {
            return redirect()->route("{{ $data['pluralName'] }}")->with('errors','An error occurs!');
        }  
    }

    public function edit($id)
    {
        return view ("{{ $data['pluralUpperName'] }}/EditForm");        
    }

    public function update (Request $request)
    {
        return redirect()->route("{{ $data['pluralName'] }}")->with('success','Record updated succesfully!');
    }

}