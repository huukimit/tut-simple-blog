<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO: 1. Hãy bỏ comment cho đoạn code dưới đây để có thể thực hiện khai báo/tạo các trường cho bảng users.
        // Tạo bảng users:
        /*
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            // TODO: 2. Viết thêm code tạo trường first_name, last_name cho bảng users.
            // Hãy để 2 field này đều có thể null!

            $table->timestamps();
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // TODO: 3. Rollback
        // Được gọi khi thực hiện rollback migration, đưa database về lại cấu trúc trước khi thực hiện migration này.
        // Đơn giản là code trong hàm down sẽ thực hiện ngược lại so với hàm up().
        Schema::dropIfExists('users');
    }
}
