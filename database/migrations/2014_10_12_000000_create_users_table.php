<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_hp',13);
            $table->string('no_ktp',16)->nullable();
            $table->string('alamat',30);
            $table->string('role',20);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt(123),
            'no_hp'=>'0812',
            'alamat'=>'bwi'

        ]);
        
        User::create([
            'name'=>'adminklinik',
            'email'=>'adminklinik@gmail.com',
            'role'=>'admin_klinik',
            'password'=>bcrypt(123),
            'no_hp'=>'0812',
            'alamat'=>'bwi'

        ]);

        
        User::create([
            'name'=>'pengguna',
            'email'=>'pengguna@gmail.com',
            'role'=>'pengguna',
            'password'=>bcrypt(123),
            'no_hp'=>'0812',
            'alamat'=>'bwi'

        ]);

        
        User::create([
            'name'=>'dokter',
            'email'=>'dokter@gmail.com',
            'role'=>'dokter',
            'password'=>bcrypt(123),
            'no_hp'=>'0812',
            'alamat'=>'bwi'

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
