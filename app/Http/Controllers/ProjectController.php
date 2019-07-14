<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use Storage;

class ProjectController extends Controller
{
    public function index(){
    	$project = Project::orderby('id','desc')->get();
    	return view('admin.project.list',['project' => $project]);
    }
    public function sold(){
        $project = Project::all();
        return view('admin.project.sold',['project' => $project]);  
    }
     public function add(){
        $pro = array();
    	$project = Project::all();
    	return view('admin.project.add');
    }
    public function store(Request $request){

        $this->validate($request,
        [
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'acreage' => 'required',
            'image' => 'required',
            'content' => 'required',
            'overview' => 'required',
        ],
        [
            'title.required' => 'Bạn cần nhập Tiêu đề!',
            'price.required' => 'Bạn cần nhập Giá!',
            'loction.required' => 'Bạn cần nhập Vị trí!',
            'acreage.required' => 'Bạn cần nhập Diện tích!',
            'image.required' => 'Bạn cần thêm ảnh!',
            'content.required' => 'Bạn cần nhập Nội dung!',
            'overview.required' => 'Bạn cần nhập Tổng quan!',
        ]);
        if ($request['sold']==NULL) {
                $pro['sold'] = 0; 
           }
        if ($request['sold']=='on') {
                $pro['sold'] = 1;
           }      
    	
        $pro['title'] = $request['title'];
        $pro['location'] = $request['location'];
        $pro['price'] = $request['price'];
        $pro['acreage'] = $request['acreage'];
        $pro['map'] = $request['map'];
        $pro['slug'] = str_slug($request['title']."-".time());
        // var_dump($pro['slug']);die();
        $pro['overview'] = $request['overview'];
        $pro['content'] = $request['content'];
        $project = Project::create($pro);
        $img = array();
        if($file = $request->file('image')){ 
            
                $temp['path'] = Storage::disk('local')->put('public/images/product',$file);
                // $temp['product_id'] = $
                $file->move($temp['path'],$file); 
                $temp['name'] = $request['title'];
                // $img = Image::create($temp);
                // $pro['image_id'] = $img->id;
                $temp['project_id'] = $project->id;
                Image::create($temp);       
        }   
        return redirect('admin/project/list')->with('alert','Thêm thành công!');
    }
    public function edit($id){
        $project = Project::find($id);
        // var_dump($project);die();
        $image = Image::where('project_id', $id)->first();
        // var_dump($image);die();
        return view('admin/project/edit',[
                                            'project'=> $project, 
                                            'image' => $image,
                                        ]);
    }
    public function store_edit(Request $request, $id){
        $this->validate($request,
        [
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'acreage' => 'required',
            // 'image' => 'required',
            'content' => 'required',
            'overview' => 'required',
        ],
        [
            'title.required' => 'Bạn cần nhập Tiêu đề!',
            'price.required' => 'Bạn cần nhập Giá!',
            'loction.required' => 'Bạn cần nhập Vị trí!',
            'acreage.required' => 'Bạn cần nhập Diện tích!',
            // 'image.required' => 'Bạn cần thêm ảnh!',
            'content.required' => 'Bạn cần nhập Nội dung!',
            'overview.required' => 'Bạn cần nhập Tổng quan!',
        ]);
        if ($request['sold']==NULL) {
                $pro['sold'] = 0; 
           }
        if ($request['sold']=='on') {
                $pro['sold'] = 1;
           }      
        
        $pro['title'] = $request['title'];
        $pro['location'] = $request['location'];
        $pro['price'] = $request['price'];
        $pro['acreage'] = $request['acreage'];
        $pro['map'] = $request['map'];
        $pro['slug'] = str_slug($request['title']."-".time());
        $pro['overview'] = $request['overview'];
        $pro['content'] = $request['content'];
        $project = Project::where('id',$id)->update($pro);
        // $img = array();   
        if($file = $request->file('image')){
            // var_dump($file);die();
                 $img = Image::where('project_id', $id);
                    if ($img) {
                        $img->delete();
                    }
                $temp['path'] = Storage::disk('local')->put('public/images/product',$file);
                // $temp['product_id'] = $
                $file->move($temp['path'],$file); 
                $temp['name'] = $request['title'];
                $temp['project_id'] = $id;
                Image::create($temp);    
        }
        
        return redirect('admin/project/list')->with('alert','Sửa thành công!');
    }
    public function delete($id){
        $pro = Project::find($id);
        $img = Image::where('project_id', $id);
        if($img){
            $img->delete();
        }
        $pro->delete();
        return redirect('admin/project/list')->with('alert','Xóa thành công!');
    }
    public function home(){
        $project = Project::orderby('id','desc')->get();
        $image = Image::all();
        return view('front.home',['project' => $project,
                                    'image'=> $image
                                ]);     
    }
    public function project_list(){
        $project = Project::orderby('id','desc')->paginate(6);
        return view('front.project.list',['project' => $project]);
    }
    public function project_detail($slug){
        $pro = Project::orderby('id','desc')->get();
        $project = Project::where('slug',$slug)->first();
        return view('front.project.detail',['project' => $project,
                                             'pro' => $pro     ]);
    }
}
