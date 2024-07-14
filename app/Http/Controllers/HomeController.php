<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Blog;
// use App\Models\User;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\BlogCategory;
// use App\Models\Category;
// use App\Models\Product;
use App;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;
// use App\Models\Comment;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countries = Country::all();
        $countriess = Country::whereIn('name',['THAILAND','SINGAPORE','UNITED ARAB EMIRATES','SRI LANKA','MALAYSIA','KUWAIT']) ->orderByRaw("
        CASE name 
            WHEN 'THAILAND' THEN 1 
            WHEN 'UNITED ARAB EMIRATES' THEN 2 
            WHEN 'SINGAPORE' THEN 3 
            WHEN 'SRI LANKA' THEN 4 
            WHEN 'MALAYSIA' THEN 5 
            WHEN 'KUWAIT' THEN 6 
        END
    ")->get();
    $blogs = Blog::latest('created_at')->select('id', 'name', 'image','slug','created_at')->selectRaw('SUBSTRING(`description`, 1, 500) as `description`')->take(4)->get();
        return view('welcome', compact('countries','countriess','blogs'));
    }
    public function visa()
    {
        return view('visa-inbuilt');
    }
    public function blog(){
        $blog = Blog::where('status', 'A')->select('id', 'name', 'image','slug','created_at') /* all columns except "body" */
        ->selectRaw('SUBSTRING(`description`, 1, 500) as `description`')
        ->paginate(9); // For Collection
    foreach($blog as $blog_imp)
    {
        $blog_imp->impression = $blog_imp->impression + 1 ;
        $blog_imp->save();
    }
    $blogs = Blog::latest('created_at')->take(9)->get();
    $blog_category = BlogCategory::where('status','A')->get();
    // dd($blog_category);
    // dd($blog);
    return view('blog', compact('blogs','blog_category','blog'));
        // return view('blog');
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function blogCategory($slug){
        $blog_category = BlogCategory::where('slug',$slug)->first();
        $blog = Blog::where('category_id',$blog_category->id)->select('id', 'name', 'image','slug','created_at') /* all columns except "body" */
        ->selectRaw('SUBSTRING(`description`, 1, 300) as `description`')
        ->paginate(1);
        // dd($blog);
    foreach($blog as $blog_imp)
    {
        $blog_imp->impression = $blog_imp->impression + 1 ;
        $blog_imp->save();
    }
    $blogs = Blog::latest('created_at')->take(1)->get();
    $blog_category = BlogCategory::where('status','A')->get();
    return view('blog', compact('blogs','blog_category','blog'));
    }

    public function blogList($slug){
        $blog = Blog::where('slug',$slug)->where('status','A')->first();
        $top = Blog::latest('created_at')->take(4)->get();
        $most_view = Blog::orderBy("total_view", "desc")->get();
        $category = BlogCategory::where('id',$slug)->first();
        if (!is_null($blog)) {
            $blog->total_view = $blog->total_view + 1 ;
            $blog->save();
            $categories = BlogCategory::where('status','A')->get();
            return view('single', compact('blog', 'categories','category','top','most_view'));
        } else {
            abort(404);
        }
    }
   
    public function faq(){
        $faqs = Faq::all();
        return view('faq',compact('faqs'));
    }
   
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
   

    public function parent_category(Request $request,$slug){
        $parent_category = Category::where('parent_id',null)->orwhere('parent_id','null')->get();
        $all_child_category = Category::where('parent_id','!=' ,null)->get();
        $category_id = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category_id->id)->get();
        return view('category_single',compact('parent_category','all_child_category','products','category_id'));
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $results = Product::where('name', 'like', $keyword . '%')
                ->limit(6)
                ->get();
                $df ='';
                $df.= '<ul id="search-list">';
                foreach($results as $result){
                $df .= '<li><a href="/product/'.$result->slug.'"><img class="me-2" src="/'.$result->image.'" width="55px">'.$result->name.' </a></li>';
                }
                $df .= '</ul>';
                
            return response()->json($df);
        }
    }

    public function inquiry(Request $request){
        // dd($request);
        $messages = [
            'name.required' => 'We need to know your full name!',
            'email.required' => 'Email is required!',
            'phone.required' => 'Phone is required!',
            // other custom messages
        ];

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10'
        ],$messages);
        
            $inquiry = new Inquiry;
            $inquiry->visa_type = $request->visa_type;
            $inquiry->name = $request->name;
            $inquiry->inquiry_solve = 'Pending';
            $inquiry->phone = $request->phone;
            $inquiry->email = $request->email;
            // $inquiry->company_name = $request->company_name;
            $inquiry->message = $request->message;
            // $inquiry->prefer = json_encode($request->prefer);
            $inquiry->save();
            Mail::to('kdomdiya@gmail.com')->send(new InquiryMail($inquiry));
            return redirect()->back();
    }

    public function search_visa(Request $request){
        $countries = Country::where('name', 'like', '%' . $request->data . '%')->take(3)->get();
        return $countries;
    }

    public function visa_country(Request $request,$slug){
        $country = Country::where('slug', $slug)->with('visas')->first();
        return view('country_single',compact('country'));
    }

    public function work(){
        return view('types-visa/diplomatic');
    }

    public function family(){
        return view('types-visa/family');
    }

    public function student(){
        return view('types-visa/student');
    }

    public function visitor(){
        return view('types-visa/visitor');
    }

    public function tourist(){
        return view('types-visa/tourist');
    }

    public function transit(){
        return view('types-visa/transit');
    }
    // otherlinks
    public function visa_requirements(){
        return view('otherLinks/visa_requirements');
    }
    public function diplomatic_mission(){
        return view('otherLinks/diplomatic_mission');
    }
    public function testimonial(){
        return view('otherLinks/testimonial');
    }
    public function feedback(){
        return view('otherLinks/feedback');
    }
    public function privacy(){
        return view('otherLinks/privacy');
    }
    public function refund(){
        return view('otherLinks/refund');
    }
    public function condition(){
        return view('otherLinks/condition');
    }
    public function bank_details(){
        return view('otherLinks/bank_details');
    }
    //other services
    public function visa_assistance(){
        return view('otherservices/visa_assistance');
    }
    public function air_ticketing(){
        return view('otherservices/air_ticketing');
    }
    public function attestation_aposite(){
        return view('otherservices/attestation_aposite');
    }
    public function travel_insurance(){
        return view('otherservices/travel_insurance');
    }
    public function document_translation(){
        return view('otherservices/document_translation');
    }
    public function oktoboard(){
        return view('otherservices/oktoboard');
    }
}
