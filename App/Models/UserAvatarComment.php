<?php
namespace App\Models;

use App\Components\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: bond
 * Date: 12.12.16
 * Time: 13:29
 */

class UserAvatarComment extends ActiveRecord
{
    protected static $tableName = 'users_avatars_comments';
    protected static $tableFields = [
                                     'id' => 'id',
                                     'user_avatar_id' => 'userAvatarId',
                                     'comment_id' => 'commentId',
                                    ];
}
