<?php

namespace App\Runsite;
use Illuminate\Database\Eloquent\Model;

class Nodes extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nodes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'parent_id',
      'class_id',
      'subtree_order',
      'shortname',
      'absolute_path',
      'controller',
      'can_export_children',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $breadcrumb = [];

    public function _class() {
      return $this->belongsTo('App\Runsite\Classes', 'class_id');
    }

    public function children() {
      return $this->hasMany('App\Runsite\Nodes', 'parent_id', 'id');
    }





    public function generateAbsulutePath($parent_id, $shortname) {
      $parent = $this->where('id', $parent_id)->first();
      if(!$parent)
        return '/';

      if($parent->absolute_path == '/')
        return $parent->absolute_path . $shortname;

      return $parent->absolute_path . '/' . $shortname;
    }

    public function isHome() {
      return $this->id == 1;
    }



    public function generateBreadcrumb($id) {
      $node = $this->find($id);
      $this->breadcrumb[] = $node->id;
      if($node->parent_id) return $this->generateBreadcrumb($node->parent_id);
      return $this->breadcrumb;
    }

    // public function insert($class_shortname, $parent_id=0, $fields=[], $classesModel, $languagesModel) {
    //   $class = $classesModel->where('shortname', $class_shortname)->first();
    //   if(! $class)
    //     return false;
    //
    //   $newNode = $this;
    //
    //   $newNode->class_id = $class->id;
    //
    //   // SHORTNAME
    //   $newNode->shortname = str_slug($fields[$languagesModel->getDefaultId()]['name']); // generation shortname
    //
    //   // ABSOLUTE PATH
    //   $newNode->absolute_path = '/';
    //
    //   $newNode->save();
    //
    //   foreach($fields as $lang_id=>$field) {
    //
    //     $insert_fields = ['language_id'=>$lang_id, 'node_id'=>$newNode->id];
    //     foreach($field as $field_name=>$value) {
    //       $insert_fields[$field_name] = $value;
    //     }
    //
    //     \DB::table($classesModel->prefix.$class_shortname)->insert($insert_fields);
    //   }
    // }
}
