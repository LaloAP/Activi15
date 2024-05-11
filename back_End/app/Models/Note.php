<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','contenido','activo','categoria_id'];

    #protected $guarded = [];

    static function todas_las_notas(){
        return Note::leftJoin('categorias','categories.id','=','notes.categoria_id')
        ->select('categoria_nombre','notes.id','titulo','contenido')
        ->where('notes.active',true)
        ->get();
    }

    static function nota_por_id($id){
        return Note::leftJoin('categorias','categories.id','=','notes.categoria_id')
        ->select('categoria_name','notes.id','titulo','contenido','notes.created_at','notes.updated_at')
        ->where('notes.id',$id)
        ->where('notes.active',true)
        ->firstOrFail();
       
    }

    static function notas_por_category_id($id){
        return Note::leftJoin('categorias','categories.id','=','notes.category_id')
        ->select('categoria_name','notes.id','categoria_id','titulo','contenido','notes.created_at','notes.updated_at')
        ->where('category_id',$id)
        ->where('notes.active',true)
        ->get();
       
    }
}
