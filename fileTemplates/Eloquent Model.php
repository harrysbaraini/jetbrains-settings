<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ${NAME} extends Model
{
    use SoftDeletes;
    
    /**
     * Fillable fields.
     *
     * @param array
     */
    protected \$fillable = [];
    
    /**
     * castable fields.
     *
     * @param array
     */
    protected \$casts = [];
    
    /**
     * Fields which are of date type.
     *
     * @param array
     */
    protected \$dates = ['created_at', 'updated_at', 'deleted_at'];
}