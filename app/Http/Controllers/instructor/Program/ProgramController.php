<?php
namespace App\Http\Controllers\Instructor\Program;

use App\Http\Controllers\Controller;
use App\Models\Program\Program;
use App\Models\Program\ProgramModule;
use App\Models\FileUploader;
use App\Models\SeoField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProgramController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
    }

    public function index()
    {
        $query = Program::join('program_categories', 'programs.category_id', 'program_categories.id')
            ->select('programs.*', 'program_categories.title as category', 'program_categories.slug as category_slug')
            ->where('programs.owner_id', auth()->user()->id);  // For program owners

        if (request()->has('search')) {
            $query = $query->where('programs.title', 'LIKE', "%" . request()->query('search') . "%");
        }

        // Add filters like category, status, price, etc.

        $page_data['programs'] = $query->paginate(20)->appends(request()->query());
        return view('instructor.program.index', $page_data);
    }

    public function create()
    {
        return view('instructor.program.create');
    }

    public function edit($id)
    {
        $program = Program::where('id', $id)->where('owner_id', auth()->user()->id)->first();
        if (! $program) {
            Session::flash('success', 'Data not found.');
            return redirect()->route('instructor.programs');
        }

        $page_data['program_details'] = $program;
        $page_data['modules']         = ProgramModule::where('program_id', $id)->get();
        return view('instructor.program.edit', $page_data);
    }

    public function store(Request $request)
    {
        $rules = [
            'title'            => 'required|string',
            'description'      => 'required|string',
            'category_id'      => 'required',
            'thumbnail'        => 'required|file',
            'is_paid'          => Rule::in(['0', '1']),
            'price'            => 'required_if:is_paid,1|min:1|nullable|numeric',
            'discount_flag'    => Rule::in(['', '1']),
            'discounted_price' => 'required_if:discount_flag,1|min:1|nullable|numeric',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $title = Program::where('owner_id', auth()->user()->id)->where('title', $request->title)->first();
        if ($title) {
            Session::flash('error', 'This title has been taken.');
            return redirect()->back();
        }

        $data['owner_id']         = auth()->user()->id;
        $data['title']            = $request->title;
        $data['slug']             = Str::slug($request->title);
        $data['short_description'] = $request->short_description;
        $data['description']      = $request->description;
        $data['publish_date']     = strtotime($request->publish_date);
        $data['category_id']      = $request->category_id;
        $data['is_paid']          = $request->is_paid;
        $data['price']            = $request->price;
        $data['discount_flag']    = $request->discount_flag;
        $data['discounted_price'] = $request->discounted_price;
        $data['status']           = 1;

        if ($request->thumbnail) {
            $data['thumbnail'] = "uploads/program/thumbnail/" . nice_file_name($request->title, $request->thumbnail->extension());
            FileUploader::upload($request->thumbnail, $data['thumbnail']);
        }

        $insert_id = Program::insertGetId($data);

        Session::flash('success', 'Program has been created.');
        return redirect()->route('instructor.program.edit', [$insert_id, 'tab' => 'curriculum']);
    }

    public function delete($id)
    {
        $program = Program::where('id', $id)->where('owner_id', auth()->user()->id);
        if ($program->doesntExist()) {
            Session::flash('success', 'Data not found.');
            return redirect()->back();
        }

        $program->delete();
        Session::flash('success', 'Program has been deleted.');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $query = Program::where('id', $id)->where('owner_id', auth()->user()->id);

        if ($query->doesntExist() || $request->tab == '') {
            Session::flash('error', 'Data not found.');
            return redirect()->back();
        }

        $rules = $data = [];
        if ($request->tab == 'basic') {
            $rules = [
                'title'       => 'required|string',
                'description' => 'required|string',
                'category_id' => 'required',
            ];

            $data['title']             = $request->title;
            $data['slug']              = Str::slug($request->title);
            $data['short_description'] = $request->short_description;
            $data['description']       = $request->description;
            $data['publish_date']      = strtotime($request->publish_date);
            $data['category_id']       = $request->category_id;

            $title = Program::where('owner_id', auth()->user()->id)
                ->where('id', '!=', $id)
                ->where('title', $request->title)->first();
            if ($title) {
                Session::flash('error', 'This title has been taken.');
                return redirect()->back();
            }

        } elseif ($request->tab == 'pricing') {
            $rules = [
                'is_paid'          => Rule::in(['0', '1']),
                'price'            => 'required_if:is_paid,1|min:1|nullable|numeric',
                'discount_flag'    => Rule::in(['', '1']),
                'discounted_price' => 'required_if:discount_flag,1|min:1|nullable|numeric',
            ];

            $data['is_paid']          = $request->is_paid;
            $data['price']            = $request->price;
            $data['discount_flag']    = $request->discount_flag;
            $data['discounted_price'] = $request->discounted_price;

        } elseif ($request->tab == 'info') {
            // Handle additional info updates like outcomes, requirements, etc.
        } elseif ($request->tab == 'media') {
            // Handle media updates
        } elseif ($request->tab == 'seo') {
            // Handle SEO updates
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $query->update($data);

        Session::flash('success', 'Program has been updated successfully.');
        return redirect()->back();
    }

    public function purchase_history()
    {
        // Implement the purchase history logic similarly for programs
    }

    public function invoice($id)
    {
        // Implement invoice logic for programs
    }
}
