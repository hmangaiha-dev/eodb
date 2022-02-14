<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * App\Models\Office
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $description
 * @property string|null $contact
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Application[] $applications
 * @property-read int|null $applications_count
 * @property-read \App\Models\BankDetail|null $bankDetail
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\StaffPost[] $postings
 * @property-read int|null $postings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Staff[] $staffs
 * @property-read int|null $staffs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Office newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Office query()
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Office whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Office extends Model
{
    const RULES = [
        'code' => 'required|unique:offices',
        'name' => 'required'
    ];
    use HasFactory;

    protected $fillable = ['id','code', 'name', 'description','contact'];

    public function roles(): MorphToMany
    {
        return $this->morphToMany(Role::class, name: 'roleable', table: 'roleables');
    }

    public function postings(): HasMany
    {
        return $this->hasMany(StaffPost::class);
    }
    public function staffs(): BelongsToMany
    {
        return $this->belongsToMany(Staff::class, table: 'staff_posts')->withTimestamps();
    }
    public function bankDetail(): MorphOne
    {
        return $this->morphOne(BankDetail::class, 'owner');
    }
    public function applications(): BelongsToMany
    {
        return $this->belongsToMany(Application::class,'office_applications');
    }
}
