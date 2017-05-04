<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{
    public function index(Request $request , $id)
    {   
        $list_friends = DB::table('flinks')->get();

        $list_config = DB::table('config')->where('display', '1')->get()->first();

        $ob = DB::table('goods')->where('gid',$id)->get();

        $pic = $ob[0]->pic;
        $pic = explode('^^',$pic);
        array_pop($pic);
        $data = $ob[0]->data;
        $data = explode('^^',$data);
        array_pop($data);

        $check = $ob[0]->check;
        $check = explode('^^',$check);
        array_pop($check);
        
        $spec = $ob[0]->spec;
        $spec = explode('^^',$spec);
        array_pop($spec);

        $keyword = $ob[0]->keyword;
        $keyword = explode('^^',$keyword);
        array_pop($keyword);

        foreach($check as $k=>$v){
            $dat[] = explode('~~',$v); 
        }
        
        foreach($dat as $ka=>$va){
            $va['1'] = explode('``',$va['1']);
            array_pop($va['1']);
            $che[]=$va;
        }
        $ob1 = DB::table('comments')->where('gid',$id)->get();
        $ob2 = DB::table('goods')->select('goods.gid')->get();
        $n = count($ob2);
        $q= rand(0,$n-1);
        $w= rand(0,$n-1);
        $e= rand(0,$n-1);
        $r= rand(0,$n-1);
        $t= rand(0,$n-1);
        $y= rand(0,$n-1);
        $u= rand(0,$n-1);
        $i= rand(0,$n-1);
        $o= rand(0,$n-1);
        $p= rand(0,$n-1);

        foreach($ob2 as $k =>$v){
            if($k == $q){
                $b[] = $v->gid;
            }
            if($k == $w){
                $b[] = $v->gid;
            }
            if($k == $e){
                $b[] = $v->gid;
            }
            if($k == $r){
                $b[] = $v->gid;
            }
            if($k == $t){
                $b[] = $v->gid;
            }
            if($k == $y){
                $b[] = $v->gid;
            }
            if($k == $u){
                $b[] = $v->gid;
            }
            if($k == $i){
                $b[] = $v->gid;
            }
            if($k == $o){
                $b[] =$v->gid;
            }
            if($k == $p){
                $b[] = $v->gid;
            }
        }
        $ob3 = DB::table('goods')->whereIn('gid',$b)->get();
        $ob4 = DB::table('goods')->whereIn('gid',$b)->get();
        $ob5 = DB::table('goods')->select()->limit(5)->get();
        return view('Home.introduction',['ob5'=>$ob5 ,'ob3'=>$ob3 ,'ob1'=>$ob1 ,'ob'=>$ob,'pic'=>$pic,'data'=>$data,'che'=>$che,'spec'=>$spec,'keyword'=>$keyword ,'list_friends'=>$list_friends,'list_config'=>$list_config]);
    }

    public function tijiao(Request $request)
    {   
        if(empty(session('users'))){
            return redirect('/home/login');
        }
        $b='';
        $a = $request->except('_token','price','name','gid','pic','num');
        foreach($a as $k=>$v)
        {
            $b.=$k.':'.$v.';';
        }
        $c = $request->only('price','name','gid','pic','num');
        $c['check'] = $b;
        $c['uid'] = session('users')->uid;
        // $request->session()->put($c);
        // var_dump($c['gid']);die;


        session(['c'=>$c]);
        // var_dump(session('c'));die;
        // die;
        // var_dump(session('c'));

        // var_dump($a);
        return redirect('home/goods/'.$c['gid']);

    }

    public function buy(Request $request)
    {
                if(empty(session('users'))){
            return redirect('/home/login');
        }
        $b='';
        $a = $request->except('_token','price','name','gid','pic','num');

        foreach($a as $k=>$v)
        {
            $b.=$k.':'.$v.';';
        }
        $c = $request->only('price','name','gid','pic','num');
        // var_dump($b);
        // session(['d'=>$c]);
        
        $c['check'] = $b;
        $c['uid'] = session('users')->uid;
        $c['state'] = -1;
        // var_dump($c);
        // $c['did'] = time().$c['uid'].rand(1,9999);
        // var_dump($c);die;
        // var_dump(session('users')->uid);die;
        $id = DB::table('book_lists')->insertGetId($c);
        // var_dump($id);die;
        return redirect('home/checkbuy/'.$id);
    }
    public function clear()
    {
        session()->forget('c');
        return redirect('home/index');
    }
    
}
