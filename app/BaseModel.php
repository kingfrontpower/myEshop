<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
//    共同的函式，用來直接執行 sql 語法，寫在 BaseMode 中，其他 Model 改成繼承 BaseModel
//因為安全性的考慮，只能內部使用，不能用來執行使用者傳進來的語法

    public function selectQuery($sql_select) {
        return DB::select($sql_select);
    }

    public function sqlStatement($sql_statement) {
        DB::statement($sql_statement);
    }
}
