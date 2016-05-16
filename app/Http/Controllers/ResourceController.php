<?php namespace MySecurePortal\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class ResourceController extends Controller
{
    use ValidatesRequests;

    // GET http://webaddress/api/class
    public function index()
    {
        try {
            $items = $this->resourceModel::paginate(
                $this->request->get('take', $this->defaultPagination)
            );

            return response()->json($this->transformCollection($items, $this->transformer, false), 200);
        } catch (\Exception $e) {
            return $this->throwErrorMessage($e->getMessage());
        }
    }

    // POST http://webaddress/api/class
    public function store()
    {
        try {
            $this->validate($this->request, $this->validator->getRules());


        } catch (\Exception $e) {
            return $this->throwErrorMessage($e->getMessage());
        }
    }

    // GET http://webaddress/api/<id>
    public function show($id)
    {
        try {
            $item = $this->resourceModel::find(
                $id
            );

            return response()->json($this->transformItem($item, $this->transformer, false), 200);
        } catch (\Exception $e) {
            return $this->throwErrorMessage($e->getMessage());
        }
    }

    // PUT/PATCH http://webaddress/api/<id>
    public function update($id)
    {

    }

    // DELETE http://webaddress/api/<id>
    public function destroy($id)
    {
        try {
            $item = $this->resourceModel::find(
                $id
            );

            $item->delete();

            return response()->json([
                'success' => true,
                'message' => 'Record was Deleted',
            ], 200);
        } catch (\Exception $e) {
            return $this->throwErrorMessage($e->getMessage());
        }
    }

}
