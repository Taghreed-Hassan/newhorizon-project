<?php

namespace App\Http\Controllers;
//ccccc
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\forusrs;
use App\insproducts;
use Illuminate\Support\Facades\DB;

class con1 extends Controller
{
     public function logg(){
        
        return view('logg');
     }
     public function goinsert(Request $formas){
        
        $datas=new forusrs();
         $this->validate($formas,[ 
            'email'=>'required||unique:forusrs'
        
       ]);
        $datas->name=$formas->name;
        $datas->email=$formas->email; 
        $datas->password=$formas->pass;
        $datas->active=$formas->avl;
        
         $datas->save();
             return redirect('seclogg');
    }
     
    
    
      public function seclogg(){
        
        return view('seclogg');
     }
     //شرط الدخول وجود الايميل والباسورد
      public function logg2(Request $formas){
          //from laaaaaraaaa
          /*
          $users = DB::table('forusrs')
           ->whereExists(function ($formas) {
              $formas ->select(DB::raw(email))
                     ->from('orders')
                     ->whereRaw('orders.forusrs_id = forusrs.id');
           })
           ->get();
           
         $datas=new forusrs();
         $datas->email=$formas->email; 
          $datas->password=$formas->pass;
           
           */
        return redirect('showpro');
     }
     
       public function showpro(){
    $roww=DB::table('insproducts')
            
            ->orderby('price','asc')
            ->get();
    
return view('showpro',  compact('roww'));
}
     
     
     
     
      public function show(){
        $row= DB::table('insproducts')
                ->orderby('price','asc')
                ->get();
        return view('show', compact('row'));
    }
    
     
    
    
    
     public function insertproduct(){
        
        return view('insertproduct');
     }
   
     
    public function go(Request $sforrm){
      $sdatas=new insproducts();
       //validation
       $this->validate($sforrm,[ 
            'proname'=>'required||unique:insproducts',
        'price'=>'required||numeric'
       ]);
       
        
        
         $pictmp=$sforrm->file('pic');
        
    $pic=$pictmp->getClientOriginalName();
      
        $sdatas->proname=$sforrm->proname;
        $sdatas->catnmae=$sforrm->catname; 
        $sdatas->discrip=$sforrm->description;
        $sdatas->price=$sforrm->price;
         $sdatas->av=$sforrm->av;
        
         $sdatas->pic=$pic;
         
          $sdatas->save();
         $pictmp->move('image',$pic);
    return redirect('show');
    }
    
    
    
    
  

public function delete(insproducts $pid){
    $picc=$pid->pic;
    $pid->delete();
    unlink("image/$picc");
    return redirect('show');
}

public function edit(insproducts $pid){
    return view('edit',  compact('pid'));
}
//uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu
public function update(Request $sforrm,insproducts $pid){
    
    $picold=$pid->pic;//old pic
    $pic=$sforrm->file('file');//tmpname
    $picnew=$pic->getClientOriginalName();//new name
    
    $id=$pid->id;
    if($picold==$picnew){
    
    $pid->update($sforrm->all()); 
   return redirect('show');
    }
    else{
        
        $pid->update($sforrm->all()); 
        
        $pid->where('id',$id)->update(['pic'=>$picnew]);//pic
        unlink("image/$picold");//delelte old pic
        $pic->move("image",$picnew);//move new pic
        return redirect('show');
    }
}
}

  

    
  






