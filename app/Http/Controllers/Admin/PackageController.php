<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PackageBuy;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Routing\Controllers\HasMiddleware;
// use Illuminate\Routing\Controllers\Middleware;
use App\Services\PackageLogicService;

class PackageController extends Controller
{
    // public static function middleware(): array
    // {
    //     return [
    //         new Middleware('permission:view packages', only: ['index']),
    //         new Middleware('permission:add edit package', only: ['addEditPackage']),
    //         // new Middleware('permission:create role', only: ['create']),
    //         // new Middleware('permission:delete users', only: ['destroy']),
    //     ];
    // }
    //

    protected $packageLogicService;

    public function __construct(PackageLogicService $packageLogicService)
    {
        $this->middleware('permission:view packages')->only(['packages']);
        // $this->middleware('permission:edit package')->only(['edit']);
        // $this->middleware('permission:create package')->only(['create']);
        // $this->middleware('permission:delete permission')->only(['destroy']);
        $this->packageLogicService = $packageLogicService;
    }

    public function packages()
    {
        $packages = Package::get()->toArray();
        return view('admin.packages.packages', compact('packages'));
    }

    public function addEditPackage(Request $request, $id = null)
    {
        if ($id == '') {
            $title = 'Add Package';
            $package = new Package();
            $message = 'Package added successfully!';
        } else {
            $title = 'Edit Package';
            $package = Package::find($id);

            if (!$package) {
                return redirect('admin/packages')->with('error_message', 'Package not found!');
            }

            $message = 'Package updated successfully!';
        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'name' => 'required',
                'number_of_section' => 'nullable|integer|min:0',
                'number_of_category' => 'nullable|integer|min:0',
                'number_of_product' => 'nullable|integer|min:0',
                'price' => 'nullable|numeric|min:0',
                'days' => 'nullable|numeric|min:0',
                'description' => 'nullable|string',
            ];

            $customMessages = [
                'name.required' => 'Package Name is required.',
                'number_of_section.integer' => 'Number of sections must be an integer.',
                'number_of_category.integer' => 'Number of categories must be an integer.',
                'number_of_product.integer' => 'Number of products must be an integer.',
                'price.numeric' => 'Price must be a valid number.',
                'days.numeric' => 'Price must be a valid number.',
            ];

            $validator = Validator::make($data, $rules, $customMessages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $package->name = $data['name'];
            $package->number_of_section = $data['number_of_section'];
            $package->number_of_category = $data['number_of_category'];
            $package->number_of_product = $data['number_of_product'];
            $package->price = $data['price'];
            $package->days = $data['days'];
            $package->status = $data['status'];
            $package->description = $data['description'];
            $package->save();

            return redirect('admin/packages')->with('success_message', $message);
        }

        return view('admin.packages.add_edit_package')->with(compact('title', 'package'));
    }

    public function changePackageStatus(Request $request)
    {

        Package::where('id', $request->package_id)->update([
            "status" => $request->status
        ]);

        return response()->json(['success' => true]);
    }

    public function packageBuy()
    {
        $packageBuy = PackageBuy::with('shop')->first();
        return $packageBuy;
        dd($packageBuy);
        return view('admin.packages.package_buy', compact('packageBuy'));
    }

    // public function upgradePackage(Request $request)
    // {
    //     // Validate the incoming request
    //     $validatedData = $request->validate([
    //         'package_id' => 'required|integer',
    //         'name' => 'required|string',
    //         'number_of_section' => 'required|integer',
    //         'number_of_category' => 'required|integer',
    //         'number_of_product' => 'required|integer',
    //         'price' => 'required|numeric',
    //     ]);

    //     // Send data to API
    //     $response = $this->packageLogicService->sendPackageUpgradeData($validatedData);

    //     if (isset($response['error']) && $response['error']) {
    //         return response()->json([
    //             'message' => 'Failed to upgrade package.',
    //             'details' => $response['message'],
    //         ], 500);
    //     }

    //     return response()->json([
    //         'message' => 'Package upgraded successfully!',
    //         'response' => $response,
    //     ]);
    // }

    public function upgradePackage()
    {
        // return "hello";
        $staticData = [
            'id' => 1,
            'name' => 'gold Package title',
            'description' => 'Gold Package',
            'number_of_section' => 10,
            'number_of_category' => 5,
            'number_of_product' => 20,
            'price' => 1000,
        ];

        $response = $this->packageLogicService->sendPackageUpgradeData($staticData);
        $response = json_encode($response);
        // print_r($response);
        // die;
        if (isset($response['error']) && $response['error']) {
            return response()->json([
                'message' => 'Failed to upgrade package.',
                'details' => $response['message'],
            ], 500);
        }

        return response()->json([
            'message' => 'Package upgraded successfully!',
            'response' => $response,
        ]);
    }
}
