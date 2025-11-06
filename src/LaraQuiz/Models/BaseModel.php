<?php
declare(strict_types=1);

namespace LaraQuiz\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BaseModel
 *
 * @package LaraQuiz\Models
 */
abstract class BaseModel extends Model
{
    use HasFactory;
    /**
     * @return string
     */
    abstract public static function tableName(): string;

    /**
     * BaseModel constructor.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = static::tableName();
    }
}
