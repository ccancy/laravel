<?php

namespace App\Http\Controllers\Announcement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *执行搜索和显示用户信息
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $where = '';
        $ob = DB::table('announcement');
        //如果有name查询,执行查询
        if($request->has('name')){
            $name = $request->input('name');
            //获取要查询的Name关键字
            $where['name'] = $name;
            $ob->where('name','like',"%{$name}%");
        }
        //获取用户列表信息
        $list = $ob->paginate(4);
        // dd($list);
        return view('Admin.Announcement.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //返回创建用户的视图
        return view('Admin.Announcement.add');
    }

    /**
     * Store a newly created resource in storage.
     *执行用户添加功能
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证用户名和邮箱为必填
        


        $data = $request->except('_token');
        $id = DB::table('announcement')->insertGetId($data);
        if($id > 0){
            return redirect('admin/announcement')->with('msg','添加成功');
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *显示修改页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('announcement')->where('aid',$id)->first();
        // dd($data);
        return view('Admin.Announcement.edit',['ob'=>$data]);
        
    }

    /**
     * Update the specified resource in storage.
     *执行修改
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        $data = $request->except('_token','_method');
        // dd($data['pic']);
        $row = DB::table('announcement')->where('aid',$id)->update($data);
        if($row>0){
            return redirect('admin/announcement')->with('msg','修改成功');
        }else{
            return redirect('admin/announcement')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *执行删除操作
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = DB::table('announcement')->where('aid',$id)->delete();
        if($row > 0){
            return redirect('admin/announcement')->with('msg','删除成功');
        }else{
            return redirect('admin/announcement')->with('error','删除失败');
        }
    }
}
