<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DepartmentService
 *
 * @property int $id
 * @property int|null $department_id
 * @property int|null $category_id
 * @property string|null $service_name
 * @property string|null $who_should_apply
 * @property string|null $how_to_apply
 * @property string|null $document_to_submit
 * @property string|null $timeline
 * @property string|null $fees
 * @property string|null $path
 * @property string|null $sample_form
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ServiceCategory|null $category
 * @property-read \App\Models\Department|null $department
 * @property-read mixed $category_type
 * @property-read mixed $dept_name
 * @property-read mixed $dept_slug
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService query()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereDocumentToSubmit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereFees($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereHowToApply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereSampleForm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereServiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereTimeline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentService whereWhoShouldApply($value)
 * @mixin \Eloquent
 */
class DepartmentService extends Model
{
    use HasFactory;

    protected $appends = ['dept_name','category_type','dept_slug'];



    public function category()
    {
        return $this->belongsTo(ServiceCategory::class,'category_id','id');
    }


    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }


    public function getDeptNameAttribute() {
        return $this->department()->first()->dept_name;
    }

    public function getCategoryTypeAttribute()
    {
        return $this->category()->first()->name;
    }


    public function getDeptSlugAttribute()
    {
        return $this->department()->first()->slug;
    }
}
